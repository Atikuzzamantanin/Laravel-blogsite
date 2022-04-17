@section('post','active')
@section('title','Post Create')
@include('layouts.adminsite.master.header')
@include('layouts.adminsite.master.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post Create</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item">Post Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <a href="{{ url('admin/post') }}" class="btn btn-primary">Post List</a>
            </div>
        </div>
    </div><br>
    @include('layouts.adminsite.include.errormessage')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <!-- general form elements -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Create Post</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('post.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title1">Title</label>
                                    <input type="text" name="title" class="form-control" id="title1"
                                        value="{{ old('title') }}" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="slug1">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="slug1"
                                        value="{{ old('slug') }}" placeholder="Enter slug">
                                </div>
                                <div class="form-group">
                                    <label for="category1">Post Category</label>
                                    <select name="catagoy" id="category1" class="form-control">
                                        <option value="" style="display:none;" selected>Select Category</option>
                                        @foreach($category as $c)
                                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category1">Post Tag</label>
                                    <select name="tag" id="category1" class="form-control">
                                        <option value="" style="display:none;" selected>Select Tag</option>
                                        @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="User1">Post User</label>
                                    <select name="user" id="User1" class="form-control">
                                        <option value="" style="display:none;" selected>Select User</option>
                                        @foreach($user as $u)
                                            <option value="{{ $u->id }}">{{ $u->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image1">Image</label>
                                    <input type="file" name="image" class="form-control" id="image1">
                                </div>
                                <div class="form-group">
                                    <label for="des1">Description</label>
                                    <textarea name="description" class="form-control"  id="summernote" rows="4"
                                        placeholder="Description">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary form-control">Create</button>
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @include('layouts.adminsite.master.footer')
