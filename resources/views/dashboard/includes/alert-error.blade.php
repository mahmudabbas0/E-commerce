@if (session('error'))
    <div class="alert alert-danger mb-2" role="alert">
        {{ session('error') }}
    </div>
@endif

@if ($errors->has('error'))
    <div class="alert alert-danger mb-2" role="alert">
        {{ $errors->first('error') }}
    </div>
@endif
