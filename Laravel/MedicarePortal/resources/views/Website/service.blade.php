@extends('Website.Layout.main')

@push('title')
Services
@endpush



@section('main_container')

 
      <!-- service section -->
      <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2><strong class="yellow">service</strong><br> WE CAN HELP YOUR business GROW</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="{{url('Frontend/images/service_icon1.png')}}" alt="#"/>
                     <h3>DIGITAL marketing</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="{{url('Frontend/images/service_icon2.png')}}" alt="#"/>
                     <h3>FINANCIAL PLANING</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="{{url('Frontend/images/service_icon3.png')}}" alt="#"/>
                     <h3>DIGITAL marketing</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="{{url('Frontend/images/service_icon4.png')}}" alt="#"/>
                     <h3>BUSINESS CONSULTING</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="{{url('Frontend/images/service_icon5.png')}}" alt="#"/>
                     <h3>MARKETING RESEARCH</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="ho_color" class="service_box">
                     <img src="{{url('Frontend/images/service_icon6.png')}}" alt="#"/>
                     <h3>UX RESEARCH</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- service section -->

     @endsection