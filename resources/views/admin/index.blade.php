
@extends('layouts.master')
@section('content')

                <!-- Container Begin -->
                <div class="row" style="margin-top:-20px">                    
                    <div class="large-6 columns">
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
                                        <h2><b class="counter-up" style="color:#666;">{{ $total }}</b> </h2>
                                        <p class="text-grey">Total Users
                                        </p>
                                    </li>
                                    <li>
                                        <h2><b class="counter-up" style="color:#888;">{{ $contact }}</b> </h2>
                                        <p>Total Contact Searched 
                                        </p>
                                    </li>
                                    <li>
                                        <h2 style="color:#333;"><b class="counter-up">{{ $platinum }}</b></h2>
                                        <p>Total Platinum User<small>This Month</small>
                                        </p>
                                    </li>
                                    <li>
                                        <h2 style="color:#333;"><b class="counter-up">{{ $facebook }}</b></h2>
                                        <p>Total Facebook User<small>This Month</small>
                                        </p>
                                    </li>
                                    <li>
                                        <h2 style="color:#333;"><b class="counter-up">{{ $twitter }}</b></h2>
                                        <p>Total Twitter User<small>This Month</small>
                                        </p>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- start second-->
                    <div class="large-6 large-offset-0 columns">
                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="icon-graph-pie"></i>
                                    <span>SUMMARY</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">
                                <div style="margin:0" class="row summary-border-top">
                                    <div class="large-6 columns">
                                        <div class="summary-nest">
                                            <h2 class="text-black"><span class="counter-up">{{ $fincome }}</span><small>$</small></h2>
                                            <p>Facebook Revenue</p>
                                        </div>

                                    </div>
                                    <div class="large-6 columns summary-border-left">
                                        <div class="summary-nest">
                                            <h2 class="text-black"><span class="counter-up">{{ $tincome }}</span><small>$</small></h2>
                                            <p>Twitter Revenue</p>
                                        </div>
                                    </div>
                                </div>

                                <div style="" class="row">
                                    <div class="large-12 columns">
                                        <div class="summary-nest summary-pad-nest">
                                            <h2 class="text-black"><span class="counter-up">{{ $pincome }}</span></span><small>$</small></h2>
                                            <p class="text-center">Platinum Revenue</p>
                                        </div>

                                    </div>
                                </div>
                                 <div style="margin:0" class="row">
                                    <div class="large-6 columns">
                                        <div class="summary-nest summary-pad-nest">
                                            <span class="text-center"><img src= "{{asset('img/dollar.jpg')}}" /></span>
                                        </div>
                                    </div>
                                    <div class="large-6 columns">
                                        <div class="summary-nest summary-pad-nest">
                                            <h2 class="text-left"><span class="counter-up">{{ $total_r }}</span></span><small>$</small></h2>
                                            <p class="text-left">Total Revenue of Month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end .timeline -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

@endsection