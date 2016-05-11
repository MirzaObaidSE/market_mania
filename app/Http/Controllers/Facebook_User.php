<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;
use Facebook\FacebookRequest;
class Facebook_User extends Controller
{
      Public function getFacebook(\SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb){           
        try {   
            $response = $fb->Get('/search?q=zafar iqbal&type=user&limit=30','CAASN5j34BJMBAAvzwDonBKpGWry3REHOJE2GHYGLEB1Giz5RfuZAiHLyS9VoCW69GmC0NbNdPasEpGdI6S5aloBeZAvMOcT8P9lE80xW3f5yH6RYj66OZBFmxZBbXO4axB4t9ZAjBqA6tjRpzCabOiWV4VOIndaBR6Rsii03T3HEf39ObaTGQCEpnotB0cTnwZBUqRtXuZAT6HUZBguDQbJ4');           
        } 
        catch(\Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
        }
        $data = json_decode($response->getBody(), true);
        $max = sizeof($data['data']);
        //echo $max;die();
       //echo '<pre>';print_r($data);die;
        //echo $data['data'][0]['id'];die();
       
        for($i=0;$i<=$max-1;$i++){
            $facebook=new facebook_user();
            $facebook->name=$data['data'][$i]['name'];
            $facebook->user_id=$data['data'][$i]['id'];   
            $facebook->save();
        }
        echo 'data saved';
        // print_r($data['data'][0]['id']);die();
    }
}
