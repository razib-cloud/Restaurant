@extends('layout.erp.app')
@section('title', 'Edit Menu')

@section('style')
<!-- You can add additional custom styles here if needed -->
@endsection

@section('page')
<a class='btn btn-success' href="{{ route('menus.index') }}">Manage Menus</a>

<form action="{{ route('menus.update', $menu) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" value="{{ $menu->name }}" id="name" placeholder="Menu Name">
        </div>
    </div>

    <div class="row mb-3">
        <label for="is_active" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <select name="is_active" id="is_active" class="form-control">
                <option value="1" {{ $menu->is_active == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $menu->is_active == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Save Changes</button>
</form>
@endsection

@section('script')
<!-- Add custom scripts if needed -->
@endsection
