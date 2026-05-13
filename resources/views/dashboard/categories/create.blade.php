@extends('layouts.dashboard.app')

@section('title', __('dashboard.add_category'))

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{ __('dashboard.add_category') }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">{{ __('dashboard.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.categories.index') }}">{{ __('dashboard.categories') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('dashboard.add_category') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
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
                                    <form class="form" action="{{route('dashboard.categories.store')}}" method="post">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name_ar">{{ __('dashboard.name_ar') }}</label>
                                                        <input type="text" id="name_ar" class="form-control" name="name[ar]" value="{{ old('name.ar') }}">
                                                        @error('name.ar')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name_en">{{ __('dashboard.name_en') }}</label>
                                                        <input type="text" id="name_en" class="form-control" name="name[en]" value="{{ old('name.en') }}">
                                                        @error('name.en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="parent">{{ __('dashboard.parent_category') }}</label>
                                                        <select name="parent" class="form-control select2">
                                                            <option value="">{{ __('dashboard.main_category') }}</option>
                                                            @foreach($categories as $cat)
                                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('parent')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">{{ __('dashboard.status') }}</label>
                                                <div class="input-group">
                                                    <div class="d-inline-block custom-control custom-checkbox">
                                                        <input type="hidden" name="status" value="0">
                                                        <input type="checkbox" class="custom-control-input" id="status" name="status" value="1" {{ old('status', '1') == '1' ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="status">{{ __('dashboard.active') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions text-right">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> {{ __('dashboard.cancel') }}
                                            </button>
                                            <button type="submit" class="btn btn-primary">
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
