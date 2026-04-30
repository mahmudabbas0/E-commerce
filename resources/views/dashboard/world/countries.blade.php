@extends('layouts.dashboard.app')

@section('title', __('dashboard.countries'))

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center py-2">
                                <div class="heading-elements-left">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="close"><i class="ft-x text-muted"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize text-muted"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw text-muted"></i></a></li>
                                        <li><a data-action="collapse"><i class="ft-minus text-muted"></i></a></li>
                                    </ul>
                                </div>
                                <h4 class="card-title mb-0 font-weight-bold" style="font-size: 1.2rem;">{{ __('dashboard.countries') }}</h4>
                            </div>
                            <hr class="my-0" style="border-top: 1px solid #f0f0f0;">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard pt-1">
                                    @include('dashboard.includes.alert-success')
                                    @include('dashboard.includes.alert-error')

                                    <div class="table-responsive">
                                        <table class="table custom-table mb-0 text-center">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>{{ __('dashboard.name') }}</th>
                                                    <th>{{ __('dashboard.mobile-code') }}</th>
                                                    <th>{{ __('dashboard.governorates-count') }}</th>
                                                    <th>{{ __('dashboard.users-count') }}</th>
                                                    <th>{{ __('dashboard.status') }}</th>
                                                    <th>{{ __('dashboard.status-management') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($countries as $country)
                                                <tr>
                                                    <td class="font-weight-bold">{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <img src="https://flagcdn.com/w40/{{ strtolower($country->code) }}.png"
                                                                 width="25" class="mr-2 shadow-sm border rounded-sm"
                                                                 alt="{{ $country->code }}"
                                                                 onerror="this.src='https://flagcdn.com/w40/un.png'">
                                                            <span class="text-muted font-weight-600">{{ $country->name }}</span>
                                                        </div>
                                                    </td>
                                                    <td style="width: 200px;">
                                                        <div class="input-group input-group-sm mx-auto" style="max-width: 160px;">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0">
                                                                    <i class="la la-phone text-muted"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control border-left-0 text-center bg-light-gray"
                                                                   value="{{ $country->phone_code }}" readonly style="border-radius: 0 5px 5px 0;">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('dashboard.governorates', $country->id) }}" class="count-circle">
                                                            {{ $country->governorates_count }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="count-circle">
                                                            {{ $country->users_count }}
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="status-pill {{ $country->is_active == 1 ? 'active' : 'inactive' }}">
                                                            {{ $country->is_active == 1 ? __('dashboard.active') : __('dashboard.inactive') }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        {{-- Variable Button (Toggle Style but without Checkbox) --}}
                                                        <a href="{{ route('dashboard.countries.status', $country->id) }}"
                                                           class="variable-btn {{ $country->is_active == 1 ? 'btn-active' : 'btn-inactive' }} shadow-sm">
                                                            <div class="btn-dot"></div>
                                                            <span class="btn-text">
                                                                {{ $country->is_active == 1 ? __('dashboard.active') : __('dashboard.inactive') }}
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6" class="text-center py-3">{{ __('dashboard.no-data') }}</td>
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

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    body, .app-content { font-family: 'Cairo', sans-serif !important; }
    .custom-table thead th {
        border-top: none;
        border-bottom: 1px solid #f0f0f0;
        color: #888;
        font-weight: 600;
        text-transform: none;
        padding: 12px 8px;
    }
    .custom-table tbody td {
        padding: 12px 8px;
        vertical-align: middle;
        border-top: 1px solid #f8f9fa;
        color: #444;
    }
    .bg-light-gray { background-color: #f5f7fa !important; color: #666; }

    .count-circle {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        border: 2px solid #28d094;
        border-radius: 50%;
        color: #28d094;
        font-weight: 700;
        text-decoration: none !important;
        transition: all 0.3s ease;
    }
    .count-circle:hover { background: #28d094; color: #fff; }

    .status-pill {
        display: inline-block;
        padding: 3px 18px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        border: 1.5px solid;
    }
    .status-pill.active {
        color: #1e9ff2;
        border-color: #1e9ff2;
        background: transparent;
    }
    .status-pill.inactive {
        color: #ff4961;
        border-color: #ff4961;
        background: transparent;
    }

    /* Variable Toggle Button Style */
    .variable-btn {
        position: relative;
        display: inline-flex;
        align-items: center;
        width: 100px;
        height: 32px;
        padding: 2px 10px;
        border-radius: 30px;
        text-decoration: none !important;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        border: 1px solid #e3e3e3;
        background: #f8f9fa;
    }
    .variable-btn .btn-dot {
        position: absolute;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        left: 4px;
    }
    .variable-btn .btn-text {
        width: 100%;
        text-align: right;
        font-size: 0.75rem;
        font-weight: 700;
        transition: all 0.4s;
        color: #888;
    }

    /* Active State */
    .variable-btn.btn-active {
        background-color: #28d094;
        border-color: #28d094;
    }
    .variable-btn.btn-active .btn-dot {
        left: calc(100% - 28px);
    }
    .variable-btn.btn-active .btn-text {
        text-align: left;
        color: white;
    }

    /* Inactive State */
    .variable-btn.btn-inactive {
        background-color: #ff4961;
        border-color: #ff4961;
    }
    .variable-btn.btn-inactive .btn-text {
        color: white;
    }

    .font-weight-600 { font-weight: 600; }
    .card-header .list-inline li { margin-right: 10px; }
    .card-header .list-inline li i { font-size: 14px; }
</style>
@endpush
