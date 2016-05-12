@extends('layouts.user_master')
@section('content')

	
	  {!! Form::open(array('route' => 'search_query')) !!}
		   {!! csrf_field() !!}


	 <h3> Enter data for search </h3>
	  	<div class="row collapse">
            <div class="small-2 columns">
                <span class="prefix bg-red">Enter Name to search</span>
            </div>
            <div class="small-3 small-offset-1 columns">
                 {!! Form::text('name',null,array()) !!}
            </div>
            <div class="small-2 small-offset-1 columns">
            	{!! Form::select('network', [
					   'facebook' => 'Facebook',
					   'twitter' => 'Twitter']
					) !!}
        		</select>
            </div class="small-2 columns">
            <div>

            </div>
        </div>
        <div class="row collapse">
        	<div class=" small-offset-7 columns">
             	<button class="bg-green small-2 radius small columns" type="submit"><span>Search</span></button>
        	</div>
        </div>
	{!!Form::close()!!}
	 
@endsection