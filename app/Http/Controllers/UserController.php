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
use App\Contact;
use App\ContactUser;
use Stripe\Stripe;


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
        return View('user.usersearch',compact('result'));
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
        $name = Input::get('name','');
        $network= Input::get('network','');
        $result = array();
        if(!empty($name) && !empty($network)) {
            $obj=new Integration();
            $result=$obj->handle_integration($name,$network);    
        }
        
        return View('user.usersearch',compact('result','network','name'));
        
    }
    public function billing(){
        return View('user.billing');
    }

    public function payment() {
        $user = Auth::User();
        $user->subscription(Input::get('subscription'))->create(Input::get('stripe-token'));
        return Redirect()->route('user_home');
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


    public function addCustomer() {
        try {
            $user = Auth::User(); 
            //check if contact already exist or not
            $contact = Contact::where('network_id',Input::get('network_id'))
                ->where('network',Input::get('network'))
                ->first();
            
            if(empty($contact->id)) {
                $contact = new Contact();
            }
            $contact->network_id = Input::get('network_id');
            $contact->network = Input::get('network');
            $contact->name = Input::get('name');
            $contact->screen_name = Input::get('screen_name');
            $contact->image = Input::get('image');
            $contact->save();

            $contact->user()->attach($user->id);
            echo "success";
        } catch(Exception $e) {
            echo "error";    
        }
        die;
    }
}
