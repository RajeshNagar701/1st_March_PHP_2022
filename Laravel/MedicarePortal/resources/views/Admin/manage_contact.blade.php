@extends('Admin.Layout.main_layout')		
@section('main_container')

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Contact</h2>
            <!--// main-heading -->

            <!-- Tables content -->
            <section class="tables-section">
                <!-- table1 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Manage Contact</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
								<th scope="col">Message</th>
								<th scope="col">Delete</th>
								<th scope="col">Repply</th>
                            </tr>
                        </thead>
                        <tbody>
						
						@foreach($data_arr as  $d)
                            <tr>
                                <th scope="row">{{$d->id}}</th>
                                <td>{{$d->name}}</td>
                                <td>{{$d->email}}</td>
                                <td>{{$d->mobile}}</td>
								<td>{{$d->message}}</td>
								<td><a href="{{url('manage_contact/'.$d->id)}}" class="btn btn-danger">Delete</a></td>
								<td><a href="" class="btn btn-primary">Reply</a></td>
                            </tr>
                       @endforeach    
                        </tbody>
                    </table>
                </div>
              
               

            </section>

 @endsection	