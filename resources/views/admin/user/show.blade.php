@extends('admin.layouts.app')
@section('title', 'User Lis')
@push('style')
    <style>
        tr th {
            background-color: gainsboro;
        }
    </style>
@endpush
@section('content')

    <div class="content-body">
        @php
            $links = [
                'Home' => route('dashboard'),
                'Users' => route('users.index'),
                'User Details' => '',
            ];
        @endphp
        <x-bread-crumb-component title='User' :links="$links" />
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('admin/images/users/5.jpg') }}" class="rounded-circle" alt="">
                            </div>
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th><strong>Name :</strong></th>
                                        <td>{{$users->name}}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Email :</strong></th>
                                        <td>{{$users->email}}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Date :</strong></th>
                                        <td>{{$users->created_at}}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="dt-action-buttons text-center">
                            <div class="dt-buttons d-inline-flex">
                                @include('buttons.back', ['route' => route('users.index')])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
