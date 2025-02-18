
@extends('layout.erp.app')
@section('title','Manage OrderDetail')
@section('style')


@endsection
@section('page')
<a href="{{route('orderdetails.create')}}">New OrderDetail</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($orderdetails as $orderdetail)
		<tr>

			<td>
			<form action = "{{route('orderdetails.destroy',$orderdetail->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('orderdetails.show',$orderdetail->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('orderdetails.edit',$orderdetail->id)}}"> Edit </a>
				@method('DELETE')
				@csrf
				<input type = "submit" class="btn btn-danger" name = "delete" value = "Delete" />
			</form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection
@section('script')


@endsection
