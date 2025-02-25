@extends('layout.erp.app')
@section('title', 'Create Menu')

@section('style')
<!-- You can add additional custom styles here if needed -->
@endsection

@section('page')
<a class='btn btn-success' href="{{ route('menus.index') }}">Manage Menus</a>

<form action="{{ route('menus.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" placeholder="Menu Name" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="is_active" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <select name="is_active" id="is_active" class="form-control" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection

@section('script')
<!-- Add custom scripts if needed -->
@endsection
