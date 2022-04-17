@section('post','active')
@section('title','Post page')
@include('layouts.adminsite.master.header')
@include('layouts.adminsite.master.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item">Post View</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <a href="{{ url('admin/post/create ') }}" class="btn btn-primary"><i
                        class="fa fa-plus"></i> Create Post</a>
            </div>
        </div>
    </div>

    <!-- table post view -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card-body">
                    <table class="table table-bordared table-primary">
                        <tbody>
                            <tr>
                                <th style="width:200px;">Image</th>
                                <td>
                                    <div style="max-width:90px; max-width:90px; overflow:hidden">
                                        <img src="{{ asset('storage/'.$viewpost->image) }}"
                                            class="img-fluid" alt="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th style="width:20px;">Title</th>
                                <td>{{ $viewpost->title }}</td>
                            </tr>
                            <tr>
                                <th style="width:20px;">Category Name</th>
                                <td>{{ $viewpost->category->name }}</td>
                            </tr>
                            <tr>
                                <th style="width:20px;">Post Tag</th>
                                <td>{{ $viewpost->tag->name }}</td>
                            </tr>
                            <tr>
                                <th style="width:20px;">Author Name</th>
                                <td>{{ $viewpost->user->name }}</td>
                            </tr>
                            <tr class="col-md-10">
                                <th>Description</th>
                                <td>{!!$viewpost->description!!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
    < </div>
        @include('layouts.adminsite.master.footer')
