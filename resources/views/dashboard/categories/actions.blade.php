<div class="btn-group" role="group">
    <a href="{{route('dashboard.categories.edit', $category->id)}}" class="btn btn-outline-primary btn-sm" title="{{ __('dashboard.edit') }}"><i class="ft-edit"></i></a>
    <a href="{{route('dashboard.categories.status', $category->id)}}" class="btn btn-outline-warning btn-sm" title="{{ __('dashboard.change_status') }}">
        <i class="ft-refresh-cw"></i>
    </a>
    <button type="button" class="btn btn-outline-danger btn-sm"
            data-toggle="modal"
            data-target="#deleteModal"
            data-action="{{route('dashboard.categories.destroy', $category->id)}}"
            title="{{ __('dashboard.delete') }}">
        <i class="ft-trash-2"></i>
    </button>
</div>
