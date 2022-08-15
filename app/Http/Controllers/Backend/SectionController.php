<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Teachers;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["classes"]=Classes::pluck("class_name","id");
        $data["sections"]=Section::all();
        return view("backend.section.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["teachers"]=Teachers::pluck("name","id");
        $data["classes"]=Classes::pluck("class_name","id");

        return view("backend.section.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectionRequest $request)
    {
        $section= new Section();
        $section=$section->insert($request->only($section->getFillable()));

        if(!empty($section)){
            return redirect()->route("sections.index");
        }
        return redirect()->back()->withInput();
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
    public function edit(Section $section)
    {
        $data["sections"]=$section;
        $data["teachers"]=Teachers::pluck("name","id");
        $data["classes"]=Classes::pluck("class_name","id");

        return view("backend.section.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SectionRequest $request, Section $section)
    {
      $section= $section->update($request->only($section->getFillable()));

      if(!empty($section)){
        return redirect()->route("sections.index")->with("");
      }
      return redirect()->back()->withInput();
    }

    public function sectionFilter(Request $request){

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
