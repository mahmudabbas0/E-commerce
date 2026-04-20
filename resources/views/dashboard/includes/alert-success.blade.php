@if (session('status'))
    <div class="alert alert-success mt-2" role="alert">
        {{ session('status') }}
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success mt-2" role="alert">
        {{ session('success') }}
    </div>
@endif
