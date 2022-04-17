@section('post','active')
@section('title','Post Update')
@include('layouts.adminsite.master.header')
@include('layouts.adminsite.master.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post Update</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item">Post Update</li>
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
                <a href="{{ url('admin/post/create') }}" class="btn btn-info"><i
                        class="fa fa-plus"></i> Post Create</a>
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
                            <h3 class="card-title">Update Post</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('post.update',[$postupdate->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title1">Title</label>
                                    <input type="text" name="title" class="form-control" id="title1"
                                        value="{{ $postupdate->title }}" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="slug1">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="slug1"
                                        value="{{ $postupdate->slug }}" placeholder="Enter slug">
                                </div>
                                <div class="form-group">
                                    <label for="category1">Post Category</label>
                                    <select name="catagoy_id" id="category1" class="form-control">
                                        <option value="" style="display:none;" selected>Select Category</option>
                                        @foreach($postcategory as $c)
                                            <option value="{{ $c->id }}" @if($postupdate->category_id == $c->id)
                                                selected @endif>{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="User1">Post User</label>
                                    <select name="user_id" id="User1" class="form-control">
                                        <option value="" style="display:none;" selected>Select User</option>
                                        @foreach($user as $u)
                                            <option value="{{ $u->id }}" @if($postupdate->user_id == $u->id) selected
                                        @endif>{{ $u->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-8">
                                            <label for="image1">Image</label>
                                            <input type="file" name="image" class="form-control" id="image1">
                                        </div>
                                        <div class="col-4">
                                            <div
                                                style="max-width:90px; max-hight:90px; overflow:hidden; margin-left:auto;">
                                                <img src="{{ asset('storage/'.$postupdate->image) }}"
                                                    class="img-fluid" alt="">
                                                <p>Previous Image</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="des1">Description</label>
                                    <textarea name="description" class="form-control" id="summernote" rows="4"
                                        placeholder="Description">{!!$postupdate->description!!}</textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary form-control">Update</button>
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
