@extends('layouts.master')
@section('content')
	<h3> Saved Contacts By Users </h3>
		<div>
            <Form action="" method="get"> 
                <div class="large-3 columns">
                    {!! Form::text('search',null,array('placeholder'=> 'Find By Name,network')) !!} 
                </div>   
                 <button class="bg-green small-2 radius right columns" type="submit"><span> Search </span></button>
                {!!Form::close()!!}
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
                        </div>
                        <h3 class="box-title"><i class="icon-menu"></i>
                            <span>BASIC</span>
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body " style="display: block;">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <th> Network ID </td>
						       	    <th> Network </th>
									<th> Name </th>
								    <th> Screen Name </th>
								    <th> image </th>
                                    
                                </tr>        
						        <tr class="text-right">

									@foreach($allcontact as $contact)					
									  	<td> {{{ $contact->network_id }}} </td>
									 	<td> {{{ $contact->network  }}} </td>
									 	<td> {{{ $contact->name  }}} </td>
									    <td> {{{ $contact->screen_name }}} </td>
									    <td>
									    	@if(!empty($contact['image']))
									    		<img src= "{{{$contact['image']}}}" /> 
                                        	@else
                                        		<img src="{{asset('img/empty_person.jpg')}}" /> 
                                        	@endif
                                        </td>  
                                    </tr>
									@endforeach
                            </tbody>
                        </table>



                    </div>
                    <!-- end .timeline -->
                </div>
                <!-- box -->
            </div>
        </div>   
@endsection