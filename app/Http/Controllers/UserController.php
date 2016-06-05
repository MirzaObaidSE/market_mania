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
use Config;


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

        $current = Auth::User();
        $user = User::find($current->id);
        $allcontact=$user->contact()->count();
        $twitter = $user->contact->where('network', 'twitter')->count();
        $facebook = $user->contact->where('network', 'facebook')->count();
       /* if($facebook==0){
            $facebook="U need Search from Facebook";
            return View('user.index',compact('allcontact','twitter','facebook'));
        }*/
        //echo $twitter;die();
        return View('user.index',compact('allcontact','twitter','facebook'));
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
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       
    public function ShowUser()
    {
        $current = Auth::User();
        $user = User::find($current->id);

        //$contact = new Contact;
        $name = Input::get('name');
        if(!empty($name)){
        $result=$user->contact()->where('name','like','%'.$name.'%')->get();
        return View('user.savedcontact',compact('result'));
        }
        else{
        $result=$user->contact()->get();
        //echo "<pre>"; print_r($result);die();
        return View('user.savedcontact',compact('result'));
        }
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
        $user = Auth::user();
        $name = Input::get('name','');
        $network= Input::get('network','');
        $result = array();
        if(!empty($name) && !empty($network)) {
            $obj=new Integration();
            $result=$obj->handle_integration($name,$network);    
        }

        $selectoption = Config::get('general.'.$user->stripe_plan);
        return View('user.usersearch',compact('result','network','name','selectoption'));
        
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

    public function downloadCsv() {
        // output headers so that the file is downloaded rather than displayed
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=data.csv');
        // create a file pointer connected to the output stream
        $output = fopen('php://output', 'w');
        // output the column headings
        fputcsv($output, array('Network', 'Name', 'Screen Name'));
        $current = Auth::User();
        $user = User::find($current->id);
        $allcontact=$user->contact()->get();
        foreach($allcontact as $key => $value) {
            $row = array(
                'network' => $value['network'],
                'name'  => $value['name'],
                'screen_name'   => $value['screen_name']
            );
            fputcsv($output, $row);
        }
        die;
        
    }
}
