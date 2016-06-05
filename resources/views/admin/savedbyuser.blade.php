@extends('layouts.master')
@section('content')
	<h3> Saved Contacts By Users </h3>
		<div>
            <Form action="" method="get" id="savedbyuser"> 
                <div class="large-3 columns">
                    {!! Form::text('search',null,array('placeholder'=> 'Find By Name,network')) !!} 
                </div>   
                 <button class="bg-green small-2 radius right columns" type="submit"><span> Search </span></button>
                {!!Form::close()!!}
       	</div>
 		<div class="row">
            <div class="large-12 medium-6 small-6 columns">
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
                            <span>Contact Searched By Users</span>
                        </h3>
                            <div class="down bg-green large-2 large-offset-9 columns" >
                            <a href="{!! route('downloadcsv') !!}">Download in CSV</a>
                            </div>
                        
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
                                @foreach($allcontact as $contact)       
						        <tr class="text-right">

														
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
@section('script')
<script type="text/javascript">
$('#savedbyuser').validate({
       
        rules: {
                search:{
                    required:true
                },
            },
        });
</script>
@endsection