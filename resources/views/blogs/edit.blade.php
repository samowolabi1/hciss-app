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
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                
            </ol>
         
        </div>
    </div>
</div>


<div class="row">

         <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 border-right">
                                        <h4>Edit Post</h4>
                                    </div>
                                    <div class="col-md-7">
                                        
                                    </div>
                                    
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8">
                                        <form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          @method('PUT')
                                          <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Post Title</label> 
                                            <div class="col-12">
                                              <input id="text" name="title" value="{{$blog->title}}" class="form-control here" type="text">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Select Post Category</label> 
                                            <div class="col-12">
                                             <select class="form-control" name="category_id">
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
                                              <input id="textarea" name="content" value="{{$blog->content}}" class="form-control">
                                            </div>
                                          </div> 

                                           <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Tags / keywords</label> 
                                            <div class="col-12">
                                              <input id="text" name="tags" value="{{$blog->tags}}" class="form-control here" type="text">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Post Image</label> 
                                            <div class="col-12">
                                              <input type="file" id="text" name="image" class="form-control here">
                                            </div>
                                          </div>


                                          <div class="form-group row">
                                            
                                            <div class="col-12">
                                              <button type="submit" class="btn btn-sm btn-primary">Update Post</button>
                                            </div>
                                          </div>


                                        </form>

                                        <br>
                   
                      
                                    </div>

                                    <div class="col-md-4"><br><br><br><br>
                                        <div>
                                            <table id="data-table" class="table">

                                                <tr>
                                                    <td>Title</td>
                                                    <td>{{$blog->title}}</td>

                                                </tr>

                                                 <tr>
                                                    <td>Category</td>
                                                    <td>{{$blog->category->name}}</td>
                                                    
                                                </tr>

                                                 <tr>
                                                    <td>Content</td>
                                                    <td>{{$blog->content}}</td>
                                                    
                                                </tr>

                                                 <tr>
                                                    <td>Tags</td>
                                                    <td>{{$blog->tags}}</td>
                                                    
                                                </tr>
                                                 <tr>
                                                
                                                    <td><img src="banners/{{$blog->image}}" width="150px" height="100px"></td>
                                                    
                                                </tr>
                                            </table>
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

