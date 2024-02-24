@extends('admin.layout.layout')
<title>Create Services </title>
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Services</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('POST') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter Title ">
                                </div>
                                <div class="form-group">
                                    <label for ="exampleInputPassword1">Short Description</label>
                                    <input type="text" class="form-control" name="short_description"
                                        id="short_description" placeholder="Long Description">
                                </div>
                                <div class="form-group">
                                    <label for ="exampleInputPassword1">Long Description</label>
                                    <input type="text" class="form-control" name="long_description" id="long_description"
                                        placeholder="Long Desscription">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Images</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@stop
