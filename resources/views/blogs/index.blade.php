@extends('layouts.master')
@section('content')

    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header"></h1>
        <!-- end page-header -->
        
        <!-- content begins -->
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
              
               <!--  @canany(['isSuperAdmin','isAdmin'])
                <a class="btn btn-danger pull-right" href="#modal-dialog" data-toggle="modal" >Create post <i class="fa fa-plus"></i></a>
                @endcan
                <br><br> -->
                <!-- Delete confirmation modals -->
                
                <!-- Delete modal ends -->
                <!-- starts New User modal -->
              

                <!-- New User modal ends -->
             
                <!-- end page-header -->
                
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-6 -->
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
                        <!--  -->
                        </div>
                    </div>
                </div>
                <div class="dividerr"></div>   
            </div>        
        </div>
    </div>
@endsection
