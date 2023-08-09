@extends('admin.layouts.app')
@section('title', 'Users')

@push('style')
    <link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="content-wrapper">
        @php
            $links = [
                'Home' => route('dashboard'),
                // 'Users' => route('users.index'),
                'User List' => '',
            ];
        @endphp
        <x-bread-crumb-component title='User' :links="$links" />
        <div class="content-body">
            <div class="row" id="table-responsive">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ">
                            <div class="head-label">
                                <h4 class="mb-0"> {{__('All Breed List')}}</h4>
                            </div>
                            <div class="dt-action-buttons text-right">
                                <div class="dt-buttons d-inline-flex">
                                    @include('buttons.add_new',['data_target'=>'#breed'])
                                    {{-- @include('buttons.excel_simple_upload',['simple_route'=>route('user.breeds.sample'),'upload_route'=>route('user.breeds.bulk.upload')]) --}}
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered">
                                    {{-- show from datatable--}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Responsive tables end -->
        </div>
        <div class="modal fade text-left" id="breed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Breed</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span data-bs-dismiss="modal" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <label for="type" class="form-label">Breed Type</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="" disabled selected>Select Breed Type</option>
                                {{-- @foreach(authUserCompany()->farmTypes as $type)
                                    <option value="{{ $type->name }}">{{ ucfirst($type->name) }}</option>
                                @endforeach --}}
                                <option value="others">Others</option>
                            </select>
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required id="name">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dt-action-buttons text-right">
                                <a href="{{ route('users.create') }}" class="btn btn-primary"> <i
                                        data-feather='plus-square'></i> {{ __('Add New') }}</a>
                            </div>
                            <div class="d-inline-flex">
                                <h4 class="card-title">User List</h4>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered">
                                    {{-- show from datatable --}}
                               {{--  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- #/ container -->
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
