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
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
            </ol>
           
        </div>
    </div>
</div>



 <div class="row">
                    <!-- column -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Users</h3>
                                
                            </div>
                            <div class="card-body">
                                
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr class="odd gradeX">
                                            <td>{{++$i}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                             @if($user->role_id == '')
                                                <td>Super Admin</td>
                                            @else
                                            <td>{{$user->role->name}}</td>
                                            @endif
                                        
                                            @if($user->activate == 1)
                                            <td>
                                                
                                                <form action="{{route('activateUser',$user->id)}}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="activate" value="0">
                                                    <input type="submit" value="Deactivate" class="btn btn-secondary">
                                                </form>

                                            </td>

                                            @else

                                            <td>
                                                <form action="{{route('activateUser',$user->id)}}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="activate" value="1">
                                                    <input type="submit" value="Activate" class="btn btn-danger">
                                                </form>

                                            </td>
                                            @endif
                                         
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                                    </table>
                                    <div>{{$users->links()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3>Add New User</h3>
                            </div>
                            <div class="card-body">

                          <form method="POST" action="{{route('user.add')}}">
            @csrf
           

            <div class="form-group m-b-15">
                <label for="name">{{ __('Full Name') }}</label>
                <input id="name" type="text" class="form-control input-lg" placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group m-b-15">
                <label for="username" >{{ __('User Name') }}</label>
                <input id="username" type="text" class="form-control input-lg" placeholder="username" name="username" value="{{ old('username') }}" required autofocus>

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group m-b-15">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control input-lg" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus />

                @if ($errors->has('email'))
                    <span class="text-danger" role=" alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group m-b-15">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control input-lg" placeholder="password" name="password" required>

                @if ($errors->has('password'))
                    <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group m-b-15">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required>
            </div>
         
            <div class="register-buttons">
                <button type="submit" class="btn btn-primary">Add User</button>
            </div>
            
        </form>
                                    </div>

                                    </div>
                        
                    </div>
                </div>


</div>
</div>






<!-- 





    <div id="content" class="content">
      
        <h1 class="page-header"></h1>
        
        <div class="row">
            <div class="col-md-12 pr-5">
              
                <a href="#nav-pills-tab-2" data-toggle="tab"><i class="fa fa-2x fa-th-large"></i></a> &nbsp;

                <a href="#nav-pills-tab-1" data-toggle="tab"><i class="fa fa-2x fa-th-list"></i></a> &nbsp;

                @can('isSuperAdmin')
                <a class="btn btn-danger pull-right" href="#modal-dialog" data-toggle="modal" >Add User <i class="fa fa-plus"></i></a>
                @endcan
                <br><br>
             
                <div id="DeleteModal" class="modal fade text-danger" role="dialog">
                   <div class="modal-dialog ">
                     <form action="" id="deleteForm" method="GET">
                         <div class="modal-content">
                             <div class="modal-header bg-danger">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
                             </div>
                             <div class="modal-body">
                                 {{ csrf_field() }}
                               
                                 <h4 class="text-center"> You're about to delete a user ?</h4>
                             </div>
                             <div class="modal-footer">
                                 <center>
                                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                                 </center>
                             </div>
                         </div>
                     </form>
                   </div>
                </div>
               
                <div class="modal fade" id="modal-dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-center" id="SignUp">Add New Users</h4>
                                </div>
                                <div class="modal-body" style="overflow: hidden;">
                                    <div id="success-msg" class="hide">
                                        <div class="alert alert-info alert-dismissible fade in" role="alert">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                          </button>
                                          <strong>Success!</strong> Check your mail for login confirmation!!
                                        </div>
                                    </div>
                                  
                                    <form id="Register" >
                                        @csrf

                                        <div class="form-group has-feedback">
                                            <label class="control-label">Full Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Full name">
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            <span class="text-danger">
                                                <strong id="name-error"></strong>
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">User Role</label>
                                           <select class="form-control" name="role">
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                
                                        <div class="form-group has-feedback">
                                            <label for="email">User Email</label>
                                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                            <span class="text-danger">
                                                <strong id="email-error"></strong>
                                            </span>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label for="password">User Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                            <span class="text-danger">
                                                <strong id="password-error"></strong>
                                            </span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="password_confirmation"> Password Confirmation</label>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
                                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                        </div>

                                             <button type="submit" id="submitForm" class="btn btn-primary btn-block btn-lg">Register User</button>
                                    </form>        
                             
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                                </div>
                            </div>
                    </div>
                </div>

           
                <div class="row">
                
                    <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="nav-pills-tab-1">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>    
                                        </div>
                                        <h4 class="panel-title">Users</h4>
                                    </div>
                                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        @can('isSuperAdmin')
                                        <th>Actions</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr class="odd gradeX">
                                            <td>{{++$i}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                             @if($user->role_id == '')
                                                <td>Super Admin</td>
                                            @else
                                            <td>{{$user->role_id}}</td>
                                            @endif
                                        
                                            @if($user->activate == 1)
                                            <td>Active</td>

                                            @else

                                            <td>Inactive</td>
                                            @endif
                                            @can('isSuperAdmin')
                                            <td>

                                                <a class="btn btn-primary fa fa-pencil-square-o" href="{{ route('showUser',$user->id) }}"></a>
                                                <a href="javascript:;" data-toggle="modal" onclick = "deleteData({{$user->id}})" data-target="#DeleteModal" class="btn btn-danger fa fa-trash"> </a>

                                            </td>

                                       
                                             @endcan
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="nav-pills-tab-2">
                                <div class="row">
                             
                                @foreach($users as $user)  
                                    <div class="col-md-3 col-sm-6">
                                        <div class="widget widget-stats bg-blue">
                                            <div class="stats-icon">
                                                <i class="fa fa-desktop"></i>
                                            </div>
                                            <div class="stats-info">
                                                <h4>{{$user->name}}</h4>
                                                @if($user->activate == 1)
                                                    <p>Active</p>
                                                @else
                                                   <p>Inactive</p>
                                                @endif 
                                                @can('isSuperAdmin')
                                                <a href="javascript:;" style="margin-left: 90%"  data-toggle="modal" onclick = "deleteData({{$user->id}})" data-target="#DeleteModal" class="btn btn-warning fa fa-trash"> </a> 
                                                @endcan           
                                            </div>
                                            @can('isSuperAdmin')
                                            <div class="stats-link">
                                                <a href='{{url("showUser", $user->id)}}'>View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                                            </div>
                                            @endcan
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dividerr"></div>   
            </div>        
        </div>
    </div> -->
@endsection
@section('extra-script')
    <script type="text/javascript">
         function deleteData(id)
         {
             var id = id;
             var url = '{{ route("deleteUser", "id") }}';
             url = url.replace('id', id);
             $("#deleteForm").attr('action', url);
         }

         function formSubmit()
         {
             $("#deleteForm").submit();
         }


        $('body').on('click', '#submitForm', function(event){
            event.preventDefault();
            var registerForm = $("#Register");
            var formData = registerForm.serialize();
            $( '#name-error' ).html( "" );
            $( '#email-error' ).html( "" );
            $( '#password-error' ).html( "" );


            $.ajax({
                url:'{{ route("user.add") }}',
                type:'POST',
                data:formData,
                success:function(data) {
                    console.log(data);
                    if(data.errors) {
                        if(data.errors.name){
                            $( '#name-error' ).html( data.errors.name[0] );
                        }
                        if(data.errors.email){
                            $( '#email-error' ).html( data.errors.email[0] );
                        }
                        if(data.errors.password){
                            $( '#password-error' ).html( data.errors.password[0] );
                        }   
                    }
                    if(data.success) {
                        $('#success-msg').removeClass('hide');
                        setInterval(function(){ 
                            $('#SignUp').modal('hide');
                            $('#modal-dialog').modal('hide');
                            // $('#success-msg').addClass('hide');
                        }, 2000);
                    }
                },
            });
        });

    </script>

@endsection
