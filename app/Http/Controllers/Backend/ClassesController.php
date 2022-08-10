<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassesRequest;
use App\Models\Classes;
use App\Models\Teachers;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["classes"]=Classes::all();
        return view("backend.class.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["teachers"]=Teachers::pluck("name","id");
        return view("backend.class.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassesRequest $request)
    {
        $data["class"]=Classes::create([
            "class_name"=>$request->get("class_name"),
            "class_numeric"=>$request->get("class_numeric"),
            "teacher_id"=>$request->get("teacher_id"),
            "note"=>$request->get("note"),
        ]);

        if(!empty($data)){

            return redirect()->route('classes.index');
        }
        else{
            return redirect()->withInput();
         }

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
    public function edit(Classes $class)
    {
      $data["class"]=$class;
      $data["teachers"]=Teachers::pluck("name","id");
      //dd($data);
      return view("backend.class.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClassesRequest $request, Classes $class)
    {
        $param=$request->only(["class_name","class_numeric","teacher_id","note"]);

       // dd($param);

        if($class->update($param)){

            return redirect()->route("classes.index");
        }
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $class)
    {
        // dd($class);
    }
}
