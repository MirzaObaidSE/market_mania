@extends('layouts.user_master')
@section('content')
		<Form action="" method="get"> 
	    	{!! csrf_field() !!}
			<h3> Enter Name for search </h3>
	  		<div class="row collapse">
            	<div class="small-3 columns">
                 	{!! Form::text('name',null,array('placeholder'=> 'Find By Name')) !!}
            	</div>
            	
            	<div class="small-3 small-offset-5 columns">
                	<button class="bg-green round small columns" type="submit"><span>Search</span></button>
            	</div>
            	<div class="small-1 columns">

            	</div>
        	</div>
				<div class="row">
					<div class="large-12 columns">
                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                  
                                </div>
                                <h3 class="box-title"><i class="icon-menu"></i>
                                    <span>Saved Contect</span>
                                </h3>
                            </div>
                            
                            <div class="box-body " style="display: block;">
                            	@foreach($result as $key => $value)
                            		<div class="user-info-wrapper">
                            			<div class="image"> 
                            			 	@if(!empty($value['image']))
                            			 		<a href="{{{$value['network'] === 'twitter' ? 'https://twitter.com/'.$value['screen_name'] : 'https://facebook.com/'.$value['network_id']}}}" target="_blank">    
                            					<img src= "{{{$value['image']}}}" />
                            					</a>
                            				 @else
                                                <a href="{{{$value['network'] === 'twitter' ? 'https://twitter.com/'.$value['screen_name'] : 'https://facebook.com/'.$value['network_id']}}}" target="_blank">
                                                    <img src="{{asset('img/empty_person.jpg')}}" />
                                                </a>
                                            @endif
                            					
                                        </div>
                                        <div class="name">
                                            <a href="{{{$value['network'] === 'twitter' ? 'https://twitter.com/'.$value['screen_name'] : 'https://facebook.com/'.$value['network_id']}}}" target="_blank">
                                                {{{$value['name']}}}
                                            </a>
                                        </div>
                                        	<div class="clr"></div>
                            		</div>
                            		
                            	@endforeach
                            </div> 	
                        </div>
                    </div>
                </div>
@endsection
