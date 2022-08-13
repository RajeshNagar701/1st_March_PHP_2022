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
                     <h2><strong class="yellow">Login us</strong><br>Login</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
			   @if(session()->has('fail'))
				<div class="alert alert-danger">
					{{session('fail')}}
				</div>	
			   @endif	
                  <form method="post" action="{{url('/loginuser')}}" enctype="multipart/form-data" id="post_form" class="contact_form">
                     @csrf
					 <div class="row">
                        
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
                           <button type="submit" class="send_btn">Login</button>
						   <a href="{{url('/signup')}}">For Register click here</a>
                        </div>
                  </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact  section -->
     @endsection