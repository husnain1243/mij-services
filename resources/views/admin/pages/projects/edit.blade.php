@extends('admin.layout.layout')
<title>Edit Project</title>
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Project</h3>
                        </div>
                        <form action="{{ route('project.update') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <input type="hidden" name="id", value="{{ $projects->id }}">
                            {{ method_field('PUT') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter Title" value="{{ $projects->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <input type="text" class="form-control" name="short_description"
                                        id="short_description" placeholder="Short Description"
                                        value="{{ $projects->short_description }}">
                                </div>
                                <div class="form-group">
                                    <label for="long_description">Long Description</label>
                                    <input type="text" class="form-control" name="long_description" id="long_description"
                                        placeholder="Long Description" value="{{ $projects->long_description }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Images</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div style="width:10px height:auto ">
                                    <img id="image-container1" class="img img-fluid"
                                        src="{{ $projects->getFirstMediaUrl('images', 'thumb') }}" />

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
