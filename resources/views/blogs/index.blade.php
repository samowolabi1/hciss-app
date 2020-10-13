@extends('layouts.master')
@section('content')

<div class="page-wrapper">
       <div class="container-fluid">

  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Bloging</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Post</li>
            </ol>
            <button type="button" class="btn btn-success d-none d-lg-block m-l-15"> Request A Demo</button>
        </div>
    </div>
</div>


<div class="row">

         <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 border-right">
                                        <h4>Create New Post</h4>
                                    </div>
                                    <div class="col-md-7">
                                        
                                    </div>
                                    
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8">
                                        <form action="{{route('blog.add')}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Enter Post Title</label> 
                                            <div class="col-12">
                                              <input id="text" name="title" placeholder="Enter Title here" class="form-control here" required="required" type="text">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Select Post Category</label> 
                                            <div class="col-12">
                                             <select class="form-control" name="category_id" required>
                                                <option value="">Select Category</option>
                                                @foreach($cats as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="textarea" class="col-12 col-form-label">Post Content</label> 
                                            <div class="col-12">
                                              <textarea id="textarea" name="content" cols="40" rows="5" class="form-control" required></textarea>
                                            </div>
                                          </div> 

                                           <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Tags / keywords</label> 
                                            <div class="col-12">
                                              <input id="text" name="tags" placeholder="Enter Tags here" class="form-control here" required="required" type="text" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Post Image</label> 
                                            <div class="col-12">
                                              <input type="file" id="text" name="image" class="form-control here" required="required">
                                            </div>
                                          </div>


                                          <div class="form-group row">
                                            
                                            <div class="col-12">
                                              <button type="submit" class="btn btn-sm btn-primary">Create New Post</button>
                                            </div>
                                          </div>


                                        </form>

                                        <br>
                    <div class="card-header bg-light ">Recent Posts</div>
                      <div class="panel-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        @canany(['isSuperAdmin','isAdmin'])
                                        <th>Actions</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                        <tr class="odd gradeX">
                                            <td>{{++$i}}</td>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->created_at}}</td>
                                          
                                            @canany(['isSuperAdmin','isAdmin'])
                                            <td>

                                                
                                               <form method="POST" action="{{route('blog.del',$cat->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    
                                                    <!-- <input type="hidden" value="{{$cat->id}}" name="cat_id"> -->

                                                    <input type="submit" class="btn btn-danger delete-cat" value="delete">
                                                </form>


                                            </td>

                                          
                                             @endcan
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                                    </div>
                                    <div class="col-md-4 ">
                                       
                                      <div class="card mb-3" style="max-width: 18rem;">
                                              <div class="card-header bg-light ">Categories</div>
                                              <div class="card-body">
                                                <form action="{{route('category.add')}}" method="POST">
                                                     @csrf
                                                  <div class="form-group row">
                                                    <div class="col-9">
                                                      <input id="tags" name="name" placeholder="New Category" class="form-control here" type="text" required>
                                                    </div>
                                                    <div class=" col-3">
                                                      <button name="submit" type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                    
                                                  </div> 
                                                </form>
                                              </div>
                                            </div> 


                      <div class="panel-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Categories</th>
                                        @canany(['isSuperAdmin','isAdmin'])
                                        <th>Actions</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cats as $cat)
                                        <tr class="odd gradeX">
                                            
                                            <td>{{$cat->name}}</td>
                                          
                                            @canany(['isSuperAdmin','isAdmin'])
                                            <td>

                                               <!--  <form method="POST" action="/admin/users/{{$user->id}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-danger delete-user" value="Delete user">
                                                    </div>
                                                </form> -->

                                                <form method="POST" action="{{route('category.del',$cat->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    
                                                    <!-- <input type="hidden" value="{{$cat->id}}" name="cat_id"> -->

                                                    <input type="submit" class="btn btn-danger delete-cat" value="delete">
                                                </form>

                                             <!--    <a href="javascript:;" data-toggle="modal" onclick = "deleteData({{$cat->id}})" data-target="#DeleteModal" class="btn btn-danger fa fa-trash"> </a> -->

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
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
    
</div>

</div>
</div>
 <!--    <div id="content" class="content">
        
        <h1 class="page-header"></h1>
       
        <div class="row">
             <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        
                    </div>
                    <h4 class="panel-title">Posts</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('blog.add')}}" method="POST">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" placeholder="Enter Post Title" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Image</label>
                                <div class="col-md-10">
                                    <input type="file" name="image" class="form-control" placeholder="Enter password" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Content</label>
                                <div class="col-md-10">
                                    <textarea name="content" placeholder="Content Here" rows="7">
                                        
                                    </textarea>
                                </div>
                            </div>

                              <div class="form-group">
                                <label class="col-md-2 control-label">Tags</label>
                                <div class="col-md-10">
                                    <input type="text" name="tags" class="form-control" placeholder="Enter Post Tags here" required />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>   
        </div>
            <div class="col-md-6 pr-5">
              
             
                <div class="row">
                
                    <div class="col-md-12">
                        <div>
                            <div>
                                <div class="panel panel-primary">
                                  <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        
                    </div>
                    <h4 class="panel-title">Posts</h4>
                </div>
                                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        @canany(['isSuperAdmin','isAdmin'])
                                        <th>Actions</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                        <tr class="odd gradeX">
                                            <td>{{++$i}}</td>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->created_at}}</td>
                                          
                                            @canany(['isSuperAdmin','isAdmin'])
                                            <td>

                                                <a class="btn btn-primary fa fa-pencil-square-o" href="{{ route('showUser',$user->id) }}"></a>
                                                <a href="javascript:;" data-toggle="modal" onclick = "deleteData({{$blog->id}})" data-target="#DeleteModal" class="btn btn-danger fa fa-trash"> </a>

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
                   
                        </div>
                    </div>
                </div>
                <div class="dividerr"></div>   
            </div>        
        </div>
    </div> -->
@endsection
@section('extra-script')

<script>
    $('.delete-cat').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>


    <script type="text/javascript">
         function deleteData(id)
         {
             var id = id;
             var url = '{{ route("category.del", "id") }}';
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

