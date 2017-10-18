<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>Nutrition Screen</title>
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

	<form action="{{ route('screen5.store') }}" method="post">
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
				<div class="col-md-4">
				  	<label for="point23_point1">Left Point in First Row</label>
				    <input type="text" class="form-control" id="point23_point1" name="point23_point1">
				</div>
				<div class="col-md-5">
				  	<label for="point23_point2">Right Point in First Row </label>
				    <input type="text" class="form-control" id="point23_point2" name="point23_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point23_type">Point Type</label>
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
				<div class="col-md-4">
				  	<label for="point25_point1">Left Point in First Row</label>
				    <input type="text" class="form-control" id="point25_point1" name="point25_point1">
				</div>
				<div class="col-md-5">
				  	<label for="point25_point2">Right Point in First Row </label>
				    <input type="text" class="form-control" id="point25_point2" name="point25_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point25_type">Point Type</label>
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
				<div class="col-md-4">
				  	<label for="point26_point1">Left Point in First Row</label>
				    <input type="text" class="form-control" id="point26_point1" name="point26_point1">
				</div>
				<div class="col-md-5">
				  	<label for="point26_point2">Right Point in First Row </label>
				    <input type="text" class="form-control" id="point26_point2" name="point26_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point26_type">Point Type</label>
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
				<div class="col-md-4">
				  	<label for="point27_point1">Left Point in First Row</label>
				    <input type="text" class="form-control" id="point27_point1" name="point27_point1">
				</div>
				<div class="col-md-5">
				  	<label for="point27_point2">Right Point in First Row </label>
				    <input type="text" class="form-control" id="point27_point2" name="point27_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point27_type">Point Type</label>
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
 				<div class="col-md-5 col-md-offset-4">
				  	<label for="point28_point2">Right Point in First Row </label>
				    <input type="text" class="form-control" id="point28_point2" name="point28_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point28_type">Point Type</label>
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

		</div>
		</div>

					{{-- section three --}}

		 	
			<div class="row">
			<div class="well">
			<div class="text-center">
				<h1>Section Three</h1>
			</div>

			<div class="form-group">
		  	<label for="section_three_title">Section Three Title</label>
		    <input type="text" class="form-control" id="section_three_title" name="section_three_title">
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point31">Point One in section 1</label>
		    		<input type="text" class="form-control" id="point31" name="point31">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point31_type">Point One Type</label>
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
		  	<label for="point32_title">Second Point Title</label>
		    <input type="text" class="form-control" id="point32_title" name="point32_title">
		  	</div>

		  	<div class="row">
		  		<div class="col-md-6">
		  				<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point32_point1">Point One in second point </label>
		    		<input type="text" class="form-control" id="point32_point1" name="point32_point1">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point32_point1_type">Point One Type</label>
                  <select class="form-control" name="point32_point1_type" id="point32_point1_type">
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
		  		<div class="col-md-6">
		  				<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point32_point2">Point Two in second point</label>
		    		<input type="text" class="form-control" id="point32_point2" name="point32_point2">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point32_point2_type">Point Two Type</label>
                  <select class="form-control" name="point32_point2_type" id="point32_point2_type">
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

			<div class="well">
				
		  	<div class="form-group">
		  	<label for="point33_title">Third Point Title</label>
		    <input type="text" class="form-control" id="point33_title" name="point33_title">
		  	</div>


		  	<div class="row">
		  		<div class="col-md-4">
		  				<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-8">
		  			<label for="point33_point1">Point One in Third point </label>
		    		<input type="text" class="form-control" id="point33_point1" name="point33_point1">
		 		</div>
		 		<div class="col-md-4"><div class="form-group">
				<label for="point33_point1_type">Type</label>
                  <select class="form-control" name="point33_point1_type" id="point33_point1_type">
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
		  		<div class="col-md-4">
		  				<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-8">
		  			<label for="point33_point2">Point Two in Third point</label>
		    		<input type="text" class="form-control" id="point33_point2" name="point33_point2">
		 		</div>
		 		<div class="col-md-4"><div class="form-group">
				<label for="point33_point2_type">Type</label>
                  <select class="form-control" name="point33_point2_type" id="point33_point2_type">
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
		  		<div class="col-md-4">
		  				<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-8">
		  			<label for="point33_point3">Point Three in Third point </label>
		    		<input type="text" class="form-control" id="point33_point3" name="point33_point3">
		 		</div>
		 		<div class="col-md-4"><div class="form-group">
				<label for="point33_point3_type">Type</label>
                  <select class="form-control" name="point33_point3_type" id="point33_point3_type">
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

		  	<div class="row">
		  		<div class="col-md-4">
		  				<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-8">
		  			<label for="point33_point4">Point Four in Third point </label>
		    		<input type="text" class="form-control" id="point33_point4" name="point33_point4">
		 		</div>
		 		<div class="col-md-4"><div class="form-group">
				<label for="point33_point4_type">Type</label>
                  <select class="form-control" name="point33_point4_type" id="point33_point4_type">
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
		  		<div class="col-md-4">
		  				<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-8">
		  			<label for="point33_point5">Point Five in Third point</label>
		    		<input type="text" class="form-control" id="point33_point5" name="point33_point5">
		 		</div>
		 		<div class="col-md-4"><div class="form-group">
				<label for="point33_point5_type">Type</label>
                  <select class="form-control" name="point33_point5_type" id="point33_point5_type">
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
		  		<div class="col-md-4">
		  				<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-8">
		  			<label for="point33_point6">Point Six in Third point </label>
		    		<input type="text" class="form-control" id="point33_point6" name="point33_point6">
		 		</div>
		 		<div class="col-md-4"><div class="form-group">
				<label for="point33_point6_type">Type</label>
                  <select class="form-control" name="point33_point6_type" id="point33_point6_type">
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

		  	<div class="row">
		  		{{-- <div class="col-md-6 col-md-offset-4"> --}}
		  			<div class="col-md-8">
		  			<label for="point33_point7">Point Seven in Third point </label>
		    		<input type="text" class="form-control" id="point33_point7" name="point33_point7">
		 		</div>
		 		<div class="col-md-4"><div class="form-group">
				<label for="point33_point7_type">Type</label>
                  <select class="form-control" name="point33_point7_type" id="point33_point7_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		  			
		  		{{-- </div> --}}
		  	</div>
			</div>
			</div>

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
		  	<label for="section_four_subtitle">Section Four Subtitle</label>
		    <input type="text" class="form-control" id="section_four_subtitle" name="section_four_subtitle">
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

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-3">
		  			<label for="point42_point1">Point One in Second row</label>
		    		<input type="text" class="form-control" id="point42_point1" name="point42_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point42_point2">Point Two in Second row</label>
		    		<input type="text" class="form-control" id="point42_point2" name="point42_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point42_point3">Point Three in Second row</label>
		    		<input type="text" class="form-control" id="point42_point3" name="point42_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point42_type">Point Type</label>
                  <select class="form-control" name="point42_type" id="point42_type">
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
		  			<label for="point43_point1">Point One in Third row</label>
		    		<input type="text" class="form-control" id="point43_point1" name="point43_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point43_point2">Point Two in Third row</label>
		    		<input type="text" class="form-control" id="point43_point2" name="point43_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point43_point3">Point Three in Third row</label>
		    		<input type="text" class="form-control" id="point43_point3" name="point43_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point43_type">Point Type</label>
                  <select class="form-control" name="point43_type" id="point43_type">
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
		  			<label for="point44_point1">Point One in fourth row</label>
		    		<input type="text" class="form-control" id="point44_point1" name="point44_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point44_point2">Point Two in fourth row</label>
		    		<input type="text" class="form-control" id="point44_point2" name="point44_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point44_point3">Point Three in fourth row</label>
		    		<input type="text" class="form-control" id="point44_point3" name="point44_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point44_type">Point Type</label>
                  <select class="form-control" name="point44_type" id="point44_type">
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
		  			<label for="point45_point1">Point One in fifth row</label>
		    		<input type="text" class="form-control" id="point45_point1" name="point45_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point45_point2">Point Two in fifth row</label>
		    		<input type="text" class="form-control" id="point45_point2" name="point45_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point45_point3">Point Three in fifth row</label>
		    		<input type="text" class="form-control" id="point45_point3" name="point45_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point45_type">Point Type</label>
                  <select class="form-control" name="point45_type" id="point45_type">
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
		  			<label for="point46_point1">Point One in sixth row</label>
		    		<input type="text" class="form-control" id="point46_point1" name="point46_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point46_point2">Point Two in sixth row</label>
		    		<input type="text" class="form-control" id="point46_point2" name="point46_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point46_point3">Point Three in sixth row</label>
		    		<input type="text" class="form-control" id="point46_point3" name="point46_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point46_type">Point Three Type</label>
                  <select class="form-control" name="point46_type" id="point46_type">
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

		  	 <div class="row">
		  		{{-- <div class="col-md-6 col-md-offset-4"> --}}
		  			<div class="col-md-8">
		  			<label for="point47">Point Seven in Fourth section </label>
		    		<input type="text" class="form-control" id="point47" name="point47">
		 		</div>
		 		<div class="col-md-4"><div class="form-group">
				<label for="point47_type">Type</label>
                  <select class="form-control" name="point47_type" id="point47_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select>
                </div>
		 		</div>
		  			
		  		{{-- </div> --}}
		  	</div>


		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-3">
		  			<label for="point48_point1">Point One in Eighth row</label>
		    		<input type="text" class="form-control" id="point48_point1" name="point48_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point48_point2">Point Two in Eighth row</label>
		    		<input type="text" class="form-control" id="point48_point2" name="point48_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point48_point3">Point Three in Eighth row</label>
		    		<input type="text" class="form-control" id="point48_point3" name="point48_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point48_type">Point Type</label>
                  <select class="form-control" name="point48_type" id="point48_type">
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
		  			<label for="point49_point1">Point One in Ninth row</label>
		    		<input type="text" class="form-control" id="point49_point1" name="point49_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point49_point2">Point Two in Ninth row</label>
		    		<input type="text" class="form-control" id="point49_point2" name="point49_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point49_point3">Point Three in Ninth row</label>
		    		<input type="text" class="form-control" id="point49_point3" name="point49_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point49_type">Point Type</label>
                  <select class="form-control" name="point49_type" id="point49_type">
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
		  			<label for="point410_point1">Point One in Tenth row</label>
		    		<input type="text" class="form-control" id="point410_point1" name="point410_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point410_point2">Point Two in Tenth row</label>
		    		<input type="text" class="form-control" id="point410_point2" name="point410_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point410_point3">Point Three in Tenth row</label>
		    		<input type="text" class="form-control" id="point410_point3" name="point410_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point410_type">Point Type</label>
                  <select class="form-control" name="point410_type" id="point410_type">
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
		  			<label for="point411_point1">Point One in 11th row</label>
		    		<input type="text" class="form-control" id="point411_point1" name="point411_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point411_point2">Point Two in 11th row</label>
		    		<input type="text" class="form-control" id="point411_point2" name="point411_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point411_point3">Point Three in 11th row</label>
		    		<input type="text" class="form-control" id="point411_point3" name="point411_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point411_type">Point Three Type</label>
                  <select class="form-control" name="point411_type" id="point411_type">
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
		  			<label for="point412_point1">Point One in 12th row</label>
		    		<input type="text" class="form-control" id="point412_point1" name="point412_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point412_point2">Point Two in 12th row</label>
		    		<input type="text" class="form-control" id="point412_point2" name="point412_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point412_point3">Point Three in 12th row</label>
		    		<input type="text" class="form-control" id="point412_point3" name="point412_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point412_type">Point Three Type</label>
                  <select class="form-control" name="point412_type" id="point412_type">
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
		 		{{-- <div class="col-md-3">
		  			<label for="point46_point1">Point One in sixth row</label>
		    		<input type="text" class="form-control" id="point46_point1" name="point46_point1">
		 		</div> --}}
		 	{{-- 	<div class="col-md-3">
		  			<label for="point46_point2">Point Two in sixth row</label>
		    		<input type="text" class="form-control" id="point46_point2" name="point46_point2">
		 		</div> --}}
		 		<div class="col-md-3 col-md-offset-6">
		  			<label for="point413_point3">Point Three in 13th row</label>
		    		<input type="text" class="form-control" id="point413_point3" name="point413_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point413_type">Point Type</label>
                  <select class="form-control" name="point413_type" id="point413_type">
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

