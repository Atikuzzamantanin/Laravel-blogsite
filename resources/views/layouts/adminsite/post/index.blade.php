@section('post','active')
@section('title','Post page')
@include('layouts.adminsite.master.header')
@include('layouts.adminsite.master.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item">Post List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 text-right offset-2">
                <a href="{{ url('admin/post/create ') }}" class="btn btn-primary"><i
                        class="fa fa-plus"></i> Create Post</a>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Post List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Tag Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($post as $posts)
                                        <tr>
                                            
                                            <td>
                                               
                                                    <img style="height:70px; width:70px; overflow:hidden"; src="{{ asset('storage/'.$posts->image) }}"
                                                        class="img-fluid" alt="">
                                                
                                            </td>
                                            <td>{{ $posts->title }}</td>
                                            <td>{{ $posts->category->name }}</td>
                                            <td>{{ $posts->user->name }}</td>
                                            <td><span class="badge badge-primary"> {{ $posts->tag->name }}</span>
                                            </td>
                                            <td class="d-flex">
                                                <a href="{{ route('post.edit', [$posts->id]) }}"
                                                    class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                                <form
                                                    action="{{ route('post.destroy', [$posts->id]) }}"
                                                    method="POST" class="mr-1">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form><a
                                                    href="{{ route('post.show', [$posts->id]) }}"
                                                   
                                                    class="btn btn-sm btn-info mr-1"><i class="fas fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Tag Name</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

       
    </section>
    <!-- /.content -->


    @include('layouts.adminsite.master.footer')
