@extends('layouts.user_master')
@section('content')
	<div class="row">

                    <div class="large-12 columns">
                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span align="right"> <a href="{{route('edit_by_user', ['id' => $user->id])}}" class="button success tiny round">Edit </a>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="icon-menu"></i>
                                    <span>User Basic Info</span>

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
						              							        
                                    </tbody>
                                </table>
                            </div>
                            <!-- end .timeline -->
                        </div>
                        <!-- box -->
                    </div>
                </div>   
 @endsection