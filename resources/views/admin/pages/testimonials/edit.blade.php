@extends('admin.layout.layout')
<title>Edit Testimonials</title>
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
                            <h3 class="card-title">Edit Testimonials</h3>
                        </div>
                        <form action="{{ route('testimonial.update') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <input type="hidden" name="id", value="{{ $testimonials->id }}">
                            {{ method_field('PUT') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter Title" value="{{ $testimonials->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="short_description">Description</label>
                                    <input type="text" class="form-control" name="description" id="description"
                                        placeholder="Description" value="{{ $testimonials->description }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Images</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="image">
                                            {{-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> --}}
                                        </div>
                                    </div>
                                </div>
                                <div style="width:50px; height:50px; ">
                                    <img id="image-container1" class="img img-fluid" style="width:100%; height:100%;"
                                        src="{{ $testimonials->getFirstMediaUrl('images', 'thumb') }}" />

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
