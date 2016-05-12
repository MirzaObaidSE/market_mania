<?php

namespace App;
use Illuminate\Http\Request;
use App\twitter_user ;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use TwitterAPIExchange;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;
use Facebook\FacebookRequest;
use Auth;


class Integration{

	public function handle_integration($name,$network){
		if($network=='twitter'){
			return $this->getTwitterUser($name);
		}
		else
			return $this->getFacebookUser($name);

	}
	//twitter function start
    public function getTwitterUser($name){  

        $settings = array(
            'oauth_access_token' => "1654747094-39QyDkE8pCO4u1g3DOJ6Y9cWTIab1AM5yCaqjI1",
            'oauth_access_token_secret' => "GVFbktmNzIOyjGQi0LpgUv7BR7TPq782YYF5IWalVKAQv",
            'consumer_key' => "NYpbHzhdUUQGERNE1AiOUy1vS",
            'consumer_secret' => "il0grNd5ZxsI7GoaQ10MVvQPyjv7NKLx5cneSj0djcyX1Ci4bG"
            );   
        $url = 'https://api.twitter.com/1.1/users/search.json';
        $getfield = '?q="'.$name.'"';
        $requestMethod = 'GET';
        $result = array();
        $twitter = new TwitterAPIExchange($settings);
        $users =  $twitter->setGetfield($getfield)
                ->buildOauth($url, $requestMethod)
                ->performRequest();
        $users = json_decode($users,true);
        foreach($users as $key=>$value) {
          
            $result[] = array(
                'id' => $value['id'],
                'name' => $value['name'],
                'screen_name'=>$value['screen_name'],
                'location' => $value['location'],
                'image' => $value['profile_image_url'],
                'user_already_added' => $this->isContactAdded('twitter',$value['id'])
                );
        }
        echo '<pre>';print_r($result);die;
                return $result;
    }
    //end twitter function
    //start Facebook 
    Public function getFacebookUser($name){           
    	$fb = app(\SammyK\LaravelFacebookSdk\LaravelFacebookSdk::class);
        try {   
            $response = $fb->Get('/search?q="'.$name.'"&type=user&limit=30','EAASN5j34BJMBAPuAlhOupa4lH53zM5wSlrX94D8icPZAlepmENT4IYO7Ya0pL6ZAm3crXMdWwcRVNyLvAciF9USbe7qFIckZBtmUi51na5Dj3DGwLZByCQkRoCWQQhGXqtRWRF0oH0P5sZBT0vyu9F5CIG0t95xV4FnvWuwhGuwZDZD');           
        } 
        catch(\Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
        }
        $data = json_decode($response->getBody(), true); 
         foreach($data['data'] as $key=>$value) {
          
            $result[] = array(
                'id' => $value['id'],
                'name' => $value['name'],
                );
        }      
       return $result;
    }

    public function isContactAdded($network, $networkId) {
        $user = Auth::User();
    $contactExists=User::join('contact_user','users.id','=','contact_user.user_id')
        ->where('contact_user.contact_id',$networkid)->get();
        if(!empty($contactExists)) {
            return 'yes';
        } else {
            return 'no';
        }
    }

}
?>