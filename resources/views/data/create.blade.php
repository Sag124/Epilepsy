<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>Document</title>
	<style>
		body{
			background-color: lightgray;
		}
	</style>
</head>
<body>

	<div class="container">
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
	<h1 style="text-align: center; color: black;">Admin Panel Create Page</h1>

	<form action="{{ route('screen1.store') }}" method="post">
	{{ csrf_field() }}
	<div class="row">
			<div class="text-center">
			<div class="form-group">
				<div class="row">
				<div class="col-md-6 col-md-offset-3">
			 	<label for="maintitle" class="text-center">Main Title</label>
			    <input type="text" class="form-control" id="maintitle" name="maintitle">
			    </div>
			    </div>
		  	</div>
		  	</div>
		<div class="col-md-6">
		 	

		 	<div class="form-group">
		  	<label for="section_one_title">Section One Title</label>
		    <input type="text" class="form-control" id="section_one_title" name="section_one_title">
		  	</div>

			<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point11">Point One in section 1 </label>
				    <input type="text" class="form-control" id="point11" name="point11">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point11_type">Point One Type</label>
                  <select class="form-control" name="point11_type" id="point11_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
			</div>
			</div>
		  	</div>

		 	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point12">Point Two in section 1</label>
		    		<input type="text" class="form-control" id="point12" name="point12">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point12_type">Point Two Type</label>
                  <select class="form-control" name="point12_type" id="point12_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>

		</div>

		<div class="col-md-6">


		  	<div class="form-group">
		  	<label for="section_two_title">Section Two Title</label>
		    <input type="text" class="form-control" id="section_two_title" name="section_two_title">
		  	</div>

		<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point21">Point One in section 2 </label>
				    <input type="text" class="form-control" id="point21" name="point21">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point21_type">Point One Type</label>
                  <select class="form-control" name="point21_type" id="point21_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
			</div>
			</div>
		  	</div>

		 	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point22">Point Two in section 2</label>
		    		<input type="text" class="form-control" id="point22" name="point22">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point22_type">Point Two Type</label>
                  <select class="form-control" name="point22_type" id="point22_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>

		{{--  --}}

		  	<div class="form-group">
		  	<div class="row">
		 		<div class="col-md-9">
		  			<label for="f1">Point Three in section 2</label>
		    		<input type="text" class="form-control" id="f1" name="f1">
		 		</div>
		 		<div class="col-md-3">
		 		<div class="form-group">
				<label for="point23_type">Point Three Type</label>
                  <select class="form-control" name="point23_type" id="point23_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>


			<div class="form-group">
				<div class="row">
		 		<div class="col-md-9">
				  	<label for="f2">Point Four in section 2</label>
				    <input type="text" class="form-control" id="f2" name="f2">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point24_type">Point Four Type</label>
                  <select class="form-control" name="point24_type" id="point24_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>


			<div class="form-group">
			<div class="row">
		 		<div class="col-md-9">
					  	<label for="point25">Point Five in section 3</label>
					    <input type="text" class="form-control" id="point25" name="point25">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point25_type">Point Five Type</label>
                  <select class="form-control" name="point25_type" id="point25_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>

			<div class="form-group">
			<div class="row">
		 		<div class="col-md-9">
		  			<label for="point26">Point six in section 2</label>
		    		<input type="text" class="form-control" id="point26" name="point26">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point26_type">Point Six Type</label>
                  <select class="form-control" name="point26_type" id="point26_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	</div>

</div>
			<div class="text-center">
		  	<input type="submit" value="Insert" class="btn btn-lg btn-success">	
			</div>
		  	{{-- <button type="submit" class="btn btn-default">Submit</button> --}}
	</form>


</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

{{-- 
		<div class="col-md-12">
		<table class="table table-condensed">
			<thead>
					<th>MainTitle</th>
					<th>Section 1 Title</th>
					<th>Point 1</th>
					<th>Point 1 type</th>
					<th>Point 2</th>
					<th>Point 2 type</th>
					<th>Section 2 Title</th>
					<th>Point 1</th>
					<th>Point 1 type</th>
					<th>Point 2</th>
					<th>Point 2 type</th>
					<th>Point 3</th>
					<th>Point 3 type</th>
					<th>Point 4</th>
					<th>Point 4 type</th>
					<th>Point 5</th>
					<th>Point 5 type</th>
					<th>Point 6</th>
					<th>Point 6 type</th>
					<th>Simple Point 1</th>
					<th>Simple Point 2</th>	
			</thead>
			<tbody>
				@foreach($datas as $data)
				<tr>
					<th> {{$data->maintitle}} </th>	
					<th> {{$data->section_one_title}} </th>					
					<th> {{$data->point11}} </th>					
					<th> {{$data->point12}} </th>					
					<th> {{$data->section_two_title}} </th>					
					<th> {{$data->point21}} </th>					
					<th> {{$data->point22}} </th>					
					<th> {{$data->type}} </th>					
					<th> {{$data->f1}} </th>					
					<th> {{$data->f2}} </th>					

				</tr>
				@endforeach
			</tbody>
		</table>
		@endif

			
		</div> --}}