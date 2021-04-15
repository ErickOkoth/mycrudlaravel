@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">View all Nurses</div>

					<div class="card-body">
						@include('includes.message')
						<table class="table table-bordered table-hover">
							<thead>
							<th>Id</th>
							<th>Name</th>
							<th>Username</th>
							<th>Contact</th>
							<th>Number</th>
							<th></th>
							<th></th>
							</thead>
							<tbody>
							
							@foreach($nurses as $nurse)
								<tr>
									<td>{{$nurse->id}}</td>
									<td>{{$nurse->name}}</td>
									<td>{{$nurse->username}}</td>
									<td>{{$nurse->contact}}</td>
									<td>{{$nurse->number}}</td>
									
									<td>
										<a class="btb btn-primary btn-sm" href="{{route('edit',$nurse->id)}}">Edit</a>
										</td>
										<td>
										<a class="btb btn-danger btn-sm" href="{{route('delete',$nurse->id)}}">Delete</a>
										</td>
									
								</tr>
							@endforeach
							</tbody>
						</table>


					</div>
				</div>
@endsection