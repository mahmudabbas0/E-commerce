@extends('layouts.dashboard.app')

@section('title', __('dashboard.edit-role'))

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{ __('dashboard.edit-role') }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">{{ __('dashboard.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.roles.index') }}">{{ __('dashboard.roles') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('dashboard.edit-role') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="bordered-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="bordered-layout-basic-form">{{ __('dashboard.basic-info') }}</h4>
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
                            <div class="card-content collpase show">
                                <div class="card-body">
                                    <form class="form form-bordered" action="{{ route('dashboard.roles.update', $role->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-body">
                                            @include('dashboard.includes.alert-success')
                                            @include('dashboard.includes.alert-error')
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group border-bottom-0">
                                                        <label for="role_en">{{ __('dashboard.role-name') }} (EN)</label>
                                                        <input type="text" id="role_en" class="form-control" name="role[en]" value="{{ old('role.en', $role->getTranslation('role', 'en')) }}" placeholder="{{ __('dashboard.role_name_en_placeholder') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group border-bottom-0">
                                                        <label for="role_ar">{{ __('dashboard.role-name') }} (AR)</label>
                                                        <input type="text" id="role_ar" class="form-control" name="role[ar]" value="{{ old('role.ar', $role->getTranslation('role', 'ar')) }}" placeholder="{{ __('dashboard.role_name_ar_placeholder') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="form-section mt-2"><i class="la la-key"></i> {{ __('dashboard.permissions-list') }}</h4>
                                            
                                            <div class="row">
                                                @php
                                                    $allPermissions = config('permissions', []);
                                                    $checkedPermissions = old('permissions', $role->permissions ?? []);
                                                @endphp
                                                @foreach($allPermissions as $permission)
                                                    <div class="col-md-3 col-sm-6 mb-1">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" id="perm_{{ $permission }}" name="permissions[]" value="{{ $permission }}" {{ in_array($permission, $checkedPermissions) ? 'checked' : '' }}>
                                                            <label class="custom-control-label" for="perm_{{ $permission }}">{{ __('permissions.' . $permission) }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="form-actions text-right">
                                            <button type="button" class="btn btn-warning mr-1" onclick="window.history.back()">
                                                <i class="ft-x"></i> {{ __('dashboard.cancel') }}
                                            </button>
                                            <button type="submit" class="btn btn-primary btn-glow">
                                                <i class="la la-check-square-o"></i> {{ __('dashboard.save_changes') }}
                                            </button>
                                        </div>
                                    </form>
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

@push('styles')
<style>
    .form-section { border-bottom: 1px solid #d1d4d7; padding-bottom: 10px; margin-bottom: 20px; font-weight: 700; color: #1e9ff2; }
    .form-actions { border-top: 1px solid #d1d4d7; padding-top: 20px; margin-top: 20px; }
    .custom-switch .custom-control-label::before { background-color: #adb5bd; border-color: #adb5bd; }
    .custom-switch .custom-control-input:checked ~ .custom-control-label::before { background-color: #28d094; border-color: #28d094; }
</style>
@endpush
