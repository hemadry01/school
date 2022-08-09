<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["teachers"]=Teachers::all();
        return view("backend.teacher.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.teacher.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
        $path="";
        if($request->hasFile("photo")){

            $path = $request->file('photo')->store('images/teacher');
        }
        $teacher=Teachers::create([

            "name"=>$request->get("name"),
            "designation"=>$request->get("designation"),
            "dob"=>$request->get("dob"),
            "gender"=>$request->get("gender"),
            "religion"=>$request->get("religion"),
            "email"=>$request->get("email"),
            "phone"=>$request->get("phone"),
            "address"=>$request->get("address"),
            "joining_date"=>$request->get("joining_date"),
            "photo"=>$path,
            "user_name"=>$request->get("user_name"),
            "password"=>Hash::make($request->get("password")),
        ]);

        $token = $teacher->createToken("create teacher token")->plainTextToken;

        return redirect()->route("teachers.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teachers $teacher)
    {
        $data["teacher"]=$teacher;
        return view("backend.teacher.view",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teachers $teacher)
    {
        //dd($teacher);
        $data["teacher"]=$teacher;
        return view("backend.teacher.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request, Teachers $teacher)
    {
       // dd($teacher);
        $path = $teacher->photo;
        if($request->hasFile("photo")){
            if($teacher->photo){
                Storage::delete($teacher->photo);
            }
            $path = $request->file("photo")->store('images/teacher');
        }

        $params = $request->only(["name","designation","dob","gender","religion","email","phone","address","joining_date","photo","user_name"]);
        $params["photo"] = $path;

        if($teacher->update($params)){
            return redirect()->route("teachers.index")->with("success");
        }

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//     public function deleteTeacher($id){
//         $teacher=Teachers::find($id);
//         //dd($teacher);
//         if($teacher->delete()){

//             Storage::delete($teacher->photo);
//             return redirect()->back();
//         }
//         return redirect()->back()->withInput()->with("ERROR",__("Failed to store data"));
//    }
}
