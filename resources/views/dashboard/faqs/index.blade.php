@extends('layouts.dashboard.app')

@section('title', __('dashboard.faqs'))

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/datatables-custom.css') }}">
@endpush

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{ __('dashboard.faqs') }}</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="{{ route('dashboard.welcome') }}">{{ __('dashboard.home') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('dashboard.faqs') }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right">
                        <a href="{{ route('dashboard.faqs.create') }}"
                           class="btn btn-info round box-shadow-2 px-2" id="btn-add-faq">
                            <i class="ft-plus icon-left"></i> {{ __('dashboard.add_faq') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="content-body">
                @include('dashboard.includes.alert-success')
                @include('dashboard.includes.alert-danger')
                <section id="faq-table">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{ __('dashboard.all_faqs') }}</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
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
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">{{ __('dashboard.faqs_management_desc') }}</p>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered dynamic-table">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>{{ __('dashboard.question') }}</th>
                                                    <th>{{ __('dashboard.answer') }}</th>
                                                    <th>{{ __('dashboard.created_at') }}</th>
                                                    <th class="text-center">{{ __('dashboard.actions') }}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
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

    @include('dashboard.includes.delete-confirm')
@endsection

@push('scripts')
    <script src="{{ asset('assets/dashboard/js/datatables-custom.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.dynamic-table').DataTable({
                processing: true,
                serverSide: true,
                colReorder: true,
                layout: {
                    topStart: {
                        buttons: window.getDtButtons()
                    }
                },
                ajax: "{{ route('dashboard.faq.all') }}",
                columns: [
                    { data: 'DT_RowIndex', searchable: false, orderable: false },
                    { data: 'question', name: 'question' },
                    { data: 'answer', name: 'answer' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'actions', searchable: false, orderable: false, className: 'text-center' }
                ],
                order: [[0, "asc"]],
                language: {
                    "sProcessing": "{{ __('dashboard.dt_processing') }}",
                    "sLengthMenu": "{{ __('dashboard.dt_length_menu') }}",
                    "sZeroRecords": "{{ __('dashboard.dt_zero_records') }}",
                    "sInfo": "{{ __('dashboard.dt_info') }}",
                    "sInfoEmpty": "{{ __('dashboard.dt_info_empty') }}",
                    "sInfoFiltered": "{{ __('dashboard.dt_info_filtered') }}",
                    "sSearch": "{{ __('dashboard.dt_search') }}",
                    "oPaginate": {
                        "sFirst": "{{ __('dashboard.dt_first') }}",
                        "sPrevious": "{{ __('dashboard.dt_previous') }}",
                        "sNext": "{{ __('dashboard.dt_next') }}",
                        "sLast": "{{ __('dashboard.dt_last') }}"
                    },
                    "buttons": {
                        "colvis": "{{ __('dashboard.dt_colvis') }}",
                        "copy": "{{ __('dashboard.dt_copy') }}",
                        "print": "{{ __('dashboard.dt_print') }}",
                        "excel": "{{ __('dashboard.dt_excel') }}",
                        "pdf": "{{ __('dashboard.dt_pdf') }}",
                        "colvisRestore": "{{ __('dashboard.dt_colvis_restore') }}"
                    }
                }
            });
        });
    </script>
@endpush
