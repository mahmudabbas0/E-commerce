{{-- Delete Modal Standard --}}
<div class="modal fade text-left" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('dashboard.confirm-delete') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="delete-form" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <p>{{ __('dashboard.delete-msg') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('dashboard.cancel') }}</button>
                    <button type="submit" class="btn btn-outline-danger">{{ __('dashboard.delete') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).on('click', '[data-toggle="modal"][data-target="#deleteModal"]', function () {
        var action = $(this).data('action');
        $('#delete-form').attr('action', action);
    });
</script>
@endpush
