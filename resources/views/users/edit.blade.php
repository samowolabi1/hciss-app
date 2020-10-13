@extends('layouts.master')

@section('content')

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
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
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="../assets/images/users/5.jpg" class="img-circle"
                                        width="150" />
                                    <h4 class="card-title m-t-10">Hanna Gover</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-people"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-picture"></i>
                                                <font class="font-medium">54</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="johnathan@admin.com"
                                                class="form-control form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="123 456 7890"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
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
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>





  <!--   <div class="content">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Update Profile</h4>
                </div>
                <div class="panel-body">
                    
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('userProfile')}}">
                         @csrf
                        @if (! is_null($profile))
                        <div class="form-group">
                            <label class="col-md-3 control-label">Profile Image</label>
                            <div class="col-md-8">
                                <input type="file" name="photo" id="photo" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">First Name</label>
                            <div class="col-md-8">
                                <input type="text" name="fname" class="form-control" value="{{$profile->fname}}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-8">
                                <input type="text" name="lname" class="form-control" value="{{$profile->lname}}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Initial</label>
                            <div class="col-md-3">
                                <select class="form-control" name="initial">
                                    <option value="{{$profile->initial}}">{{$profile->initial}}</option>
                                    <option value="Mr"> Mr.</option>
                                    <option value="Mrs"> Mrs</option>
                                    <option value="Miss"> Miss</option>
                                </select>
                            </div>

                            <label class="col-md-1 control-label">Gender</label>
                            <div class="col-md-4">
                               <select class="form-control" name="gender">
                                    <option value="{{$profile->gender}}">{{$profile->gender}}</option>
                                    <option value="Male"> Male</option>
                                    <option value="Female"> Female</option>
                               </select>
                            </div>
                        
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Phone Number</label>
                            <div class="col-md-4">
                                <input type="text" name="phone" class="form-control" value="{{$profile->phone}}" />
                            </div>
                            <label class="col-md-1 control-label">Ext</label>
                            <div class="col-md-3">
                                <input type="text" name="extension" class="form-control" value="{{$profile->extention}}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Date of Birth</label>
                            <div class="col-md-8">
                                <input type="date" name="dob" class="form-control" placeholder="Date of Birth" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Job Title</label>
                            <div class="col-md-8">
                                <input type="text" name="job" class="form-control" value="{{$profile->job_title}}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Department</label>
                            <div class="col-md-8">
                                <input type="text" name="dept" class="form-control" value="{{$profile->department}}" />
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label class="col-md-3 control-label">Address</label>
                            <div class="col-md-8">
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                        </div> -->
                        
                        @else
                        <div class="form-group">
                            <label class="col-md-3 control-label">Profile Image</label>
                            <div class="col-md-8">
                                <input type="file" name="photo" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">First Name</label>
                            <div class="col-md-8">
                                <input type="text" name="fname" class="form-control" placeholder="First Name" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-8">
                                <input type="text" name="lname" class="form-control" placeholder="Last Name" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Initial</label>
                            <div class="col-md-3">
                                <select class="form-control" name="initial">
                                    <option value="....">**** Select Your Title****</option>
                                    <option value="Mr"> Mr.</option>
                                    <option value="Mrs"> Mrs</option>
                                    <option value="Miss"> Miss</option>
                                </select>
                            </div>
                            <label class="col-md-1 control-label">Gender</label>
                            <div class="col-md-4">
                               <select class="form-control" name="gender">
                                    <option value="...."> ***Select your Gender***</option>
                                    <option value="Male"> Male</option>
                                    <option value="Female"> Female</option>
                               </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Phone Number</label>
                            <div class="col-md-4">
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number" />
                            </div>
                            <label class="col-md-1 control-label">Ext</label>
                            <div class="col-md-3">
                                <input type="text" name="extension" class="form-control" placeholder="234001" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label">Date of Birth</label>
                            <div class="col-md-8">
                                <input type="date" name="dob" class="form-control" placeholder="Date of Birth" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Job Title</label>
                            <div class="col-md-8">
                                <input type="text" name="job" class="form-control" placeholder="Job Title" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Department</label>
                            <div class="col-md-8">
                                <input type="text" name="dept" class="form-control" placeholder="Job Title" />
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-8">
                                <button type="submit" class="btn btn-sm btn-success m-r-5">Submit</button>
                                <button type="reset" class="btn btn-sm btn-warning ">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>         
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        
                    </div>
                    <h4 class="panel-title">Change Password Here</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('changepass',$staff->id)}}" method="POST" name="update_product">
                        @csrf
                        @method('PUT')
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Old Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" placeholder="Enter password" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">New Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="confirm_password" class="form-control" placeholder="Confirm Password" required />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>   
        </div>
    </div> -->

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