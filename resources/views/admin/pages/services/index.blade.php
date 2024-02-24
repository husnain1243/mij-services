@extends('admin.layout.layout')
<title>Service List</title>
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success ">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <table id="serviceTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Short Description</th>
                                        <th>Long Description</th>
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
                                        <th>Short Description</th>
                                        <th>Long Description</th>
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
            var table = $('#serviceTable').DataTable({
                // console.log('lllll');

                processing: true,
                serverSide: true,
                ajax: "{{ route('service.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'

                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'short_description',
                        name: 'short_description'
                    },
                    {
                        data: 'long_description',
                        name: 'long_description'
                    },
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
