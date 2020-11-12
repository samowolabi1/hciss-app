@extends('layouts.master')
@section('content')

<div class="page-wrapper">
       <div class="container-fluid">

    <div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Policy</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
            </ol>
        </div>
    </div>
</div>



 <div class="row">
                    <!-- column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Privacy Policy</h4>
                                
                            </div>
                            <div class="card-body">
                                
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                 <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update Privacy</h4>
                                <br>

                                 <form action="{{route('privacy.message')}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                        
                                     
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
                        </div>
                    </div>

                   
                </div>


</div>
</div>



@endsection