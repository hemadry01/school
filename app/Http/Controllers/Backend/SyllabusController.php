<?php

namespace App\Http\Controllers\Backend;

use App\Models\Classes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SyllabusRequest;
use App\Models\Syllabus;
use Illuminate\Support\Facades\Storage;


class SyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["syllabus"]=Syllabus::all();
        return view("backend.syllabus.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["classes"] = Classes::pluck("class_name", "id");

        return view("backend.syllabus.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SyllabusRequest $request)
    {
        $data=new Syllabus();

        $file=$request->file;
        $filename=time(). '.' .$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);

        $data->file=$filename;
        $data->title=$request->title;
        $data->desciription=$request->desciription;
        $data->user_id="Suman";
        $data->class_id=$request->class_id;

        $data->save();

        if(!empty($data)){
            return redirect()->route("syllabus.index");
        }
        return redirect()->back();
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
    public function edit($id)
    {
       //dd($id);
       $data["classes"] = Classes::pluck("class_name", "id");
       $data["syllabus"]=Syllabus::find($id);
       return view("backend.syllabus.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SyllabusRequest $request, Syllabus $syllabus)
    {
        // dd($syllabus);
        $path = $syllabus->file;
        if($request->hasFile("file")){
            if($syllabus->file){
                Storage::delete($syllabus->file);
            }
            $filename=time(). '.' .$path->getClientOriginalExtension();
            $request->file->move('assets',$filename);

        }

        $params = $request->only(["title","desciription","user_id","class_id"]);
        $params["file"] = $$filename;

        if($syllabus->update($params)){
            return redirect()->route("syllabus.index")->with("success");
        }

        return redirect()->back()->withInput();
    }

    public function downloder(Request $request,$file){

        return response()->download(public_path('assets/'.$file));
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
}
