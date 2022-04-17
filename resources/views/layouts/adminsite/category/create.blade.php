@section('category','active')
@section('title','Category Create')
@include('layouts.adminsite.master.header')
@include('layouts.adminsite.master.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category Create</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item">Category Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <a href="{{ url('admin/category') }}" class="btn btn-primary">Category List</a>
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
                            <h3 class="card-title">Create Category</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name1">Name</label>
                                    <input type="text" name="name" class="form-control" id="name1"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="slug1">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="slug1"
                                        placeholder="Slug Name">
                                </div>
                                <div class="form-group">
                                    <label for="des1">Description</label>
                                    <textarea name="description" class="form-control" id="des1" rows="4"
                                        placeholder="Description"></textarea>
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
