@extends('main')

@section('title', '| Exercise Page')

@section('content')
@if (Session::has('success'))

		<div class="alert alert-success" role="alert">
		<strong>Success:</strong> {{ Session::get('success') }}
		</div>
@endif



@if (count($errors) > 0)
	<div class="alert alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div> 					
@endif
	<div class="row">
		<div class="col-md-12">	
			<h1 style="text-align: center; color: skyblue;">Exercise</h1>
			@if($count == 0)
			<div class="text-center">
			<p class="lead">You dont have any data yet!</p>
				<a href="{{ route('screen4.create') }}" class="btn btn-info">Create</a>
			</div>
		</div>
	</div>

	@else
	
	<div class="text-center">
	<h1>You have data!</h1>
	<p class="lead">
		Want to 

	{{-- <a href="{{ route('screen2.edit', $screens->id) }}">edit?</a> --}}

<a href="{{ route('screen4.edit', $exercise->id) }}" class="btn btn-default btn-sm">Edit</a>


	</p>
	<hr>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>API for this screen</h1>
			<a href="{{ route('screen4_api') }}" class="btn btn-danger">Here</a>
		</div>
	</div>
	</div>
	</div>

	@endif
	@endsection


