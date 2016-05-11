<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Redirector;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getuserlist()
    {
        
        $keyword = Input::get('keyword', '');
        $alluser = User::SearchByKeyword($keyword)->get();
        return View::make('admin.userlist' , compact('alluser'));

        //echo '<pre>';print_r($alluser);die;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input = Input::all();
         $user=new User;
         $user->name= $request->name;
         $user->email= $request->email;
         $user->password= bcrypt($request['password']);
         $user->phone_no= $request->phone_no;
         $user->website= $request->website;
         $user->name= $request->name;
         $user->save();
         return Redirect()->route('alluser');
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
    public function Dashboard(){

        return View('admin.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        if(!$user) {
            die("No User Found");
        }
        return View('admin.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->phone_no=$request->phone_no;
        $user->website=$request->website;
        $user->save();
        return Redirect()->route('alluser');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return Redirect()->route('alluser');
    }
}
