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
            $response = $fb->Get('/search?q=zafar iqbal&type=user&limit=30','EAASN5j34BJMBAKYt6xQJwuooi0MQr6RS9LFOKlhBi2yGVcx9xmiIuF6IZBVMbm2nXKKC0t5Ss4Q4IIaaEHmBaChZBY8r3YUhT1n2fZAjE7cTJe2KxGyEZAnZBzdKH8Rk3ZCoJGcy7CttzySdiNN4WFZCBKuZBJJK4GUfrFe2ZBmZClkwZDZD');           
        } 
        catch(\Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());

        }
         echo '<pre>';print_r($response);die;
         $data = json_decode($response);
          echo '<pre>';print_r($data);die;
        $data = json_decode($response->getBody(), true);

        $max = sizeof($data['data']);
        //echo $max;die();
       echo '<pre>';print_r($data);die;
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
