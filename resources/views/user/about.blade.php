@extends('layouts.user_master')
@section('content')
				<ul class="breadcrumbs">
                    <li><a href="#"><span class="entypo-about"></span></a>
                    </li>
                    <li>About
                    </li>                   
                </ul>
                <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About Us
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>Market Mania is a Marketing application and it can be used for marketing your product and event about your
                	company by using Facebook and Twitter. Market Mania is available in very cost effect price as compared with others
                	we hope that you will work with to grow Faster</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
            <div class="text-center circular">
                <img class="img-circle img-responsive img-center" src="{{asset('./img/me.jpg')}}" alt="">
                <h3>Mirza Obaid
                    <small>Software Engineer</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            
        </div>

@endsection



