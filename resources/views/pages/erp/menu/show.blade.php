@extends('layout.erp.app')
@section('title', 'Show Menu')

@section('style')
<!-- You can add additional custom styles here if needed -->
@endsection

@section('page')
<a class='btn btn-success' href="{{ route('menus.index') }}">Manage Menus</a>

<table class='table table-striped text-nowrap'>
    <tbody>
        <tr>
            <th>Id</th>
            <td>{{ $menu->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $menu->name }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $menu->is_active ? 'Active' : 'Inactive' }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $menu->created_at->format('Y-m-d H:i:s') }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $menu->updated_at->format('Y-m-d H:i:s') }}</td>
        </tr>
    </tbody>
</table>

@endsection

@section('script')
<!-- Add custom scripts if needed -->
@endsection
