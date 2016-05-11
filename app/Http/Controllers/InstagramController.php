<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Vinkla\Instagram\Facades\Instagram;
use Larabros\Elogram\Client;
use Illuminate\Support\Facades\Input;
class InstagramController extends Controller
{
   public function getInstagram()   {
        //$var=https://api.instagram.com/v1/users/search?q=mirza&count=20&access_token=3218426889.1677ed0.8585337f6f2c40a1a636fddcfb381b6f ;
    //$var=Instagram::users()->get(30);
    //var_dump($var);
        //
        /*$client=new client;
        $client='9a3247a758864f99a58da4b9d7519d42';
        $access_token='3218426889.1677ed0.8585337f6f2c40a1a636fddcfb381b6f';
    

    $query = 'Ash Ketchum';
    $response = $client->get("https://api.instagram.com/v1/users/search?q={$query}&access_token={$access_token}");
    $results = $response->json();*/
    $clientId = '9a3247a758864f99a58da4b9d7519d42';
    $clientSecret = 'dabdc921ab254bb8af6b0bfce240cf40';
    $accessToken = '3218426889.1677ed0.8585337f6f2c40a1a636fddcfb381b6f';
    $redirectUrl = 'http://localhost:8000/auth/instagram/callback';
    $client = new Client($clientId, $clientSecret, null, $redirectUrl);

    header('Location: ' . $client->getLoginUrl());
    die;
}

    public function instagramCallback() {
        $clientId = '9a3247a758864f99a58da4b9d7519d42';
        $clientSecret = 'dabdc921ab254bb8af6b0bfce240cf40';
        $accessToken = '3218426889.1677ed0.8585337f6f2c40a1a636fddcfb381b6f';
        $redirectUrl = 'http://localhost:8000/auth/instagram/callback';
        $client = new Client($clientId, $clientSecret, null, $redirectUrl); 
        $token = $client->getAccessToken(Input::get('code'));
        print_r($token);die;
        $token = json_decode($token,true);
        echo '<pre>';print_r($token);die;
        $accessToken = $token->access_token;
        //$users = $client->users()->search('skrawg');
        $client = new Client($clientId, $clientSecret, $accessToken, $redirectUrl); 
        $users = $client->users()->search('skrawg');
        var_dump($users);
        die;
        //var_dump(Input::all());
        die;
    }

    public function instagramUsers(){
        $clientId = '9a3247a758864f99a58da4b9d7519d42';
        $clientSecret = 'dabdc921ab254bb8af6b0bfce240cf40';
        $accessToken = '3218426889.9a3247a.bff64779b69945959f46f6c5db695ec9';
        $redirectUrl = 'http://localhost:8000/auth/instagram/callback';
        $client = new Client($clientId, $clientSecret, null, $redirectUrl); 
        $users = $client->users()->search('skrawg');
        var_dump($users);
        die;
    }
    
}
    