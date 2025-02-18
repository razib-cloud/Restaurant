
@extends('layout.erp.app')
@section('title','Create OrderDetail')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('orderdetails.index')}}">Manage</a>
<form action="{{route('orderdetails.store')}}" method ="post" enctype="multipart/form-data">
@csrf

<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
@section('script')


@endsection
