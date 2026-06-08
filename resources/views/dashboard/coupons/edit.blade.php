@extends('layouts.dashboard.app')

@section('title', __('dashboard.edit_coupon'))

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/coupons-custom.css') }}">
@endpush

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{ __('dashboard.edit_coupon') }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">{{ __('dashboard.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.coupons.index') }}">{{ __('dashboard.coupons') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('dashboard.edit_coupon') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            @include('dashboard.includes.validation-errors')
            <section id="basic-form-layouts">
                <div class="row justify-content-md-center">

                    <!-- بطاقة موحدة بالكامل بنفس نمط بقية صفحات الإدارة ولكن مهيأة للكوبون -->
                    <div class="col-md-11 col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">{{ __('dashboard.basic-info') }}</h4>
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
                                <div class="card-body">
                                    <form class="form" action="{{ route('dashboard.coupons.update', $coupon->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-body">
                                            <div class="row align-items-center">

                                                <!-- الجانب الأيمن (المدخلات الخاصة بالكوبون) -->
                                                <div class="col-md-7">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="code">{{ __('dashboard.coupon_code') }}</label>
                                                                <div class="input-group">
                                                                    <input type="text" id="code" class="form-control" name="code" value="{{ old('code', $coupon->code) }}" placeholder="{{ __('dashboard.code_placeholder') }}" style="text-transform: uppercase;">
                                                                    <div class="input-group-append">
                                                                        <button type="button" class="btn btn-generate" id="btn-generate-code">
                                                                            <i class="la la-magic"></i> {{ __('dashboard.generate_code') }}
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                @error('code')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="discount_percentage">{{ __('dashboard.discount_percentage') }}</label>
                                                                <div class="input-group">
                                                                    <input type="number" id="discount_percentage" class="form-control" name="discount_percentage" min="1" max="100" value="{{ old('discount_percentage', $coupon->discount_percentage) }}">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">%</span>
                                                                    </div>
                                                                </div>
                                                                @error('discount_percentage')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="start_date">{{ __('dashboard.start_date') }}</label>
                                                                <input type="date" id="start_date" class="form-control" name="start_date" value="{{ old('start_date', $coupon->start_date) }}">
                                                                @error('start_date')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="end_date">{{ __('dashboard.end_date') }}</label>
                                                                <input type="date" id="end_date" class="form-control" name="end_date" value="{{ old('end_date', $coupon->end_date) }}">
                                                                @error('end_date')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="limit">{{ __('dashboard.limit') }}</label>
                                                                <input type="number" id="limit" class="form-control" name="limit" min="1" value="{{ old('limit', $coupon->limit) }}">
                                                                @error('limit')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="is_active">{{ __('dashboard.status') }}</label>
                                                                <div class="input-group">
                                                                    <div class="d-inline-block custom-control custom-checkbox mt-1">
                                                                        <input type="hidden" name="is_active" value="0">
                                                                        <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', $coupon->is_active) == '1' ? 'checked' : '' }}>
                                                                        <label class="custom-control-label" for="is_active">{{ __('dashboard.active') }}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- الجانب الأيسر (كرت المعاينة التفاعلي المميز للكوبون) -->
                                                <div class="col-md-5 d-flex align-items-center justify-content-center">
                                                    <div class="coupon-preview-container">
                                                        <div class="coupon-ticket clearfix">
                                                            <div class="coupon-main-content">
                                                                <div class="coupon-preview-label">{{ __('dashboard.our_store_coupon') }}</div>
                                                                <div class="coupon-preview-code-wrapper">
                                                                    <span class="coupon-preview-code" id="preview-code">{{ $coupon->code }}</span>
                                                                </div>
                                                                <div class="coupon-preview-dates">
                                                                    <i class="la la-calendar"></i>
                                                                    <span>{{ __('dashboard.valid_from') }} </span><strong id="preview-start">{{ $coupon->start_date }}</strong><br>
                                                                    <span> {{ __('dashboard.valid_to') }} </span><strong id="preview-end">{{ $coupon->end_date }}</strong>
                                                                </div>
                                                            </div>
                                                            <div class="coupon-divider"></div>
                                                            <div class="coupon-side-content">
                                                                <div class="coupon-preview-label">{{ __('dashboard.discount_value') }}</div>
                                                                <div class="coupon-preview-value" id="preview-value">{{ $coupon->discount_percentage }}%</div>
                                                                <span class="coupon-preview-badge" id="preview-limit">{{ __('dashboard.limit_label') }} {{ $coupon->limit }} {{ __('dashboard.times') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <input type="hidden" id="id" class="form-control" name="id" value="{{ old('id', $coupon->id) }}">

                                        <!-- أزرار العمليات الموحدة للوحة التحكم -->
                                        <div class="form-actions text-right">
                                            <button type="button" class="btn btn-warning mr-1" onclick="window.history.back()">
                                                <i class="ft-x"></i> {{ __('dashboard.cancel') }}
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> {{ __('dashboard.update') }}
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

@push('scripts')
<script>
    $(document).ready(function() {
        // 1. أداة المعاينة الحية المذهلة للكوبون
        function updateCouponPreview() {
            var code = $('#code').val().trim().toUpperCase();
            var discount = $('#discount_percentage').val();
            var start = $('#start_date').val();
            var end = $('#end_date').val();
            var limit = $('#limit').val();

            // تحديث كود الكوبون
            if (code === '') {
                $('#preview-code').text('{{ $coupon->code }}').css('opacity', '0.5');
            } else {
                $('#preview-code').text(code).css('opacity', '1');
            }

            // تحديث نسبة الخصم
            if (discount === '' || discount < 1) {
                $('#preview-value').text('0%');
            } else {
                $('#preview-value').text(discount + '%');
            }

            // تحديث التواريخ
            if (start !== '') $('#preview-start').text(start);
            if (end !== '') $('#preview-end').text(end);

            // تحديث الحد الأقصى
            if (limit === '' || limit < 1) {
                $('#preview-limit').text("{{ __('dashboard.no_usage_limit') }}");
            } else {
                $('#preview-limit').text("{{ __('dashboard.limit_label') }} " + limit + " {{ __('dashboard.times') }}");
            }
        }

        // الاستماع للتغييرات لتحديث المعاينة فورياً
        $('#code, #discount_percentage, #start_date, #end_date, #limit').on('input change keyup', function() {
            updateCouponPreview();
        });

        // تشغيل أولي للتحديث
        updateCouponPreview();

        // 2. توليد الكود عشوائياً بشكل تفاعلي وممتاز (WOW interaction)
        $('#btn-generate-code').on('click', function() {
            var prefixes = ['SAVE', 'GET', 'OFF', 'DEAL', 'EID', 'GIFT'];
            var randomPrefix = prefixes[Math.floor(Math.random() * prefixes.length)];
            var randomNumber = Math.floor(10 + Math.random() * 90); // رقم من رقمين
            var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

            var targetInput = $('#code');

            // تأثير آلة الحظ
            var counter = 0;
            var interval = setInterval(function() {
                var tempCode = '';
                for (var i = 0; i < 4; i++) {
                    tempCode += chars.charAt(Math.floor(Math.random() * chars.length));
                }
                targetInput.val(randomPrefix + randomNumber + '-' + tempCode);
                updateCouponPreview();
                counter++;

                if (counter > 8) {
                    clearInterval(interval);
                    // الكود النهائي المستقر
                    var finalSuffix = '';
                    for (var i = 0; i < 4; i++) {
                        finalSuffix += chars.charAt(Math.floor(Math.random() * chars.length));
                    }
                    var finalCode = randomPrefix + randomNumber + '-' + finalSuffix;
                    targetInput.val(finalCode);
                    updateCouponPreview();

                    // ومضة خفيفة للفت الأنظار
                    $('#preview-code').addClass('animated pulse').css('color', '#ffd700');
                    setTimeout(function() {
                        $('#preview-code').removeClass('animated pulse').css('color', '#fff');
                    }, 500);
                }
            }, 60);
        });
    });
</script>
@endpush
