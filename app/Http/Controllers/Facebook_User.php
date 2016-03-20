<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Facebook_User;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;
class Facebook_User extends Controller
{
   
    
      Public function getFacebook(\SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb){
            
        try {
            
              
            $response = $fb->Get('/search?q=Obiad&type=user&formate=json','CAASN5j34BJMBAHqj6ZBoSM3QPhTWQ287pHE0s0UEe7pXcZCBdhIGTrQmL07jZAYSO8SzsQl7p3mZAmZAAhB7efWFYkWTpflGwAgrq1Pnani20ne15vGYoTVZA8C2HTKrRQ1GL5HrUDvl3YwK1fD8a8wt6aZCq16BTo28N2yR2pYdGmoJXI2AbKYbOhq1ZCX695S5OWIdIgJvqQZDZD');
            
        } 
        catch(\Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
        }
          $data = json_decode($response->getBody(), true);
        echo '<pre>';print_r($data);die;
       // var_dump($response);die();
        //$graphObject = $request->getGraphObject();
        //var_dump($graphObject);die();
        //var_dump($response);die();
        //$userNode = $response->getGraphUser();
        //var_dump($userNode);die();
        //printf('Hello, %s!', $userNode->getEmail());

        


    }

   
}
