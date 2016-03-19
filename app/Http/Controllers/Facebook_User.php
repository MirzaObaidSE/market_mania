<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Facebook_User;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;
class Facebook_User extends Controller
{
   
    
      Public function getFacebook(\SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb){
            
        try {
            
              
            $response = $fb->Get('https://graph.facebook.com/v2.5/search?q=john&type=user&formate=json','CAASN5j34BJMBAOPaT9Od5KBmyX2sYaJ6hvgRRtrrkb6ZAmJvjvdUlTgG6abSNzYm8vLlgIpWNj6ftg2M0bzu9hFYVD5HAUM1zZAa5QeBZBwbsfVewaESS7k7tkHEAZB7AmcM5s5je3Lea7GNHug3mbSQZAkVAHVg1QgN76PMZALTnZBihj8ZBxC3vxmMze0s23tOnclnCwsYBg9Y236qMKLU');
            
        } 
        catch(\Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
        }
        echo '<pre>';print_r($response);die;
       // var_dump($response);die();
        //$graphObject = $request->getGraphObject();
        //var_dump($graphObject);die();
        //var_dump($response);die();
        //$userNode = $response->getGraphUser();
        //var_dump($userNode);die();
        //printf('Hello, %s!', $userNode->getEmail());

        


    }

   
}
