@extends('admin.layouts.app')
@section('title', 'Users Create')

@push('style')
    <link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="content-body">
        @php
            $links = [
                'Home' => route('dashboard'),
                'Users' => route('users.index'),
                'User Create' => '',
            ];
        @endphp
        <x-bread-crumb-component title='User' :links="$links" />
        <div class="container-fluid">
            <div class="row">
                <!-- /# column -->
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <div class="card-title">
                                    <h4 class="mt-2 ml-4">Users Create</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" required
                                                id="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" required
                                                id="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" required
                                                id="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
@endpush
