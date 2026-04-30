@extends('layouts.dashboard.app')

@section('title', __('dashboard.governorates'))

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
                                <h4 class="card-title mb-0 font-weight-bold" style="font-size: 1.2rem;">{{ __('dashboard.governorates') }}</h4>
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
                                                    <th>{{ __('dashboard.country') }}</th>
                                                    <th>{{ __('dashboard.cities-count') }}</th>
                                                    <th>{{ __('dashboard.shipping-charge') }}</th>
                                                    <th>{{ __('dashboard.status') }}</th>
                                                    <th>{{ __('dashboard.status-management') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($governorates as $governorate)
                                                <tr>
                                                    <td class="font-weight-bold">{{ $loop->iteration }}</td>
                                                    <td>
                                                        <span class="text-muted font-weight-600">{{ $governorate->name }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-flat border-info info px-2">{{ $governorate->country->name }}</span>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('dashboard.cities', $governorate->id) }}" class="count-circle">
                                                            {{ $governorate->cities_count }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <span class="mr-2 font-weight-bold text-success">
                                                                {{ $governorate->shippingCharge ? $governorate->shippingCharge->price : '0.00' }} $
                                                            </span>
                                                            {{-- Edit Shipping Charge Modal Trigger --}}
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure info" 
                                                                    onclick="openShippingModal('{{ $governorate->id }}', '{{ $governorate->name }}', '{{ $governorate->shippingCharge ? $governorate->shippingCharge->price : '0.00' }}')"
                                                                    title="{{ __('dashboard.edit') }}">
                                                                <i class="la la-edit font-medium-3"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="status-pill {{ $governorate->is_active == 1 ? 'active' : 'inactive' }}">
                                                            {{ $governorate->is_active == 1 ? __('dashboard.active') : __('dashboard.inactive') }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('dashboard.governorates.status', $governorate->id) }}" 
                                                           class="variable-btn {{ $governorate->is_active == 1 ? 'btn-active' : 'btn-inactive' }} shadow-sm">
                                                            <div class="btn-dot"></div>
                                                            <span class="btn-text">
                                                                {{ $governorate->is_active == 1 ? __('dashboard.active') : __('dashboard.inactive') }}
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="7" class="text-center py-3">{{ __('dashboard.no-data') }}</td>
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

{{-- Shipping Charge Modal --}}
<div class="modal fade text-left" id="shippingModal" tabindex="-1" role="dialog" aria-labelledby="shippingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-teal white border-0">
                <h4 class="modal-title white" id="shippingModalLabel">
                    <i class="la la-truck"></i> {{ __('dashboard.shipping-charge') }} - <span id="modalGovName"></span>
                </h4>
                <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('dashboard.shipping-charges.update-single') }}" method="POST">
                @csrf
                <input type="hidden" name="governorate_id" id="modalGovId">
                <div class="modal-body py-2">
                    <div class="form-group mb-0">
                        <label for="shipping_price" class="font-weight-bold mb-1">{{ __('dashboard.shipping-charge') }} ($)</label>
                        <div class="input-group input-group-lg shadow-sm rounded overflow-hidden">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light border-0"><i class="la la-money"></i></span>
                            </div>
                            <input type="number" name="price" id="modalGovPrice" class="form-control border-0 text-center" 
                                   step="0.01" min="0" required placeholder="0.00">
                            <div class="input-group-append">
                                <span class="input-group-text bg-white border-0">$</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 bg-light-gray">
                    <button type="button" class="btn btn-secondary btn-sm px-2" data-dismiss="modal">{{ __('dashboard.cancel') }}</button>
                    <button type="submit" class="btn btn-teal btn-sm px-3 btn-glow">
                        <i class="la la-save"></i> {{ __('dashboard.save_changes') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    body, .app-content { font-family: 'Cairo', sans-serif !important; }
    .bg-teal { background-color: #28d094 !important; }
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
    .status-pill.active { color: #1e9ff2; border-color: #1e9ff2; background: transparent; }
    .status-pill.inactive { color: #ff4961; border-color: #ff4961; background: transparent; }

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

    .variable-btn.btn-active { background-color: #28d094; border-color: #28d094; }
    .variable-btn.btn-active .btn-dot { left: calc(100% - 28px); }
    .variable-btn.btn-active .btn-text { text-align: left; color: white; }

    .variable-btn.btn-inactive { background-color: #ff4961; border-color: #ff4961; }
    .variable-btn.btn-inactive .btn-text { color: white; }

    .btn-teal { background-color: #28d094 !important; color: white !important; }
    .btn-glow.btn-teal { box-shadow: 0 0 12px rgba(40, 208, 148, 0.4); }
    .bg-light-gray { background-color: #f5f7fa !important; }
</style>
@endpush

@push('scripts')
<script>
    function openShippingModal(id, name, price) {
        $('#modalGovId').val(id);
        $('#modalGovName').text(name);
        $('#modalGovPrice').val(price);
        $('#shippingModal').modal('show');
    }
</script>
@endpush
