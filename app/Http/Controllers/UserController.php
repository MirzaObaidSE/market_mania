<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use View;
use App\User;
use Illuminate\Support\Facades\Input;
use App\Integration;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;

class UserController extends Controller
{


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return View('user.index');
    }
    public function showprofile(){
        $user = Auth::User();       
        if ($user)
        {
        
            return View::make('user.profile' , compact('user'));
            
        }
        else
            echo "no user";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function query(Request $request){

        $name = Input::get('name');
        $network= Input::get('network');
        
        $obj=new Integration();
        $result=$obj->handle_integration($name,$network);
        echo "<pre>"; print_r($result); die();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    
        $user=User::find($id);
        if(!$user) {
            die("No User Found");
        }
        return View('user.edit',compact('user'));
    
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
        $user->password=bcrypt($request['password']);
        $user->phone_no=$request->phone_no;
        $user->website=$request->website;
        $user->save();
        return Redirect()->route('user_profile');

    }
    public function search()
    {
        return View('user.usersearch');
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
