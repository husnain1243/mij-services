@extends('admin.layout.layout')
<title>Testimonials List</title>
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <table id="testimonialTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        {{-- <th>Long Description</th> --}}
                                        <th>Thumbnail</th>
                                        <th>Date</th>
                                        <th width="100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        {{-- <th>Long Description</th> --}}
                                        <th>Thumbnail</th>
                                        <th>Date</th>
                                        <th width="100px">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    @include('admin.includes.scripts')
    @include('admin.includes.data-table-scripts')

    <script>
        $(function() {
            var table = $('#testimonialTable').DataTable({

                processing: true,
                serverSide: true,
                ajax: "{{ route('testimonial.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'

                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    // {
                    //     data: 'long_description',
                    //     name: 'long_description'
                    // },
                    {
                        data: 'thumbnail',
                        name: 'thumbnail'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: true
                    },
                ]
            });
        });
    </script>
@stop
