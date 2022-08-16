<?php

namespace App\Http\Controllers\Backend;

use App\Models\Classes;
use App\Models\Teachers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubjectRequest;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["subjects"]=Subject::all();
        return view("backend.subject.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["teachers"] = Teachers::pluck("name", "id");
        $data["classes"] = Classes::pluck("class_name", "id");

        return view("backend.subject.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SubjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectRequest $request)
    {
        $subject=new Subject();

        $sub=$subject->insert($request->only($subject->getFillable()));

        if(!empty($sub)){
            return redirect()->route("subjects.index")->with("");
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
    public function edit(Subject $subject)
    {
        $data["subjects"] = $subject;
        $data["teachers"] = Teachers::pluck("name", "id");
        $data["classes"] = Classes::pluck("class_name", "id");

        return view("backend.subject.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectRequest $request, Subject $subject)
    {
        $subject = $subject->update($request->only($subject->getFillable()));

        if (!empty($subject)) {
            return redirect()->route("subjects.index")->with("");
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
}
