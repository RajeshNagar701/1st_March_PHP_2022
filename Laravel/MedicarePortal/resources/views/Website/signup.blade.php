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
                     <h2><strong class="yellow">Contact us</strong><br>Signup</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
			   @if(session()->has('success'))
				<div class="alert alert-success">
					{{session('success')}}
				</div>	
			   @endif	
                  <form method="post" action="{{url('/signup')}}" enctype="multipart/form-data" id="post_form" class="contact_form">
                     @csrf
					 <div class="row">
                        <div class="col-md-12 ">
                           <input class="contact_control" placeholder=" Name" type="type" name="name" value="{{ old('name')}}">
							@error('name')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
	
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control" placeholder="Email" type="type" name="username" value="{{ old('username')}}">
							@error('username')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control" placeholder="Password " type="password" name="password" value="{{ old('password')}}">
							@error('password')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror	
                        </div>
						<div class="col-md-12">
                           Gender <br>
						   <input type="radio" name="gen" value="Male">: Male <br>  
						   <input type="radio" name="gen" value="Female">: Female <br>		
                        
						</div>
						<div class="col-md-12">
                           Laungguges <br>
						   <input type="checkbox" name="lag[]" value="Hindi">: Hindi <br>  
						   <input type="checkbox" name="lag[]" value="English">: English <br>  		
						   <input type="checkbox" name="lag[]" value="Gujarati">: Gujarati <br> 
						</div>
						<div class="col-md-12" >
                           <select class="contact_control" name="cid">
								<option value="">----- Select Country ------</option>
								@foreach($country as $c)
								<option value="{{$c->id}}" value="{{ old('cid')}}">
									{{$c->cnm}}
								</option>
								@endforeach
						   </select>
						   @error('cid')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control"  type="file" name="img[]" multiple/>
							@error('img')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
                        </div>
                        <div class="col-md-12">
                           <button type="submit" class="send_btn">Send</button>
						   <a href="{{url('/login')}}">Already Register then click here for Login</a>
                        </div>
                  </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact  section -->
     @endsection