@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">View all Doctors</div>

					<div class="card-body">
						@include('includes.message')
						<table class="table table-bordered table-hover">
							<thead>
							<th>Id</th>
							<th>Name</th>
							<th>Username</th>
							<th>Contact</th>
							<th></th>
							</thead>
							<tbody>
							@foreach($doctors as $doctor)
								<tr>
									<td>{{$doctor->id}}</td>
									<td>{{$doctor->name}}</td>
									<td>{{$doctor->username}}</td>
									<td>{{$doctor->contact}}</td>
									<td>
										<a class="btb btn-primary btn-sm" href="{{route('edit',$doctor->id)}}">Edit</a>
										<a class="btb btn-danger btn-sm" href="{{route('delete',$doctor->id)}}">Delete</a>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>


					</div>
	</div>
@endsection
