@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Add Doctors</div>

					<div class="card-body">
						@include('includes.message')
						<form method="post" action="{{route('postdoctor')}}">
							@csrf
							<div class="form-group">
								<label for="uname">Name:</label>
								<input type="text" class="form-control" id="uname" placeholder="Enter your full name" name="name" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="form-group">
								<label for="pwd">Username:</label>
								<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="form-group">
								<label for="pwd">Contacts:</label>
								<input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="contact" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="form-group form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="remember" required> I agree on terms and conditions.
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Check this checkbox to continue.</div>
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
