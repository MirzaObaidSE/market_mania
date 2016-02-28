<?php

namespace App\Http\Controllers;

use Socialite;
use Auth;
use Illuminate\Routing\Controller;



class AuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
        {
           return Socialite::driver('twitter')->redirect();
        }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
        {
            $user = Socialite::driver('twitter')->user();
            
            var_dump($user);

        // $user->token;
        }
    public function logout()
        {
            Auth::logout();
            return redirect('/');
        }
}