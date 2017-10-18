<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>Exercise Screen</title>
	<style>
		body{
			background-color: lightblue;
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

	<form action="{{ route('screen4.store') }}" method="post">
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

	</div>
	

						{{-- section one --}}
		<div class="row">			
               <div class="well">
			<div class="text-center">
				<h1>Section One</h1>
			</div>
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
                    <option>Sequence</option>
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
                    <option>Sequence</option>
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
		  			<label for="point13">Point Three in section 1</label>
		    		<input type="text" class="form-control" id="point13" name="point13">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point13_type">Point Three Type</label>
                  <select class="form-control" name="point13_type" id="point13_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
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
		  			<label for="point14">Point Four in section 1</label>
		    		<input type="text" class="form-control" id="point14" name="point14">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point14_type">Point Four Type</label>
                  <select class="form-control" name="point14_type" id="point14_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
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
		  			<label for="point15">Point Five in section 1</label>
		    		<input type="text" class="form-control" id="point15" name="point15">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point15_type">Point Five Type</label>
                  <select class="form-control" name="point15_type" id="point15_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
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
		  			<label for="point16">Point Six in section 1</label>
		    		<input type="text" class="form-control" id="point16" name="point16">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point16_type">Point Six Type</label>
                  <select class="form-control" name="point16_type" id="point16_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	</div>
		</div>

					{{-- section two --}}

		<div class="row">
			<div class="well">	
			<div class="text-center">
				<h1>Section Two</h1>
			</div>
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
                    <option>Sequence</option>
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
                    <option>Sequence</option>
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
		  			<label for="point23">Point Three in section 2</label>
		    		<input type="text" class="form-control" id="point23" name="point23">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point23_type">Point Three Type</label>
                  <select class="form-control" name="point23_type" id="point23_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
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
		  			<label for="point24">Point Four in section 2</label>
		    		<input type="text" class="form-control" id="point24" name="point24">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point24_type">Point Four Type</label>
                  <select class="form-control" name="point24_type" id="point24_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
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
		  			<label for="point25">Point Five in section 2</label>
		    		<input type="text" class="form-control" id="point25" name="point25">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point25_type">Point Five Type</label>
                  <select class="form-control" name="point25_type" id="point25_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
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
		  			<label for="point26">Point Six in section 2</label>
		    		<input type="text" class="form-control" id="point26" name="point26">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point26_type">Point Six Type</label>
                  <select class="form-control" name="point26_type" id="point26_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
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
		  			<label for="point27">Point Seven in section 2</label>
		    		<input type="text" class="form-control" id="point27" name="point27">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point27_type">Point Seven Type</label>
                  <select class="form-control" name="point27_type" id="point27_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
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
		  			<label for="point28">Point Eight in section 2</label>
		    		<input type="text" class="form-control" id="point28" name="point28">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point28_type">Point Eight Type</label>
                  <select class="form-control" name="point28_type" id="point28_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
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
		  			<label for="point29">Point Nine in section 2</label>
		    		<input type="text" class="form-control" id="point29" name="point29">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point29_type">Point Nine Type</label>
                  <select class="form-control" name="point29_type" id="point29_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>




		</div>
		</div>

					{{-- section three --}}

		 	
			<div class="row">
			<div class="well">
			<div class="text-center">
				<h1>Section Three</h1>
			</div>
		

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-4">
				  	<label for="point31_point1">Left Point in First Row</label>
				    <input type="text" class="form-control" id="point31_point1" name="point31_point1">
				</div>
				<div class="col-md-5">
				  	<label for="point31_point2">Right Point in First Row </label>
				    <input type="text" class="form-control" id="point31_point2" name="point31_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point31_type">Point Type</label>
                  <select class="form-control" name="point31_type" id="point31_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-2">
		  			<label for="point32_point1">Point One in 2nd row</label>
		    		<input type="text" class="form-control" id="point32_point1" name="point32_point1">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point32_point2">Point Two in 2nd row</label>
		    		<input type="text" class="form-control" id="point32_point2" name="point32_point2">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point32_point3">Point Three in 2nd row</label>
		    		<input type="text" class="form-control" id="point32_point3" name="point32_point3">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point32_point4">Point Four in 2nd row</label>
		    		<input type="text" class="form-control" id="point32_point4" name="point32_point4">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point32_type">Point Two Type</label>
                  <select class="form-control" name="point32_type" id="point32_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-3">
		  			<label for="point33_point1">Point One in section 3</label>
		    		<input type="text" class="form-control" id="point33_point1" name="point33_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point33_point2">Point Two in section 3</label>
		    		<input type="text" class="form-control" id="point33_point2" name="point33_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point33_point3">Point Three in section 3</label>
		    		<input type="text" class="form-control" id="point33_point3" name="point33_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point33_type">Point Three Type</label>
                  <select class="form-control" name="point33_type" id="point33_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-4">
		  			<label for="point34_point1">Point Four One in section 3</label>
		    		<input type="text" class="form-control" id="point34_point1" name="point34_point1">
		 		</div>
		 		<div class="col-md-5">
		  			<label for="point34_point2">Point Four Two in section 3</label>
		    		<input type="text" class="form-control" id="point34_point2" name="point34_point2">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point34_type">Point Four Type</label>
                  <select class="form-control" name="point34_type" id="point34_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>		

			</div>


		  	

		  	{{-- </div> --}}


		</div>


			{{-- section four --}}

			<div class="row">
			<div class="well">
			<div class="text-center">
				<h1>Section Four</h1>
			</div>
		

			<div class="form-group">
		  	<label for="section_four_title">Section Four Title</label>
		    <input type="text" class="form-control" id="section_four_title" name="section_four_title">
		  	</div>


		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-3">
		  			<label for="point41_point1">Point One in first row</label>
		    		<input type="text" class="form-control" id="point41_point1" name="point41_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point41_point2">Point Two in first row</label>
		    		<input type="text" class="form-control" id="point41_point2" name="point41_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point41_point3">Point Three in first row</label>
		    		<input type="text" class="form-control" id="point41_point3" name="point41_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point41_type">Point Three Type</label>
                  <select class="form-control" name="point41_type" id="point41_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>

			</div>

		</div>    
		{{--end of section 4  --}}

		{{-- section 5 --}}
		<div class="row">
			<div class="well">
			<div class="text-center">
				<h1>Section Five</h1>
			</div>
		

			<div class="form-group">
		  	<label for="section_five_title">Section Five Title</label>
		    <input type="text" class="form-control" id="section_five_title" name="section_five_title">
		  	</div>


		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-2">
		  			<label for="point51_point1">Point One in first row</label>
		    		<input type="text" class="form-control" id="point51_point1" name="point51_point1">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point51_point2">Point Two in first row</label>
		    		<input type="text" class="form-control" id="point51_point2" name="point51_point2">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point51_point3">Point Three in first row</label>
		    		<input type="text" class="form-control" id="point51_point3" name="point51_point3">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point51_point4">Point Three in first row</label>
		    		<input type="text" class="form-control" id="point51_point4" name="point51_point4">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point51_point5">Point Three in first row</label>
		    		<input type="text" class="form-control" id="point51_point5" name="point51_point5">
		 		</div>
		 		<div class="col-md-2"><div class="form-group">
				<label for="point51_type">Point Type</label>
                  <select class="form-control" name="point51_type" id="point51_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-2">
		  			<label for="point52_point1">Point One in 2nd row</label>
		    		<input type="text" class="form-control" id="point52_point1" name="point52_point1">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point52_point2">Point Two in 2nd row</label>
		    		<input type="text" class="form-control" id="point52_point2" name="point52_point2">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point52_point3">Point Three in 2nd row</label>
		    		<input type="text" class="form-control" id="point52_point3" name="point52_point3">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point52_point4">Point Three in 2nd row</label>
		    		<input type="text" class="form-control" id="point52_point4" name="point52_point4">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point52_point5">Point Three in 2nd row</label>
		    		<input type="text" class="form-control" id="point52_point5" name="point52_point5">
		 		</div>
		 		<div class="col-md-2"><div class="form-group">
				<label for="point52_type">Point Type</label>
                  <select class="form-control" name="point52_type" id="point52_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
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

