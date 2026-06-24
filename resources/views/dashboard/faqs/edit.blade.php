@extends('layouts.dashboard.app')

@section('title', __('dashboard.edit_faq'))

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{ __('dashboard.edit_faq') }}</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">{{ __('dashboard.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.faqs.index') }}">{{ __('dashboard.faqs') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('dashboard.edit_faq') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <section id="edit-faq">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>{{ __('dashboard.basic-info') }}</h4>
                        <hr>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <form class="form" action="{{route('dashboard.faqs.update', $faq->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                                <div class="card" id="faq-arabic">
                                    <div id="headingAr" role="tabpanel" class="card-header border-info">
                                        <a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionAr" aria-expanded="true" aria-controls="accordionAr" class="font-medium-1 info">
                                            <i class="la la-question-circle"></i> {{ __('dashboard.question_ar') }}
                                        </a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="accordionAr" role="tabpanel" aria-labelledby="headingAr" class="card-collapse collapse show" aria-expanded="true">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="position-relative has-icon-left">
                                                    <textarea id="question_ar" class="form-control" name="question[ar]" rows="2" placeholder="{{ __('dashboard.question_ar') }}">{{ old('question.ar', $faq->getTranslation('question', 'ar')) }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="la la-question-circle font-medium-3"></i>
                                                    </div>
                                                </div>
                                                @error('question.ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="position-relative has-icon-left">
                                                    <textarea id="answer_ar" class="form-control" name="answer[ar]" rows="4" placeholder="{{ __('dashboard.answer_ar') }}">{{ old('answer.ar', $faq->getTranslation('answer', 'ar')) }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="la la-file-text font-medium-3"></i>
                                                    </div>
                                                </div>
                                                @error('answer.ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card" id="faq-english">
                                    <div id="headingEn" role="tabpanel" class="card-header border-success">
                                        <a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionEn" aria-expanded="false" aria-controls="accordionEn" class="font-medium-1 success collapsed">
                                            <i class="la la-question-circle-o"></i> {{ __('dashboard.question_en') }}
                                        </a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="accordionEn" role="tabpanel" aria-labelledby="headingEn" class="card-collapse collapse" aria-expanded="false">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="position-relative has-icon-left">
                                                    <textarea id="question_en" class="form-control" name="question[en]" rows="2" placeholder="{{ __('dashboard.question_en') }}">{{ old('question.en', $faq->getTranslation('question', 'en')) }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="la la-question-circle-o font-medium-3"></i>
                                                    </div>
                                                </div>
                                                @error('question.en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="position-relative has-icon-left">
                                                    <textarea id="answer_en" class="form-control" name="answer[en]" rows="4" placeholder="{{ __('dashboard.answer_en') }}">{{ old('answer.en', $faq->getTranslation('answer', 'en')) }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="la la-file-text-o font-medium-3"></i>
                                                    </div>
                                                </div>
                                                @error('answer.en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group mb-0">
                                            <label for="status">{{ __('dashboard.status') }}</label>
                                            <div class="d-inline-block custom-control custom-checkbox ml-2">
                                                <input type="hidden" name="status" value="0">
                                                <input type="checkbox" class="custom-control-input" id="status" name="status" value="1" {{ old('status', $faq->status) == '1' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="status">{{ __('dashboard.active') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions text-center">
                                <a href="{{ route('dashboard.faqs.index') }}" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> {{ __('dashboard.cancel') }}
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> {{ __('dashboard.save') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
