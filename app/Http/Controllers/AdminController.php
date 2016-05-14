<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Contact;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Redirector;

class AdminController extends Controller
{
    
    public function getuserlist()
    {
        
        $keyword = Input::get('search','');
        $alluser = User::SearchByKeyword($keyword)->get();
        return View::make('admin.userlist' , compact('alluser'));
    }

    public function create()
    {
        return View('admin.createuser');
    }

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

    public function show($id)
    {
        //
    }
    public function Dashboard(){

        return View('admin.index');
    }

    public function edit($id)
    {
        $user=User::find($id);
        if(!$user) {
            die("No User Found");
        }
        return View('admin.edit',compact('user'));
    }

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
    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return Redirect()->route('alluser');
    }
    public function savedbyuser(){
        $allcontact=Contact::all();
        return View('admin.savedbyuser',compact('allcontact'));
          
    }
}
