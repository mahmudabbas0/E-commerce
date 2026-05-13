@extends('layouts.dashboard.app')

@section('title', __('dashboard.admins'))

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{ __('dashboard.admins') }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">{{ __('dashboard.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('dashboard.admins') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right">
                    <a href="{{ route('dashboard.admins.create') }}" class="btn btn-info round box-shadow-2 px-2">
                        <i class="ft-plus icon-left"></i> {{ __('dashboard.create-admin') }}
                    </a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="admin-list">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('dashboard.admins-list') }}</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    @include('dashboard.includes.alert-success')
                                    @include('dashboard.includes.alert-error')
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>{{ __('dashboard.name') }}</th>
                                                    <th>{{ __('dashboard.email') }}</th>
                                                    <th>{{ __('dashboard.role') }}</th>
                                                    <th>{{ __('dashboard.status') }}</th>
                                                    <th class="text-center">{{ __('dashboard.actions') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($admins as $index => $admin)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td class="text-bold-600">{{ $admin->name }}</td>
                                                        <td>{{ $admin->email }}</td>
                                                        <td>
                                                            <span class="badge badge-info">{{ $admin->role ? $admin->role->role : '---' }}</span>
                                                        </td>
                                                        <td>
                                                            @if($admin->status == 1)
                                                                <span class="badge badge-success">{{ __('dashboard.active') }}</span>
                                                            @else
                                                                <span class="badge badge-danger">{{ __('dashboard.inactive') }}</span>
                                                            @endif
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <a href="{{ route('dashboard.admins.edit', $admin->id) }}" class="btn btn-outline-primary btn-sm"><i class="ft-edit"></i></a>
                                                                <button type="button" class="btn btn-outline-danger btn-sm" 
                                                                        data-toggle="modal" 
                                                                        data-target="#deleteModal" 
                                                                        data-action="{{ route('dashboard.admins.destroy', $admin->id) }}">
                                                                    <i class="ft-trash-2"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6" class="text-center">{{ __('dashboard.no-data') }}</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@include('dashboard.includes.delete-confirm')
@endsection
