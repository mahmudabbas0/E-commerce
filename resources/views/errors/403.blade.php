@extends('layouts.dashboard.auth')

@section('title', '403 Forbidden')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="col-sm-5 offset-sm-1 col-md-6 offset-md-3 col-lg-4 offset-lg-4 box-shadow-2">
                    <div class="card border-grey border-lighten-3 px-2 my-0 row">
                        <div class="card-header no-border pb-1">
                            <div class="card-body">
                                <h2 class="error-code text-center mb-2">403</h2>
                                <h4 class="text-uppercase text-center">Access Denied/Forbidden !</h4>
                            </div>
                        </div>
                        <div class="card-content px-2">
                            <div class="row py-2">
                                <div class="col-12">
                                    <a href="{{route('dashboard.welcome')}}" class="btn btn-primary btn-block btn-lg"><i class="la la-home"></i> Back to Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
