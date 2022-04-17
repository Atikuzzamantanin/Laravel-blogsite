@section('footer','active')
@section('title','footer page')
@include('layouts.adminsite.master.header')
@include('layouts.adminsite.master.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Footer Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item">Footer Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 text-right">
                <a href="{{ url('admin/footer/create ') }}" class="btn btn-primary"><i
                        class="fa fa-plus"></i> Create Footer</a>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 ml-5 pt-3">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category List</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($footer as $footers)
                                        <tr>
                                            <td>{{ $footers->id }}</td>
                                            <td>{{ $footers->name }}</td>
                                            <td>{{ $footers->email }}</td>
                                            <td>{{ $footers->phone }}</td>
                                            <td>{{ $footers->address }}</td>
                                            <td class="d-flex">

                                                <form
                                                    action="{{ route('footer.destroy', [$footers->id]) }}"
                                                    method="POST" class="mr-1">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

        <!-- modal -->
        <div class="modal fade" id="modal-xl">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Footer Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <table class="table table-bordared table-primary">
                                <tbody>
                                    <tr>
                                        <th style="width:20px;">Name</th>
                                        <td>{{ $footers->name }}</td>
                                    </tr>

                                    <tr>
                                        <th style="width:20px;">Description</th>
                                        <td>
                                            {!!$footers->description!!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width:20px;">Facebook</th>
                                        <td>{{ $footers->facebook }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20px;">Twitter</th>
                                        <td>{{ $footers->twitter }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20px;">Instagram</th>
                                        <td>{{ $footers->instagram }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20px;">Email</th>
                                        <td>{{ $footers->email }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20px;">Copyright</th>
                                        <td>{{ $footers->copyright }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20px;">Phone</th>
                                        <td>{{ $footers->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20px;">Address</th>
                                        <td>{{ $footers->address }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- end modal -->
    </section>
    <!-- /.content -->
    @include('layouts.adminsite.master.footer')
