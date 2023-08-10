@extends('admin.layouts.app')
@section('title', 'Users')

@push('style')
    <link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="content-body">

        @php
            $links = [
                'Home' => route('dashboard'),
                // 'Users' => route('users.index'),
                'User List' => '',
            ];
        @endphp
        <x-bread-crumb-component title='User' :links="$links" />

        <div class="container-fluid">
            <div class="row">
                <!-- /# column -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="card-title">
                                    <h4 class="mt-2 ml-4">Users List</h4>
                                </div>
                                <div style="margin-left: 960px">
                                    @include('buttons.add_new', ['data_target' => '#add_users'])
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-striped">
                                    {{-- show from datatable --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
        <div class="modal fade text-left" id="add_users" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span data-bs-dismiss="modal" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required id="name">
                        </div>
                        <div class="modal-body">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required id="email">
                        </div>
                        <div class="modal-body">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required id="password">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('admin/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').dataTable({
                stateSave: true,
                responsive: true,
                serverSide: true,
                processing: true,
                ajax: {
                    url: "{{ route('users.index') }}",
                },
                columns: [{
                        data: "DT_RowIndex",
                        title: "SL",
                        name: "DT_RowIndex",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: "name",
                        title: "name",
                        searchable: true
                    },
                    {
                        data: "email",
                        title: "email",
                        searchable: true
                    },
                    {
                        data: "created_at",
                        title: "date",
                        searchable: true
                    },
                    {
                        data: "action",
                        title: "Action",
                        orderable: false,
                        searchable: false
                    },
                ],
            });
        })
    </script>
@endpush
