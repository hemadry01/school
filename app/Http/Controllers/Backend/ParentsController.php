<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParentRequest;
use App\Models\Parents;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["parents"]=Parents::all();
       // dd($data);
        return view("backend.parent.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.parent.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ParentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParentRequest $request)
    {

        // dd($request);

        $path="";
        if($request->hasFile('image')){
            $path = $request->file('image')->store('images/parent');
        }

        $parent=Parents::create([
            "guardian_name"=>$request->get("guardian_name"),
            "father_name"=>$request->get("father_name"),
            "mother_name"=>$request->get("mother_name"),
            "father_profession"=>$request->get("father_profession"),
            "mother_profession"=>$request->get("mother_profession"),
            "email"=>$request->get("email"),
            "phone"=>$request->get("phone"),
            "address"=>$request->get("address"),
            "image"=>$path,
            "user_name"=>$request->get("user_name"),
            "password"=>Hash::make($request->get("password")),
        ]);



        $token = $parent->createToken("create new token")->plainTextToken;

        $response=[
            "parrent"=>$parent,
            "token"=>$token,
        ];
        return redirect()->route("parents.index")->with([$response,"success"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Parents $parent)
    {
        $data["parent"]=$parent;
        // dd($data);
        return view("backend.parent.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParentRequest $request, Parents $parent)
    {
        $path = $parent->image;
        if($request->hasFile("image")){
            if($parent->image){
                Storage::delete($parent->image);
            }
            $path = $request->file("image")->store('images/parent');
        }

        $params = $request->only(["guardian_name","father_name","mother_name","father_profession","mother_profession","email","phone","address"]);
        $params["image"] = $path;

        if($parent->update($params)){
            return redirect()->route("parents.index")->with("success");
        }

        return redirect()->back()->withInput();

       // dd($parent);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parents $parent)
    {
        dd($parent);
        
    }

    public function parentView( Parents $parent){
        //dd($parent);
        $data["parent"]=$parent;
        return view("backend.parent.view",$data);
    }
}
