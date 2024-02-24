@extends('admin.layout.layout')
<title>Edit Service</title>
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success ">

                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Service</h3>
                        </div>
                        <form action="{{ route('service.update') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <input type="hidden" name="id", value="{{ $service->id }}">
                            {{ method_field('PUT') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter Title" value="{{ $service->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <input type="text" class="form-control" name="short_description"
                                        id="short_description" placeholder="Short Description"
                                        value="{{ $service->short_description }}">
                                </div>
                                <div class="form-group">
                                    <label for="long_description">Long Description</label>
                                    <input type="text" class="form-control" name="long_description" id="long_description"
                                        placeholder="Long Description" value="{{ $service->long_description }}">
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
                                <div style="width:10px height:auto ">
                                    <img id="image-container1" class="img img-fluid"
                                        src="{{ $service->getFirstMediaUrl('images', 'thumb') }}" />

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
