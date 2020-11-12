@extends('layouts.master')
@section('content')

   <div class="page-wrapper">
       
       <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                               <!--  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li> -->
                            </ol>

                            @canany(['isUser'])
                            <a href="{{route('demo')}}" type="button" class="btn btn-success d-none d-lg-block m-l-15"> Request A Demo</a>
                            @endcan
                            
                        </div>
                    </div>
                </div>

                 @canany(['isUser'])
                 <div class="row">
                    <!-- column -->
                     <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">User Dashboard</h5>
                                        <h6 class="card-subtitle">User Dashboard</h6>
                                    </div>
                                       <div class="ml-auto">
                                        <!-- <a class="btn btn-success" href="{{route('demo.list')}}">View All</a> -->
                                    </div>
                                  
                                </div>
                            </div>
                           <!-- something here -->
                        </div>
                    </div>




                           <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Users Dashboard</h5>
                                        <h6 class="card-subtitle">User Dashboard </h6>
                                    </div>
                                       <div class="ml-auto">
                                        <!-- <a class="btn btn-success" href="{{route('letters')}}">View All</a> -->
                                    </div>
                                  
                                </div>
                            </div>
                            <!-- something here -->
                        </div>
                    </div>

                    
                </div>
                @endcan

           @canany(['isSuperAdmin','isAdmin'])
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div class="card flex" data-sr-id="10" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-hover-success">
                                        <div class="avatar w-56 m-2 no-shadow gd-success"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> </div>
                                        <div class="px-4 flex">
                                            <div>Registered Users</div>
                                            <div class="text-success mt-2">{{$users->count()}}</div>
                                        </div> <!-- <a href="#" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg> </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card flex" data-sr-id="10" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-hover-success">
                                        <div class="px-4 flex">
                                            <div>Demo Requests</div>
                                            <div class="text-success mt-2">{{$demos->count()}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card flex" data-sr-id="10" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-hover-success">
                                        <div class="avatar w-56 m-2 no-shadow gd-success"> 
                                        </div>
                                        <div class="px-4 flex">
                                            <div>Email Sign-Up</div>
                                            <div class="text-success mt-2">{{$letters->count()}}</div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                <!--================================================================-->
                <!--Main Metric-->
                <!--================================================================-->
               
                <!-- ============================================================== -->
                <!-- News -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                     <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Top Five Demo Request</h5>
                                        <h6 class="card-subtitle">Demo App Request</h6>
                                    </div>
                                       <div class="ml-auto">
                                        <a class="btn btn-success" href="{{route('demo.list')}}">View All</a>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                           
                                            <th>COMPANY NAME</th>
                                            <th>Email</th>
                                            <th>DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($demos as $demo)
                                        <tr>
                                           
                                         
                                            <td class="txt-oflo">{{$demo->company_name}}</td>
                                            <td class="txt-oflo">{{$demo->email}}</td>
                                            <td><span class="text-success">{{$demo->created_at->diffForHumans()}}</span></td>
                                        </tr>
                                            @endforeach
                                      
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>




                           <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Top Five Signups</h5>
                                        <h6 class="card-subtitle">Newsletters </h6>
                                    </div>
                                       <div class="ml-auto">
                                        <a class="btn btn-success" href="{{route('letters')}}">View All</a>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                           
                                            <th>Email</th>
                                            <th>DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($letters as $letter)
                                        <tr>
                                           
                                           
                                            <td class="txt-oflo">{{$letter->email}}</td>
                                            <td><span class="text-success">{{$letter->created_at->diffForHumans()}}</span></td>
                                        </tr>
                                            @endforeach
                                      
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- ============================================================== -->
                <!-- To do chat and message -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Send Message to User Dashboard</h4>
                                <br>

                                 <form action="{{route('user.message')}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Message Title</label> 
                                            <div class="col-12">
                                              <input id="text" name="title" placeholder="Enter Title here" class="form-control here" required type="text">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Select User</label> 
                                            <div class="col-12">
                                             <select class="form-control" name="user_id" required>
                                                <option value="">Select User</option>
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}} &nbsp;-&nbsp;{{$user->email}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="textarea" class="col-12 col-form-label">Message</label> 
                                            <div class="col-12">
                                              <textarea id="textarea" name="message" cols="40" rows="5" class="form-control" required></textarea>
                                            </div>
                                          </div> 
                                         <div class="form-group row">
                                            
                                            <div class="col-12">
                                              <button type="submit" class="btn btn-sm btn-primary">Send Message</button>
                                            </div>
                                          </div>


                                        </form>

                                        <br>
                            </div>
                           
                        </div>
                    </div>
                      <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Top Five Users</h5>
                                        <h6 class="card-subtitle">Newly Registered Users</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <a class="btn btn-success" href="{{route('users')}}">View All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>NAME</th>
                                            <th>Email</th>
                                            <th>DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($users as $user)
                                        <tr>
                                            <td class="txt-oflo">{{$user->name}}</td>
                                            <td class="txt-oflo">{{$user->email}}</td>
                                            <td><span class="text-success">{{$user->created_at->diffForHumans()}}</span></td>
                                        </tr>
                                            @endforeach
                                      
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                @endcan
            </div>


   </div>

@endsection