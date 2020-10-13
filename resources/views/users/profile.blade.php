@extends('layouts.master')

@section('content')


        <div class="page-wrapper">
       
            <div class="container-fluid">
             
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Profile</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                            <button type="button" class="btn btn-success d-none d-lg-block m-l-15"> Request A Demo</button>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> 
                                     @if ($user->profiles)
                                        <img src="{{asset('profile_images/'.$user->profiles->photo)}}" class="img-circle" width="150" />
                                        @else
                                        <img src="/img/user-13.jpg" alt="" class="img-circle" width="150" /> 
                                     @endif
                                    <h4 class="card-title m-t-10">{{$profile->name}}</h4>
                                    <h6 class="card-subtitle">{{$profile->role->name}}</h6>
                                   
                                </center>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                           
                            <div class="card-body">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" method="POST" action="{{route('userProfile',$profile->id)}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$profile->name}}" class="form-control form-control-line" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value="{{$profile->email}}" 
                                                class="form-control form-control-line" name="email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" value="{{$profile->password}}"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  
                </div>
            
            </div>

        </div>



@endsection
@section('extra-script')
    <script type="text/javascript">
        var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

            function validatePassword(){
              if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
              } else {
                confirm_password.setCustomValidity('');
              }
            }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        
    </script>
    @endsection