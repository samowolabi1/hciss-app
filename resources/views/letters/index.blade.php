@extends('layouts.master')
@section('content')

<div class="page-wrapper">
       <div class="container-fluid">

    <div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Users</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Signup Letters</li>
            </ol>
            <button type="button" class="btn btn-success d-none d-lg-block m-l-15"> Request A Demo</button>
        </div>
    </div>
</div>



 <div class="row">
                    <!-- column -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Signup Letters</h4>
                                
                            </div>
                            <div class="card-body">
                                
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Email</th>
                                        <th>Signup Date</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($letters as $letter)
                                        <tr class="odd gradeX">
                                            <td>{{++$i}}</td>
                                            <td>{{$letter->name}}</td>
                                            <td>{{$letter->created_at}}</td>                                       
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3></h3>
                            </div>
                            <div class="card-body">

                                     </div>

                                    </div>
                        
                    </div>
                </div>


</div>
</div>



@endsection