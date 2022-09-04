@extends('Website.Layout.main')
@push('title')
Client
@endpush


@section('main_container')

      <!-- banner -->
     
      <!-- testimonial -->
      <div id="client"  class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><strong class="yellow">My</strong><br>Profile</h2>
                  </div>
               </div>
            </div>
         </div>
            
            
                        <div class="row">
                           <div class="col-md-6 offset-md-3">
                              <div class="test_box">
                                 <table class="table"  style="color:black">
								
									<tr>
										<td >
											<img src="{{asset('upload/customer/' . $data->img)}}" width="100px" height="100px"/>
										</td>
										<td >
											<a href="{{url('/profile/'. $data->id)}}" class="btn btn-primary">Edit</a>
										</td>
									</tr>
									<tr>
										<td>Name</td>
										<td>{{$data->name}}</td>
									</tr>
									<tr>
										<td>Username</td>
										<td>{{$data->username}}</td>
									</tr>
									<tr>
										<td>Gender</td>
										<td>{{$data->gen}}</td>
									</tr>
									<tr>
										<td>Lag</td>
										<td>{{$data->lag}}</td>
									</tr>
									<tr>
										<td>Countrty</td>
										<td>{{$data->cnm}}</td>
									</tr>
								
								 </table>
                                 
                              </div>
                           </div>
                        </div>
                    
               
            
           
         </div>
      </div>
      <!-- end testimonial -->
    
      @endsection