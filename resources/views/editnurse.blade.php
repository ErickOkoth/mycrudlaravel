@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">Edit Nurses</div>

					<div class="card-body">
						@include('includes.message')
						<form method="post" action="{{route('update',$nurse->id)}}">
							@csrf
							<div class="form-group">
								<label for="name">Name:</label>
								<input type="text" class="form-control" id="name" name="name" value="{{$nurse->name}}" required>
							</div>
							<div class="form-group">
								<label for="pwd">Username:</label>
								<input type="text" class="form-control" id="username" name="username" value="{{$nurse->username}}" required>
							</div>
							<div class="form-group">
								<label for="pwd">Contact:</label>
								<input type="number" class="form-control" id="contact" name="contact" value="{{$nurse->contact}}" required>
							</div>
							<div class="form-group">
								<label for="number">Employee number:</label>
								<input type="text" class="form-control" id="number" name="number" value="{{$nurse->contact}}" required>
							</div>
							<div class="form-group form-check">
								<label class="form-check-label">

								</label>
							</div>
							<button type="submit" class="btn btn-primary btn-sm">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection