@extends('Website.Layout.main')

@push('title')
Contact
@endpush



@section('main_container')

 
      <!-- contact  section -->	
      <div id="contact" class="contact ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><strong class="yellow">Edit</strong><br>Us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
			  
                  <form method="post" action="{{url('/profile/'.$data->id)}}" enctype="multipart/form-data" id="post_form" class="contact_form">
                     @csrf
					 <div class="row">
                        <div class="col-md-12 ">
                           <input class="contact_control" placeholder=" Name" type="type" name="name" value="{{$data->name}}">
							@error('name')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
	
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control" placeholder="Email" type="type" name="username" value="{{ $data->username}}">
							@error('username')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
                        </div>
                       
						<div class="col-md-12">
                           Gender <br>
						   <?php
						   $gen=$data->gen;
						   if($gen=="Male")
						   {
						   ?>
						   <input type="radio" name="gen" value="Male" checked>: Male <br>  
						   <input type="radio" name="gen" value="Female">: Female <br>		
                        <?php
						   }
						   else
						   {
						  ?>
						  <input type="radio" name="gen" value="Male" >: Male <br>  
						   <input type="radio" name="gen" value="Female" checked>: Female <br>		
						<?php	
						   }
						?>
						</div>
						<div class="col-md-12">
                           Laungguges <br>
						   
						   <input type="checkbox" name="lag[]" value="Hindi" <?php
							$lag=$data->lag;
						    $lag_arr=explode(",",$lag);
							if(in_array("Hindi",$lag_arr))
							{
								echo "checked";
							}
						   ?>>: Hindi <br>  
						   <input type="checkbox" name="lag[]" value="English" <?php
							$lag=$data->lag;
						    $lag_arr=explode(",",$lag);
							if(in_array("English",$lag_arr))
							{
								echo "checked";
							}
						   ?>>: English <br>  		
						   <input type="checkbox" name="lag[]" value="Gujarati" <?php
							$lag=$data->lag;
						    $lag_arr=explode(",",$lag);
							if(in_array("Gujarati",$lag_arr))
							{
								echo "checked";
							}
						   ?>>: Gujarati <br> 
						</div>
						<div class="col-md-12" >
                           <select class="contact_control" name="cid">
								<option value="">----- Select Country ------</option>
								@foreach($country as $c)
								
									@if($c->id == $data->cid)
									<option value="{{$c->id}}" selected>
									{{$c->cnm}}
									</option>
									@else
									<option value="{{$c->id}}">
									{{$c->cnm}}
									</option>
									@endif		
								@endforeach
						   </select>
						   @error('cid')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control"  type="file" name="img" value="{{ $data->img}}">
							<img src="{{asset('upload/customer/' . $data->img)}}" width="100px" height="100px"/>
							@error('img')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
                        </div>
                        <div class="col-md-12">
                           <button type="submit" class="send_btn">Save</button>
                        </div>
                  </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact  section -->
     @endsection