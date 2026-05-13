<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/dashboard')}}/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('assets/dashboard')}}/js/core/app-menu.js" type="text/javascript"></script>
<script src="{{asset('assets/dashboard')}}/js/core/app.js" type="text/javascript"></script>
<script src="{{asset('assets/dashboard')}}/js/scripts/customizer.js" type="text/javascript"></script>
<script src="{{asset('vendor/fileinput/js/fileinput.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/fileinput/themes/fa5/theme.min.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/themes/fa5/theme.min.js"></script>

@if(config('app.locale') == "ar")
    <script src="{{asset('vendor/fileinput/js/locales/LANG.js')}}" type="text/javascript"></script>>
    <script src="{{asset('vendor/fileinput/js/locales/ar.js')}}" type="text/javascript"></script>>
@endif
<!-- END MODERN JS-->
<!-- END PAGE LEVEL JS-->
<script>
    var lang = "{{ config('app.locale') }}";
    $(function () {
        $('#single_image').fileinput({
            theme: 'fa5',
            allowedFileTypes: ['image'],
            language: lang,
            maxFileCount: 1,
            enableResumableUpload: false,
            showUpload: false,
        });

    });
</script>

@stack('scripts')

