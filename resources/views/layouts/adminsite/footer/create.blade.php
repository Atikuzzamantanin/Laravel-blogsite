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
                    <h1 class="m-0">Footer Create</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item">Footer Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Create Footer </h3>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <div class="card-body">
                                    <form action="{{ route('footer.store') }}" method="POST">
                                        @csrf 
                                        @include('layouts.adminsite.include.errormessage')
                                        <div class="form-group">
                                            <label for="name">Site Name</label>
                                            <input type="name" name="name" class="form-control" placeholder="Enter name">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="facebook">Facebook</label>
                                                    <input type="facebook" name="facebook"  class="form-control" placeholder="facebook url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="twitter">Twitter</label>
                                                    <input type="twitter" name="twitter"  class="form-control" placeholder="twitter url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="instagram">Instagram</label>
                                                    <input type="instagram" name="instagram" class="form-control" placeholder="instagram url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email"  class="form-control" placeholder="email url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="copyright">Copyright</label>
                                                    <input type="copyright" name="copyright"  class="form-control" placeholder="copyright">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="email">Contact Phone Number</label>
                                                    <input type="text" name="phone"  class="form-control" placeholder="phone number">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" name="address"  class="form-control" placeholder="Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Site Description</label>
                                            <textarea name="description" id="description" rows="3" class="form-control" placeholder="Enter description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Create Post</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
    <!-- /.content -->
    @include('layouts.adminsite.master.footer')
