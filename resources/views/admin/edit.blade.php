@extends('layouts.master')
@section('content')



                    <div class="box-body " style="display: block;">
                        <div class="row">
                            <div class="large-8 columns">
                                <div class="row">
                                    <div class="edumix-signup-panel">
                                        <p class="welcome"> Welcome to this awesome app!</p>
                                       
                                      {!! Form::model($users, array('route' => array('update_user', $users->id),'id'=> 'editForm')) !!}
                                            {!! csrf_field() !!}
                                            <div class="row collapse">
                                                <div class="small-5  columns">
                                                    <span class="prefix bg-green">Enter Company Name</span>
                                                </div>
                                                <div class="small-7  columns">
                                                     {!! Form::text('name',null,array()) !!}
                                                </div>
                                            </div>
                                            <div class="row collapse">
                                                <div class="small-5  columns">
                                                    <span class="prefix bg-green">Enter Email</span>
                                                </div>
                                                <div class="small-7  columns">
                                                      {!! Form::text('email',null,array()) !!}
                                                </div>
                                            </div>
                                            <div class="row collapse">
                                                <div class="small-5 columns ">
                                                    <span class="prefix bg-green">Enter Password</span>
                                                </div>
                                                <div class="small-7 columns ">
                                                 {!! Form::password('password',null,array()) !!}
                                                </div>
                                            </div>
                                            <div class="row collapse">
                                                <div class="small-5 columns ">
                                                    <span class="prefix bg-green">Confirm Password</span>
                                                </div>
                                                <div class="small-7 columns ">
                                                     {!! Form::password('password',null,array()) !!}
                                                </div>
                                            </div>
                                            <div class="row collapse">
                                                <div class="small-5  columns">
                                                    <span class="prefix bg-green">Phone No</span>
                                                </div>
                                                <div class="small-7  columns">
                                                       {!! Form::text('phone_no',null,array()) !!}
                                                </div>
                                            </div>
                                             <div class="row collapse">
                                                <div class="small-5  columns">
                                                    <span class="prefix bg-green">Website</span>
                                                </div>
                                                <div class="small-7  columns">
                                                      {!! Form::text('website',null,array()) !!}
                                                </div>
                                            </div>
                                            <div class="row collapse">
                                                
                                            <button class="bg-green small-12  columns" type="submit"><span> Update User </span></button>
                                             
                                            </div>

  
                                        {!!form::close()!!}                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection