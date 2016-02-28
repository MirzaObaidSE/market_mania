<?php
/**
 * @file SocialController.php file to handle social third party apps related operations
 * @package: Controllers
 * @author: Awais Qarni
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use TwitterAPIExchange;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTwitter() {
        $settings = array(
            'oauth_access_token' => "1654747094-39QyDkE8pCO4u1g3DOJ6Y9cWTIab1AM5yCaqjI1",
            'oauth_access_token_secret' => "GVFbktmNzIOyjGQi0LpgUv7BR7TPq782YYF5IWalVKAQv",
            'consumer_key' => "NYpbHzhdUUQGERNE1AiOUy1vS",
            'consumer_secret' => "il0grNd5ZxsI7GoaQ10MVvQPyjv7NKLx5cneSj0djcyX1Ci4bG"
        );

        $url = 'https://api.twitter.com/1.1/users/search.json';
        $getfield = '?q=Awais';
        $requestMethod = 'GET';

        $twitter = new TwitterAPIExchange($settings);
        $users =  $twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();
        $users = json_decode($users);
        echo '<pre>';print_r($users);die;
    }



}
