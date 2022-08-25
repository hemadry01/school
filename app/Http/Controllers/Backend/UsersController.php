<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["users"]=User::all();
        return view("backend.user.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $path="";
        if($request->hasFile("image")){
            $path=$request->file("image")->store("images/user");
        }

        $user=User::create([
            "name"=>$request->get("name"),
            "dob"=>$request->get("dob"),
            "gender"=>$request->get("gender"),
            "religion"=>$request->get("religion"),
            "email"=>$request->get("email"),
            "phone"=>$request->get("phone"),
            "address"=>$request->get("address"),
            "joining_date"=>$request->get("joining_date"),
            "image"=>$path,
            "role"=>$request->get("role"),
            "user_name"=>$request->get("user_name"),
            "password"=>Hash::make($request->get("password")),
        ]);

        $token=$user->createToken("create user token")->plainTextToken;
        $response=[
            "parrent"=>$user,
            "token"=>$token,
        ];

        //dd($user);
        return redirect($response,201)->route("users.index")->with("seccess");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $data["users"]=$user;
        //dd($data);
        return view("backend.user.view",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data["user"]=$user;
        return view("backend.user.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        //dd($user);

        $path = $user->image;
        if($request->hasFile("image")){
            if($user->image){
                Storage::delete($user->image);
            }
            $path = $request->file("image")->store('images/user');

        }
        $param=$request->only(["name","dob","gender","religion","email","phone","address","joining_date","role","user_name"]);
        $param["image"]=$path;

        if($user->update($param)){
            return redirect()->route("users.index");
        }
        else{
            return redirect()->back()->withInput();
        }
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }

    public function deleteUser($id){
        $user=User::find($id);
        //dd($teacher);
        if($user->delete()){

            Storage::delete($user->image);
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with("ERROR",__("Failed to store data"));
    }
}
