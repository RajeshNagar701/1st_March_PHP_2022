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
                     <h2><strong class="yellow">Contact us</strong><br>Request a call back</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <form method="post" action="{{url('/contact')}}" id="post_form" class="contact_form">
                     @csrf
					 <div class="row">
                        <div class="col-md-12 ">
                           <input class="contact_control" placeholder=" Name" type="type" name="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control" placeholder="Email" type="type" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control" placeholder="Phone Number " type="type" name="mobile">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" name="message" placeholder="Message" type="type" Message="Name">Message </textarea>
                        </div>
                        <div class="col-md-12">
                           <button type="submit" class="send_btn">Send</button>
                        </div>
                  </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact  section -->
     @endsection