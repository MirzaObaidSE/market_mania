@extends('layouts.user_master')
@section('content')
                <div>
 					<div class="large-12 columns">
                        <hr>
                        <br>
                        <div class="row">
                            <div class="medium-6 columns">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-header no-pad bg-transparent">                                
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="fontello-chart-bar-outline"></i>
                                    <span>STATS</span>
                                </h3>
                                </div>
                            <div style="margin:15px 0 0" class="box-body" style="display: block;">

                                <div class="stats-wrap">
                                <ul  style="list-style:none;">
                                    
                                    <li>
                                        <h2><b class="counter-up" style="color:#888;">{{ $allcontact }}</b> </h2>
                                        <p>Total Contact Searched 
                                        </p>
                                    </li>
                                    <li>
                                        @if($twitter==0)
                                        <h2><b class="" style="color:#888;"></b></h2><h5> Nothing from Twitter </h5>
                                        @else
                                        <h2><b class="counter-up" style="color:#888;">{{ $twitter }}</b> </h2>
                                        @endif
                                        <p>Contact Searched from Twitter 
                                        </p>
                                    </li>
                                    <li>
                                        @if($facebook==0)
                                        <h2><b class="" style="color:#888;"></b></h2><h5> Nothing from Facebook </h5>
                                        @else
                                        <h2><b class="counter-up" style="color:#888;">{{ $facebook }}</b> </h2>
                                        @endif
                                        <p>Contact Searched from Facebook 
                                        </p>
                                    </li>
                                    
                                </ul>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                            <div class="medium-6 columns">

                                <ul class="pricing-table">

                                    <li class="title" style="background:#92CD18">
                                        <h6 class="text-white">Facebook</h6>
                                    </li>
                                    <li class="price">
                                        <h2>$10</h2>
                                    </li>
                                    <li class="description">Per month</li>
                                    <li class="bullet-item">Search User By Name</li>
                                    <li class="bullet-item">Save in Database</li>
                                    <li class="bullet-item">Contact User</li>
                                    </li>
                                </ul>


                            </div>
                        </div>
                        <div class="row">   
                            <div class="medium-6 columns">
                                <ul class="pricing-table">
                                    <li class="title" style="background:#77AD03">
                                        <h6 class="text-white">Twitter</h6>
                                    </li>
                                    <li class="price">
                                        <h2>$8.00</h2>
                                    </li>
                                   	<li class="description">Per month</li>
                                    <li class="bullet-item">Search User By Name</li>
                                    <li class="bullet-item">Save with Profile image</li>
                                    <li class="bullet-item">Contact User</li>
                                    </li>
                                </ul>


                            </div>




                            <div class="medium-6 columns">
                                <ul class="pricing-table">
                                    <li class="title" style="background:#577f02">
                                        <h6 class="text-white">Platinum</h6>
                                    </li>
                                    <li class="price">
                                        <h2>$20.00</h2>
                                    </li>
                                    <li class="description">Per month</li>
                                    <li class="bullet-item">Search User From</li>
                                    <li class="bullet-item"><b>Facebook & Twitter</b></li>
                                    <li class="bullet-item">Save As Required </li>
                                   </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="large-12 columns">
                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                    <!---->
                                </div>
                                <h3 class="box-title"><i class="icon-menu"></i>
                                    <span>Company Info</span>

                                </h3>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">
                                <table style="width:100%;">

                                    <tbody>
                                        <tr>
                                            <th> Company Name </th>  <td> {{{ $user->name }}} </td>
                                        </tr>
                                        <tr>
                                            <th> Email </th> <td> {{{ $user->email }}} </td>
                                        </tr>
                                        <tr>
                                            <th> Phone Number </th> <td> {{{ $user->email }}} </td>
                                        </tr>
                                        <tr>
                                            <th> Website </th> <td> {{{ $user->website }}} </td>
                                           
                                        </tr>
                                        <tr>
                                            <th> Plan Selected </th> <td> {{{ $user->stripe_plan }}} </td>
                                           
                                        </tr>                                                                                
                                                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- end .timeline -->
                        </div>
                        <!-- box -->

                       
                    </div>
                </div>   
                    
                           
 @endsection