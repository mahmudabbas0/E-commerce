@extends('layouts.dashboard.app')

@section('title', __('dashboard.roles'))

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{ __('dashboard.roles') }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">{{ __('dashboard.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('dashboard.roles') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right">
                    <a href="{{ route('dashboard.roles.create') }}" class="btn btn-primary round btn-glow px-2 d-inline-flex align-items-center justify-content-center">
                        <i class="la la-plus-circle font-medium-3 mr-1"></i> <span>{{ __('dashboard.create-role') }}</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="role-list">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('dashboard.roles-list') }}</h4>
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
                                                    <th>{{ __('dashboard.role-name') }}</th>
                                                    <th>{{ __('dashboard.permissions') }}</th>
                                                    <th class="text-center">{{ __('dashboard.actions') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($roles as $index => $role)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td class="text-bold-600">{{ $role->role }}</td>
                                                        <td style="white-space: normal; max-width: 500px;">
                                                            @if(is_array($role->permissions))
                                                                @foreach($role->permissions as $p)
                                                                    <span class="badge badge-primary mb-1">{{ __('permissions.' . $p) }}</span>
                                                                @endforeach
                                                            @else
                                                                <span class="text-muted small">---</span>
                                                            @endif
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="d-flex justify-content-center">
                                                                <a href="{{ route('dashboard.roles.edit', $role->id) }}" class="btn btn-outline-primary btn-sm round mr-1" data-toggle="tooltip" title="{{ __('dashboard.edit') }}">
                                                                    <i class="la la-edit"></i>
                                                                </a>
                                                                <form action="{{ route('dashboard.roles.destroy', $role->id) }}" method="POST" style="display: inline-block;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-outline-danger btn-sm round delete-confirm" data-toggle="tooltip" title="{{ __('dashboard.delete') }}">
                                                                        <i class="la la-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="4" class="text-center">{{ __('dashboard.no-data') }}</td>
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
@endsection

@include('dashboard.includes.delete-confirm')

@push('styles')
<style>
    .card-title { font-weight: 700 !important; }
    .table thead th { border-bottom: 2px solid #E3EBF3; vertical-align: middle; }
    .table td { vertical-align: middle; }
    .badge { font-weight: 500; font-size: 85%; }
    .btn-group .btn { padding: 0.45rem 0.7rem; }
</style>
@endpush
