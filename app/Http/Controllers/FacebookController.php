<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function facebook()
    {
        return Socialite::driver('facebook')->fields([
            'first_name', 'last_name', 'email', 'gender', 'birthday'
        ])->scopes([
        'email', 'user_birthday'
    ])->redirect();
    }
    public function callback()
    {


        $facebook_user = Socialite::driver('facebook')->fields([
            'first_name', 'last_name', 'email', 'gender', 'birthday'
        ])->user();

        var_dump($facebook_user);

        // $user->token;
    }
    public function index()
    {
        //
    }

    
}
