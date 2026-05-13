@if (session('error'))
    <div class="alert alert-danger mb-2" role="alert">
        <i class="ft-alert-circle mr-1"></i> {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger mb-2" role="alert">
        <ul class="mb-0 list-unstyled">
            @foreach ($errors->all() as $error)
                <li><i class="ft-alert-circle mr-1"></i> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
