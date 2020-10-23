@extends('layouts.master')
@section('content')

<div class="page-wrapper">
       <div class="container-fluid">

    <div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Demo Request</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
               
            </ol>
           <!--  <button type="button" class="btn btn-success d-none d-lg-block m-l-15"> Request A Demo</button> -->
        </div>
    </div>
</div>



 <div class="row">
                    <!-- column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Demo Requests</h4>
                                
                            </div>
                            <div class="card-body">
                                
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Company Name</th>
                                        <th>Contact Person</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Industry</th>
                                        <th>Service Sector</th>
                                        <th>Request Date</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                          
                                    @foreach($demos as $demo)
                                        <tr class="odd gradeX">
                                            <td>{{++$i}}</td>
                                            <td>{{$demo->company_name}}</td>
                                            <td>{{$demo->contact_person}}</td>
                                            <td>{{$demo->email}}</td>
                                            <td>{{$demo->phone}}</td>
                                            <td>{{$demo->industry}}</td>
                                            <td>{{$demo->service_sector}}</td>
                                            <td>{{$demo->created_at}}</td>                                       
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                                    </table>

                                    <div>{{$demos->links()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>


</div>
</div>



@endsection