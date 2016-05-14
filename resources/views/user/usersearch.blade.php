@extends('layouts.user_master')
@section('content')

	   <Form action="" method="get"> 
	  
		   {!! csrf_field() !!}

   
	 <h3> Enter Name for search </h3>
	  	<div class="row collapse">
            <div class="small-3 columns">
                 {!! Form::text('name',null,array('placeholder'=> 'Find By Name')) !!}
            </div>
            <div class="small-3 small-offset-1 columns">
            	{!! Form::select('network',$selectoption ) !!}
        		</select>
            </div>
            <div class="small-3 small-offset-1 columns">
                <button class="bg-green round small columns" type="submit"><span>Search</span></button>
            </div>
            <div class="small-1 columns">

            </div>
        </div>
  
    {!!Form::close()!!}    
    @if(!empty($result))
        <h3>Search Result for "{{{$name}}}" from "{{{$network}}}"</h3>
         <div class="row">
                
                    <div class="large-12 columns">
                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                  
                                </div>
                                <h3 class="box-title"><i class="icon-menu"></i>
                                    <span>Search Result</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">
                                @foreach($result as $key => $value)
                                    <div class="user-info-wrapper" id="user_{{{$value['id']}}}">
                                        <input type="hidden" class="user_id" value="{{{$value['id']}}}" />
                                        <input type="hidden" class="user_name" value="{{{$value['name']}}}" />
                                        <input type="hidden" class="user_screen_name" value="{{{!empty($value['screen_name']) ? $value['screen_name'] : ''}}}" />
                                        <input type="hidden" class="user_image" value="{{{!empty($value['image']) ? $value['image'] : ''}}}" />
                                        <input type="hidden" class="user_network" value="{{{$network}}}" />
                                        <div class="image">
                                            @if(!empty($value['image']))
                                                <a href="{{{$network === 'twitter' ? 'https://twitter.com/'.$value['screen_name'] : 'https://facebook.com/'.$value['id']}}}" target="_blank">    
                                                    <img src="{{{$value['image']}}}" />
                                                </a>    
                                            @else
                                                <a href="{{{$network === 'twitter' ? 'https://twitter.com/'.$value['screen_name'] : 'https://facebook.com/'.$value['id']}}}" target="_blank">
                                                    <img src="{{asset('img/empty_person.jpg')}}" />
                                                </a>
                                            @endif
                                            
                                        </div>
                                        <div class="name">
                                            <a href="{{{$network === 'twitter' ? 'https://twitter.com/'.$value['screen_name'] : 'https://facebook.com/'.$value['id']}}}" target="_blank">
                                                {{{$value['name']}}}
                                            </a>
                                        </div>
                                        @if($value['user_already_added'] == 'no')
                                            <div class="add-button">
                                                <button class="round" onclick="addContact({{{$value['id']}}});">Add</button>
                                            </div>
                                        @else
                                            <div class="add-button">
                                                <button class="round bg-green">Added</button>
                                            </div>
                                        @endif    
                                        <div class="add-button ajax-loading" style="display:none;">
                                            <img src="{{asset('img/ajax-loader.gif')}}" />
                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- box -->
                    </div>


                </div>   

            @endif 
    
        
        

@endsection
@section('script')
    <script type="text/javascript">
        function addContact (id) {
            $('#user_'+id).find('.ajax-loading').show();
            var network_id = $('#user_'+id).find('.user_id').val();
            var network = $('#user_'+id).find('.user_network').val();
            var name = $('#user_'+id).find('.user_name').val();
            var screen_name = $('#user_'+id).find('.user_screen_name').val();
            var image = $('#user_'+id).find('.user_image').val();
            $.ajax({
                url: "{{{route('add_customer')}}}",
                type: 'post',
                data: {network_id: network_id,network: network, name: name, screen_name: screen_name, image:image},
                success: function(result) {
                    if(result == 'success') {
                        $('#user_'+id).find('.ajax-loading').hide();
                        $('#user_'+id).find('button.round').addClass('bg-green');
                        $('#user_'+id).find('button.round').attr('onclick','');
                        $('#user_'+id).find('button.round').text('Added');
                    }
                }
            });
        }
    </script>

@endsection