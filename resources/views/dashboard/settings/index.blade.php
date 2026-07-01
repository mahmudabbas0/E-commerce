@extends('layouts.dashboard.app')

@section('title', __('dashboard.site_settings'))

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{ __('dashboard.site_settings') }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">{{ __('dashboard.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('dashboard.site_settings') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">

            @include('dashboard.includes.alert-success')
            @include('dashboard.includes.alert-danger')
            @include('dashboard.includes.validation-errors')
            @if(session('success'))
                <div class="alert alert-success alert-dismissible mb-2" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form class="form settings-form" action="{{ route('dashboard.settings.update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row match-height">
                    {{-- Site Identity --}}
                    <div class="col-xl-8 col-lg-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-0">
                                <h4 class="card-title mb-0">
                                    <i class="la la-info-circle info mr-1"></i> {{ __('dashboard.site_identity') }}
                                </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    {{-- Language Tabs --}}
                                    <ul class="nav nav-tabs nav-top-border no-hover-bg mb-2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="site-ar-tab" data-toggle="tab" href="#site-ar" role="tab" aria-controls="site-ar" aria-selected="true">
                                                <i class="flag-icon flag-icon-sy mr-1"></i> {{ __('dashboard.arabic') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="site-en-tab" data-toggle="tab" href="#site-en" role="tab" aria-controls="site-en" aria-selected="false">
                                                <i class="flag-icon flag-icon-gb mr-1"></i> {{ __('dashboard.english') }}
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content px-1 pt-1">
                                        {{-- Arabic Tab --}}
                                        <div class="tab-pane active" id="site-ar" role="tabpanel" aria-labelledby="site-ar-tab">
                                            <div class="form-group">
                                                <label for="site_name_ar">{{ __('dashboard.site_name') }}</label>
                                                <input type="text" id="site_name_ar" name="site_name[ar]" class="form-control" value="{{ old('site_name.ar', $settings->getTranslation('site_name', 'ar')) }}" placeholder="{{ __('dashboard.site_name') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="site_desc_ar">{{ __('dashboard.site_desc') }}</label>
                                                <textarea id="site_desc_ar" name="site_desc[ar]" class="form-control" rows="2" placeholder="{{ __('dashboard.site_desc') }}">{{ old('site_desc.ar', $settings->getTranslation('site_desc', 'ar')) }}</textarea>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="site_address_ar">{{ __('dashboard.site_address') }}</label>
                                                <textarea id="site_address_ar" name="site_address[ar]" class="form-control" rows="2" placeholder="{{ __('dashboard.site_address') }}">{{ old('site_address.ar', $settings->getTranslation('site_address', 'ar')) }}</textarea>
                                            </div>
                                        </div>

                                        {{-- English Tab --}}
                                        <div class="tab-pane" id="site-en" role="tabpanel" aria-labelledby="site-en-tab">
                                            <div class="form-group">
                                                <label for="site_name_en">{{ __('dashboard.site_name') }}</label>
                                                <input type="text" id="site_name_en" name="site_name[en]" class="form-control" value="{{ old('site_name.en', $settings->getTranslation('site_name', 'en')) }}" placeholder="{{ __('dashboard.site_name') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="site_desc_en">{{ __('dashboard.site_desc') }}</label>
                                                <textarea id="site_desc_en" name="site_desc[en]" class="form-control" rows="2" placeholder="{{ __('dashboard.site_desc') }}">{{ old('site_desc.en', $settings->getTranslation('site_desc', 'en')) }}</textarea>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="site_address_en">{{ __('dashboard.site_address') }}</label>
                                                <textarea id="site_address_en" name="site_address[en]" class="form-control" rows="2" placeholder="{{ __('dashboard.site_address') }}">{{ old('site_address.en', $settings->getTranslation('site_address', 'en')) }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-3" style="border-top: 1px solid #f0f0f0;">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="site_email">{{ __('dashboard.site_email') }}</label>
                                                <input type="email" id="site_email" name="site_email" class="form-control" value="{{ old('site_email', $settings->site_email) }}" placeholder="info@example.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email_support">{{ __('dashboard.email_support') }}</label>
                                                <input type="email" id="email_support" name="email_support" class="form-control" value="{{ old('email_support', $settings->email_support) }}" placeholder="support@example.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="site_phone">{{ __('dashboard.site_phone') }}</label>
                                                <input type="text" id="site_phone" name="site_phone" class="form-control" value="{{ old('site_phone', $settings->site_phone) }}" placeholder="+963 999 999 999">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="whatsapp_number">{{ __('dashboard.whatsapp_number') }}</label>
                                                <input type="text" id="whatsapp_number" name="whatsapp_number" class="form-control" value="{{ old('whatsapp_number', $settings->whatsapp_number) }}" placeholder="+963 999 999 999">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="site_logo">{{ __('dashboard.site_logo') }}</label>
                                                <input type="file" id="single_logo_image_edit" name="logo" class="form-control-file">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="site_favicon">{{ __('dashboard.site_favicon') }}</label>
                                                <input type="file" id="single_favicon_image_edit" name="favicon" class="form-control-file">
                                                <div class="mt-1">
                                                    <img src="{{ $settings->favicon_url }}" alt="favicon" class="settings-preview-img favicon-preview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Site Status --}}
                    <div class="col-xl-4 col-lg-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-0">
                                <h4 class="card-title mb-0">
                                    <i class="la la-power-off warning mr-1"></i> {{ __('dashboard.site_status') }}
                                </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>{{ __('dashboard.maintenance_mode') }}</label>
                                        <div class="d-block">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="hidden" name="maintenance_mode" value="0">
                                                <input type="checkbox" class="custom-control-input" id="maintenance_mode" name="maintenance_mode" value="1" {{ old('maintenance_mode', $settings->maintenance_mode) ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="maintenance_mode">{{ __('dashboard.active') }}</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Maintenance Message Tabs --}}
                                    <div class="form-group">
                                        <label>{{ __('dashboard.maintenance_message') }}</label>
                                        <ul class="nav nav-tabs nav-top-border no-hover-bg mb-1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="maintenance-ar-tab" data-toggle="tab" href="#maintenance-ar" role="tab">
                                                    <i class="flag-icon flag-icon-sy mr-1"></i> {{ __('dashboard.arabic') }}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="maintenance-en-tab" data-toggle="tab" href="#maintenance-en" role="tab">
                                                    <i class="flag-icon flag-icon-gb mr-1"></i> {{ __('dashboard.english') }}
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="maintenance-ar" role="tabpanel">
                                                <textarea name="maintenance_message[ar]" class="form-control" rows="3" placeholder="{{ __('dashboard.maintenance_message') }}">{{ old('maintenance_message.ar', $settings->getTranslation('maintenance_message', 'ar')) }}</textarea>
                                            </div>
                                            <div class="tab-pane" id="maintenance-en" role="tabpanel">
                                                <textarea name="maintenance_message[en]" class="form-control" rows="3" placeholder="{{ __('dashboard.maintenance_message') }}">{{ old('maintenance_message.en', $settings->getTranslation('maintenance_message', 'en')) }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <label>{{ __('dashboard.registration_status') }}</label>
                                        <div class="d-block">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="hidden" name="registration_status" value="0">
                                                <input type="checkbox" class="custom-control-input" id="registration_status" name="registration_status" value="1" {{ old('registration_status', $settings->registration_status) ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="registration_status">{{ __('dashboard.allow_registration') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row match-height">
                    {{-- SEO Settings --}}
                    <div class="col-xl-6 col-lg-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-0">
                                <h4 class="card-title mb-0">
                                    <i class="la la-search success mr-1"></i> {{ __('dashboard.seo_settings') }}
                                </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="meta_title">{{ __('dashboard.meta_title') }}</label>
                                        <input type="text" id="meta_title" name="meta_title[ar]" class="form-control mb-2" value="{{ old('meta_title.ar', $settings->getTranslation('meta_title', 'ar')) }}" placeholder="{{ __('dashboard.meta_title') }} ({{ __('dashboard.arabic') }})">
                                        <input type="text" name="meta_title[en]" class="form-control" value="{{ old('meta_title.en', $settings->getTranslation('meta_title', 'en')) }}" placeholder="{{ __('dashboard.meta_title') }} ({{ __('dashboard.english') }})">
                                    </div>

                                    <ul class="nav nav-tabs nav-top-border no-hover-bg mb-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="seo-ar-tab" data-toggle="tab" href="#seo-ar" role="tab">
                                                <i class="flag-icon flag-icon-sy mr-1"></i> {{ __('dashboard.arabic') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="seo-en-tab" data-toggle="tab" href="#seo-en" role="tab">
                                                <i class="flag-icon flag-icon-gb mr-1"></i> {{ __('dashboard.english') }}
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="seo-ar" role="tabpanel">
                                            <div class="form-group">
                                                <label for="meta_description_ar">{{ __('dashboard.meta_description') }}</label>
                                                <textarea id="meta_description_ar" name="meta_description[ar]" class="form-control" rows="3" placeholder="{{ __('dashboard.meta_description') }}">{{ old('meta_description.ar', $settings->getTranslation('meta_description', 'ar')) }}</textarea>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="meta_keywords_ar">{{ __('dashboard.meta_keywords') }}</label>
                                                <input type="text" id="meta_keywords_ar" name="meta_keywords[ar]" class="form-control" value="{{ old('meta_keywords.ar', $settings->getTranslation('meta_keywords', 'ar')) }}" placeholder="{{ __('dashboard.meta_keywords') }}">
                                                <small class="text-muted">{{ __('dashboard.separate_with_commas') }}</small>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="seo-en" role="tabpanel">
                                            <div class="form-group">
                                                <label for="meta_description_en">{{ __('dashboard.meta_description') }}</label>
                                                <textarea id="meta_description_en" name="meta_description[en]" class="form-control" rows="3" placeholder="{{ __('dashboard.meta_description') }}">{{ old('meta_description.en', $settings->getTranslation('meta_description', 'en')) }}</textarea>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="meta_keywords_en">{{ __('dashboard.meta_keywords') }}</label>
                                                <input type="text" id="meta_keywords_en" name="meta_keywords[en]" class="form-control" value="{{ old('meta_keywords.en', $settings->getTranslation('meta_keywords', 'en')) }}" placeholder="{{ __('dashboard.meta_keywords') }}">
                                                <small class="text-muted">{{ __('dashboard.separate_with_commas') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Social Media --}}
                    <div class="col-xl-6 col-lg-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-0">
                                <h4 class="card-title mb-0">
                                    <i class="la la-share-alt info mr-1"></i> {{ __('dashboard.social_media') }}
                                </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="facebook_url">{{ __('dashboard.facebook_url') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-facebook"></i></span>
                                            </div>
                                            <input type="url" id="facebook_url" name="facebook_url" class="form-control" value="{{ old('facebook_url', $settings->facebook_url) }}" placeholder="https://facebook.com/...">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="twitter_url">{{ __('dashboard.twitter_url') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-twitter"></i></span>
                                            </div>
                                            <input type="url" id="twitter_url" name="twitter_url" class="form-control" value="{{ old('twitter_url', $settings->twitter_url) }}" placeholder="https://twitter.com/...">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="youtube_url">{{ __('dashboard.youtube_url') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-youtube"></i></span>
                                            </div>
                                            <input type="url" id="youtube_url" name="youtube_url" class="form-control" value="{{ old('youtube_url', $settings->youtube_url) }}" placeholder="https://youtube.com/...">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="instagram_url">{{ __('dashboard.instagram_url') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-instagram"></i></span>
                                            </div>
                                            <input type="url" id="instagram_url" name="instagram_url" class="form-control" value="{{ old('instagram_url', $settings->instagram_url) }}" placeholder="https://instagram.com/...">
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="promotion_video_url">{{ __('dashboard.promotion_video_url') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-video-camera"></i></span>
                                            </div>
                                            <input type="url" id="promotion_video_url" name="promotion_video_url" class="form-control" value="{{ old('promotion_video_url', $settings->promotion_video_url) }}" placeholder="https://youtube.com/watch?v=...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row match-height">
                    {{-- Appearance --}}
                    <div class="col-xl-6 col-lg-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-0">
                                <h4 class="card-title mb-0">
                                    <i class="la la-paint-brush danger mr-1"></i> {{ __('dashboard.appearance') }}
                                </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="primary_color">{{ __('dashboard.primary_color') }}</label>
                                        <input type="color" id="primary_color" name="primary_color" class="form-control" value="{{ old('primary_color', $settings->primary_color) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="secondary_color">{{ __('dashboard.secondary_color') }}</label>
                                        <input type="color" id="secondary_color" name="secondary_color" class="form-control" value="{{ old('secondary_color', $settings->secondary_color) }}">
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="default_currency">{{ __('dashboard.default_currency') }}</label>
                                        <select id="default_currency" name="default_currency" class="form-control">
                                            <option value="SYP" {{ old('default_currency', $settings->default_currency) == 'SYP' ? 'selected' : '' }}>ليرة سورية (SYP)</option>
                                            <option value="USD" {{ old('default_currency', $settings->default_currency) == 'USD' ? 'selected' : '' }}>دولار أمريكي (USD)</option>
                                            <option value="EUR" {{ old('default_currency', $settings->default_currency) == 'EUR' ? 'selected' : '' }}>يورو (EUR)</option>
                                            <option value="SAR" {{ old('default_currency', $settings->default_currency) == 'SAR' ? 'selected' : '' }}>ريال سعودي (SAR)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- SMTP Settings --}}
                    <div class="col-xl-6 col-lg-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-0">
                                <h4 class="card-title mb-0">
                                    <i class="la la-envelope-o warning mr-1"></i> {{ __('dashboard.smtp_settings') }}
                                </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="smtp_host">{{ __('dashboard.smtp_host') }}</label>
                                                <input type="text" id="smtp_host" name="smtp_host" class="form-control" value="{{ old('smtp_host', $settings->smtp_host) }}" placeholder="smtp.example.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="smtp_port">{{ __('dashboard.smtp_port') }}</label>
                                                <input type="text" id="smtp_port" name="smtp_port" class="form-control" value="{{ old('smtp_port', $settings->smtp_port) }}" placeholder="587">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="smtp_username">{{ __('dashboard.smtp_username') }}</label>
                                                <input type="text" id="smtp_username" name="smtp_username" class="form-control" value="{{ old('smtp_username', $settings->smtp_username) }}" placeholder="info@example.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="smtp_password">{{ __('dashboard.smtp_password') }}</label>
                                                <input type="password" id="smtp_password" name="smtp_password" class="form-control" value="{{ old('smtp_password', $settings->smtp_password) }}" placeholder="********">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="smtp_encryption">{{ __('dashboard.smtp_encryption') }}</label>
                                        <select id="smtp_encryption" name="smtp_encryption" class="form-control">
                                            <option value="tls" {{ old('smtp_encryption', $settings->smtp_encryption) == 'tls' ? 'selected' : '' }}>TLS</option>
                                            <option value="ssl" {{ old('smtp_encryption', $settings->smtp_encryption) == 'ssl' ? 'selected' : '' }}>SSL</option>
                                            <option value="" {{ old('smtp_encryption', $settings->smtp_encryption) == '' ? 'selected' : '' }}>{{ __('dashboard.none') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row match-height">
                    {{-- Footer / Copyright --}}
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-0">
                                <h4 class="card-title mb-0">
                                    <i class="la la-copyright warning mr-1"></i> {{ __('dashboard.site_copyright') }}
                                </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="form-group mb-0">
                                        <label for="site_copyright">{{ __('dashboard.site_copyright') }}</label>
                                        <textarea id="site_copyright" name="site_copyright" class="form-control" rows="2" placeholder="{{ __('dashboard.site_copyright') }}">{{ old('site_copyright', $settings->site_copyright) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="form-actions text-right">
                                    <button type="reset" class="btn btn-warning mr-1">
                                        <i class="ft-x"></i> {{ __('dashboard.cancel') }}
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> {{ __('dashboard.save_changes') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .settings-form .card {
        border-radius: 8px;
        transition: box-shadow 0.3s ease;
    }
    .settings-form .card:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    }
    .settings-form .card-header {
        padding: 1.2rem 1.5rem;
        border-bottom: 1px solid #f0f0f0;
    }
    .settings-form .card-header .card-title {
        font-size: 1.1rem;
        font-weight: 600;
    }
    .settings-form .card-body {
        padding: 1.5rem;
    }
    .settings-form .form-group label {
        font-weight: 600;
        color: #555;
        margin-bottom: 0.5rem;
    }
    .settings-form .form-control {
        border-radius: 5px;
        border-color: #e3e3e3;
    }
    .settings-form .form-control:focus {
        border-color: #1e9ff2;
        box-shadow: 0 0 0 0.2rem rgba(30, 159, 242, 0.15);
    }
    .settings-form .input-group-text {
        background-color: #f8f9fa;
        border-color: #e3e3e3;
        min-width: 42px;
        justify-content: center;
    }
    .settings-form .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #1e9ff2;
        border-color: #1e9ff2;
    }
    .settings-form .form-actions .btn {
        padding: 0.6rem 1.5rem;
        border-radius: 5px;
    }
    .settings-preview-img {
        max-height: 60px;
        padding: 5px;
        border: 1px dashed #ddd;
        border-radius: 5px;
        background-color: #fafafa;
    }
    .settings-preview-img.favicon-preview {
        max-height: 40px;
    }
    input[type="color"].form-control {
        height: 42px;
        padding: 3px;
    }

    /* Custom language tabs styling */
    .settings-form .nav-tabs {
        border-bottom: 1px solid #e3e3e3;
    }
    .settings-form .nav-tabs .nav-link {
        border: none;
        color: #888;
        font-weight: 600;
        padding: 0.6rem 1.2rem;
        border-bottom: 2px solid transparent;
        transition: all 0.2s ease;
    }
    .settings-form .nav-tabs .nav-link:hover {
        color: #555;
        border-bottom-color: #ddd;
    }
    .settings-form .nav-tabs .nav-link.active {
        color: #1e9ff2;
        background-color: transparent;
        border-bottom-color: #1e9ff2;
    }
    .settings-form .tab-content {
        padding-top: 1rem;
    }
</style>
@endpush
@push('scripts')
    <script>
        var lang = "{{ config('app.locale') }}";
        $(function () {
            $('#single_logo_image_edit').fileinput({
                theme: 'fa5',
                allowedFileTypes: ['image'],
                language: lang,
                maxFileCount: 1,
                enableResumableUpload: false,
                showUpload: false,
                initialPreviewAsData:true,
                initialPreview: [
                    "{{ asset($settings->logo_url) }}"
                ],
            });

        });
        $(function () {
            $('#single_favicon_image_edit').fileinput({
                theme: 'fa5',
                allowedFileTypes: ['image'],
                language: lang,
                maxFileCount: 1,
                enableResumableUpload: false,
                showUpload: false,
                initialPreviewAsData:true,
                initialPreview: [
                    "{{ asset($settings->favicon_url) }}"
                ],
            });

        });
    </script>
@endpush
