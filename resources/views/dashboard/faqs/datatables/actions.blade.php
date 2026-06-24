<div class="btn-group" role="group">
    <a href="{{route('dashboard.faqs.edit', $faq->id)}}" class="btn btn-outline-primary btn-sm" title="{{ __('dashboard.edit') }}"><i class="ft-edit"></i></a>
    <button type="button" class="btn btn-outline-danger btn-sm"
            data-toggle="modal"
            data-target="#deleteModal"
            data-action="{{route('dashboard.faqs.destroy', $faq->id)}}"
            title="{{ __('dashboard.delete') }}">
        <i class="ft-trash-2"></i>
    </button>
</div>
