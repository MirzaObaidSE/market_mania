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
use DB;


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
        return $result;
    }
    //end twitter function
    //start Facebook 
    Public function getFacebookUser($name){           
    	$fb = app(\SammyK\LaravelFacebookSdk\LaravelFacebookSdk::class);
        try {   
            $response = $fb->Get('/search?q="'.$name.'"&type=user&limit=30','EAASN5j34BJMBAAvZAPLa1TIcVFbsAjqg1fgLJczjRa4hQQnI0g6EevER61J9WerZBHDZCWbfadz2YGnP6fPzjIeCGpypmWchVNj3VqSjz9us1GwJlrFSZBwZAaCpFQKHM68qZBHzIbT6pS7irLZBEcRbM3MZBkBac9krA4tj3dGd3QZDZD');           
        } 
        catch(\Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
        }
        $data = json_decode($response->getBody(), true); 
         foreach($data['data'] as $key=>$value) {
          
            $result[] = array(
                'id' => $value['id'],
                'name' => $value['name'],
                'user_already_added' => $this->isContactAdded('facebook',$value['id'])
                );
        }      
       return $result;
    }

    public function isContactAdded($network, $networkId) {
        $user = Auth::User();
        /*DB::raw('SELECT cu.* from contact_user cu join contacts c on cu.contact_id = c.id where c.network_id = 1654747094 and cu.user_id = 9');*/
        $contactExists = DB::table('contact_user')
            ->join('contacts', 'contact_user.contact_id', '=', 'contacts.id')
            ->where('contacts.network_id',$networkId)
            ->where('contacts.network',$network)
            ->where('contact_user.user_id',$user->id)
            ->first();
        if(!empty($contactExists->id)) {
            return 'yes';
        } else {
            return 'no';
        }
    }

}
?>