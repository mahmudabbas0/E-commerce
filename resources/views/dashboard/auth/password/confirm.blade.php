@extends('layouts.dashboard.auth')

@section('title', __('auth.confirm_otp'))

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <img src="{{asset('assets/dashboard')}}/images/logo/logo-dark.png"
                                             alt="branding logo">
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                        <span>{{__('auth.confirm_otp')}}</span>
                                    </h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        @include('dashboard.includes.alert-danger')
                                        @include('dashboard.includes.alert-success')

                                        <p class="card-text text-center text-muted mb-2">
                                            {{ __('auth.enter_otp_description', ['email' => $email ?? '...']) }}
                                        </p>
                                        <form class="form-horizontal" action="{{ route('dashboard.password.verify.post') }}"
                                              method="post" novalidate>
                                            @csrf
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="hidden" name="email" value="{{ $email }}">
                                                <input type="text" class="form-control" id="otp-code"
                                                       name="token"
                                                       placeholder="{{__('auth.otp_code')}}"
                                                       required autocomplete="one-time-code" autofocus tabindex="1">
                                                <div class="form-control-position">
                                                    <i class="ft-shield"></i>
                                                </div>
                                                @error('token')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </fieldset>

                                            <button type="submit" class="btn btn-danger btn-block btn-lg"><i
                                                    class="ft-check-circle"></i> {{__('auth.confirm_otp')}}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer border-0 text-center">
                                    <p class="text-muted">{{ __('auth.didnt_receive_otp') }} <a href="{{ route('dashboard.password.resend', $email) }}" class="card-link">{{ __('auth.resend_otp') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
