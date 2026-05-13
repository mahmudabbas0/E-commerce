@extends('layouts.dashboard.app')

@section('title', __('dashboard.create-admin'))

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{ __('dashboard.create-admin') }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">{{ __('dashboard.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.admins.index') }}">{{ __('dashboard.admins') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('dashboard.create-admin') }}</li>
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
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collpase show">
                                <div class="card-body">
                                    <form class="form form-bordered" action="{{ route('dashboard.admins.store') }}" method="post">
                                        @csrf
                                        <div class="form-body">
                                            @include('dashboard.includes.alert-success')
                                            @include('dashboard.includes.alert-error')
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group border-bottom-0">
                                                        <label for="name">{{ __('dashboard.name') }}</label>
                                                        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group border-bottom-0">
                                                        <label for="email">{{ __('dashboard.email') }}</label>
                                                        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group border-bottom-0">
                                                        <label for="password">{{ __('dashboard.password') }}</label>
                                                        <input type="password" id="password" class="form-control" name="password" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group border-bottom-0">
                                                        <label for="role_id">{{ __('dashboard.role') }}</label>
                                                        <select class="form-control" name="role_id" id="role_id" required>
                                                            <option value="" disabled selected>-- {{ __('dashboard.role') }} --</option>
                                                            @foreach($roles as $role)
                                                                <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>{{ $role->role }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group border-bottom-0">
                                                        <label for="status">{{ __('dashboard.status') }}</label>
                                                        <select class="form-control" name="status" id="status" required>
                                                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>{{ __('dashboard.active') }}</option>
                                                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>{{ __('dashboard.inactive') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-actions text-right">
                                            <button type="button" class="btn btn-warning mr-1" onclick="window.history.back()">
                                                <i class="ft-x"></i> {{ __('dashboard.cancel') }}
                                            </button>
                                            <button type="submit" class="btn btn-primary btn-glow">
                                                <i class="la la-check-square-o"></i> {{ __('dashboard.save') }}
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

@push('css')
<style>
    .form-section { border-bottom: 1px solid #d1d4d7; padding-bottom: 10px; margin-bottom: 20px; font-weight: 700; color: #1e9ff2; }
    .form-actions { border-top: 1px solid #d1d4d7; padding-top: 20px; margin-top: 20px; }
</style>
@endpush
