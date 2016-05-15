@extends('layouts.master')
@section('content')
     
        <div>
            <Form action="" method="get" id="alluserForm"> 
                <div class="large-3 columns">
                    {!! Form::text('search',null,array('placeholder'=> 'Find By Name,email,Phone No')) !!} 
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
                                            <th> ID </td>
										    <th> Company Name </th>
										    <th> Email </th>
										    <th> Phone Number </th>
										    <th> Website </th>
                                            <th> Actions </th>
                                        </tr>

                                       
                                        
						                <tr class="text-right">
									         @foreach($alluser as $user)
									
									           <td> {{{ $user->id }}} </td>
									           <td> {{{ $user->name  }}} </td>
									           <td> {{{ $user->email }}} </td>
									           <td> {{{ $user->phone_no }}} </td>
									           <td> {{{ $user->website }}} </td>
                                               <td> <a href="{{route('edit_user', ['id' => $user->id])}}" class="button success tiny round">Edit </a>|<a href="{{route('delete_user', ['id' => $user->id])}}"class="button alert tiny round" >  Delete </a> </td>
								                    
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
$('#alluserForm').validate({
       
        rules: {
                search:{
                    required:true
                },
            },
        });
</script>
@endsection