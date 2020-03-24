@extends('duration.parent')
@section('main')
<div>
	<a href="{{route('duration.create')}}">Add </a>
</div>
<table border="1">
	<tr>
		<th>Id</th>
		<th>Pharmacist Id</th>
		<th>Duration Start</th>
		<th>Duration End</th>
		<th>Duration Income</th>
		<th>Action</th>
		
	</tr>
	@foreach($data as $row)
	<tr>
		<td>{{$row->id}}</td>
		<td>{{$row->pharmacistsId}}</td>
		<td>{{$row->durStart}}</td>
		<td>{{$row->durEnd}}</td>
		<td>{{$row->durIncome}}</td>
		<td><a href="{{route('duration.show',$row->id)}}">Show</a>
			<a href="{{route('duration.edit',$row->id)}}">Edit</a>
			<form action="{{route('duration.destroy',$row->id)}}" method="post">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>

			</form>
		</td>
	</tr>
	@endforeach
</table>
{!!$data->links()!!}
@endsection