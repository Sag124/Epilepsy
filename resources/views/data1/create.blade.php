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

	<form action="{{ route('screen2.store') }}" method="post">
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
				<div class="col-md-4">
				  	<label for="point32_point1">Left Point in 2nd Row</label>
				    <input type="text" class="form-control" id="point32_point1" name="point32_point1">
				</div>
				<div class="col-md-5">
				  	<label for="point32_point2">Right Point in Second Row</label>
				    <input type="text" class="form-control" id="point32_point2" name="point32_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point32_type">Point Type</label>
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
				<div class="col-md-4">
				  	<label for="point33_point1">Left Point in Third Row</label>
				    <input type="text" class="form-control" id="point33_point1" name="point33_point1">
				</div>
				<div class="col-md-5">
				  	<label for="point33_point2">Right Point in Third Row </label>
				    <input type="text" class="form-control" id="point33_point2" name="point33_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point33_type">Point Type</label>
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
				  	<label for="point34_point1">Left Point in Fourth Row</label>
				    <input type="text" class="form-control" id="point34_point1" name="point34_point1">
				</div>
				<div class="col-md-5">
				  	<label for="point34_point2">Right Point in Fourth Row </label>
				    <input type="text" class="form-control" id="point34_point2" name="point34_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point34_type">Point Type</label>
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

		  		<div class="form-group">
			<div class="row">
				<div class="col-md-4">
				  	<label for="point35_point1">Left Point in Fifth Row</label>
				    <input type="text" class="form-control" id="point35_point1" name="point35_point1">
				</div>
				<div class="col-md-5">
				  	<label for="point35_point2">Right Point in Fifth Row </label>
				    <input type="text" class="form-control" id="point35_point2" name="point35_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point35_type">Point Type</label>
                  <select class="form-control" name="point35_type" id="point35_type">
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
				  	<label for="point36_point1">Left Point in Sixth Row</label>
				    <input type="text" class="form-control" id="point36_point1" name="point36_point1">
				</div>
				<div class="col-md-5">
				  	<label for="point36_point2">Right Point in Sixth Row </label>
				    <input type="text" class="form-control" id="point36_point2" name="point36_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point36_type">Point Type</label>
                  <select class="form-control" name="point36_type" id="point36_type">
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


										{{-- Section 4 --}}

			<div class="row">
				{{-- <div class="col-md-12"> --}}
				
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
				<div class="col-md-2">
				  	<label for="point41_point1">Point One in First Row</label>
				    <input type="text" class="form-control" id="point41_point1" name="point41_point1">
				</div>
				<div class="col-md-2">
				  	<label for="point41_point2">Point two in First Row </label>
				    <input type="text" class="form-control" id="point41_point2" name="point41_point2">
				</div>
				<div class="col-md-2">
				  	<label for="point41_point3">Point Three in First Row </label>
				    <input type="text" class="form-control" id="point41_point3" name="point41_point3">
				</div>
				<div class="col-md-2">
				  	<label for="point41_point4">Point Four in First Row </label>
				    <input type="text" class="form-control" id="point41_point4" name="point41_point4">
				</div>
				<div class="col-md-2">
				  	<label for="point41_point5">Point Five in First Row </label>
				    <input type="text" class="form-control" id="point41_point5" name="point41_point5">
				</div>
			<div class="col-md-2"><div class="form-group">
				<label for="point41_type">Point Type</label>
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
				<div class="col-md-2">
				  	<label for="point42_point1">Point One in 2nd Row</label>
				    <input type="text" class="form-control" id="point42_point1" name="point42_point1">
				</div>
				<div class="col-md-2">
				  	<label for="point42_point2">Point two in 2nd Row </label>
				    <input type="text" class="form-control" id="point42_point2" name="point42_point2">
				</div>
				<div class="col-md-2">
				  	<label for="point42_point3">Point Three in 2nd Row </label>
				    <input type="text" class="form-control" id="point42_point3" name="point42_point3">
				</div>
				<div class="col-md-2">
				  	<label for="point42_point4">Point Four in 2nd Row </label>
				    <input type="text" class="form-control" id="point42_point4" name="point42_point4">
				</div>
				<div class="col-md-2">
				  	<label for="point42_point5">Point Five in 2nd Row </label>
				    <input type="text" class="form-control" id="point42_point5" name="point42_point5">
				</div>
			<div class="col-md-2"><div class="form-group">
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
				<div class="col-md-2">
				  	<label for="point43_point1">Point One in 3rd Row</label>
				    <input type="text" class="form-control" id="point43_point1" name="point43_point1">
				</div>
				<div class="col-md-2">
				  	<label for="point43_point2">Point two in 3rd Row </label>
				    <input type="text" class="form-control" id="point43_point2" name="point43_point2">
				</div>
				<div class="col-md-2">
				  	<label for="point43_point3">Point Three in 3rd Row </label>
				    <input type="text" class="form-control" id="point43_point3" name="point43_point3">
				</div>
				<div class="col-md-2">
				  	<label for="point43_point4">Point Four in 3rd Row </label>
				    <input type="text" class="form-control" id="point43_point4" name="point43_point4">
				</div>
				<div class="col-md-2">
				  	<label for="point43_point5">Point Five in 3rd Row </label>
				    <input type="text" class="form-control" id="point43_point5" name="point43_point5">
				</div>
			<div class="col-md-2"><div class="form-group">
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
				<div class="col-md-2">
				  	<label for="point44_point1">Point One in 4th Row</label>
				    <input type="text" class="form-control" id="point44_point1" name="point44_point1">
				</div>
				<div class="col-md-2">
				  	<label for="point44_point2">Point two in 4th Row </label>
				    <input type="text" class="form-control" id="point44_point2" name="point44_point2">
				</div>
				<div class="col-md-2">
				  	<label for="point44_point3">Point Three in 4th Row </label>
				    <input type="text" class="form-control" id="point44_point3" name="point44_point3">
				</div>
				<div class="col-md-2">
				  	<label for="point44_point4">Point Four in 4th Row </label>
				    <input type="text" class="form-control" id="point44_point4" name="point44_point4">
				</div>
				<div class="col-md-2">
				  	<label for="point44_point5">Point Five in 4th Row </label>
				    <input type="text" class="form-control" id="point44_point5" name="point44_point5">
				</div>
			<div class="col-md-2"><div class="form-group">
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
				<div class="col-md-2">
				  	<label for="point45_point1">Point One in Fifth Row</label>
				    <input type="text" class="form-control" id="point45_point1" name="point45_point1">
				</div>
				<div class="col-md-2">
				  	<label for="point45_point2">Point two in Fifth Row </label>
				    <input type="text" class="form-control" id="point45_point2" name="point45_point2">
				</div>
				<div class="col-md-2">
				  	<label for="point45_point3">Point Three in Fifth Row </label>
				    <input type="text" class="form-control" id="point45_point3" name="point45_point3">
				</div>
				<div class="col-md-2">
				  	<label for="point45_point4">Point Four in Fifth Row </label>
				    <input type="text" class="form-control" id="point45_point4" name="point45_point4">
				</div>
				<div class="col-md-2">
				  	<label for="point45_point5">Point Five in Fifth Row </label>
				    <input type="text" class="form-control" id="point45_point5" name="point45_point5">
				</div>
			<div class="col-md-2"><div class="form-group">
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
				<div class="col-md-2">
				  	<label for="point46_point1">Point One in Sixth Row</label>
				    <input type="text" class="form-control" id="point46_point1" name="point46_point1">
				</div>
				<div class="col-md-2">
				  	<label for="point46_point2">Point two in Sixth Row </label>
				    <input type="text" class="form-control" id="point46_point2" name="point46_point2">
				</div>
				<div class="col-md-2">
				  	<label for="point46_point3">Point Three in Sixth Row </label>
				    <input type="text" class="form-control" id="point46_point3" name="point46_point3">
				</div>
				<div class="col-md-2">
				  	<label for="point46_point4">Point Four in Sixth Row </label>
				    <input type="text" class="form-control" id="point46_point4" name="point46_point4">
				</div>
				<div class="col-md-2">
				  	<label for="point46_point5">Point Five in Sixth Row </label>
				    <input type="text" class="form-control" id="point46_point5" name="point46_point5">
				</div>
			<div class="col-md-2"><div class="form-group">
				<label for="point46_type">Point Type</label>
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


		  	<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				  	<label for="point47_point1">Point One in 7th Row</label>
				    <input type="text" class="form-control" id="point47_point1" name="point47_point1">
				</div>
				<div class="col-md-2">
				  	<label for="point47_point2">Point two in 7th Row </label>
				    <input type="text" class="form-control" id="point47_point2" name="point47_point2">
				</div>
				<div class="col-md-2">
				  	<label for="point47_point3">Point Three in 7th Row </label>
				    <input type="text" class="form-control" id="point47_point3" name="point47_point3">
				</div>
				<div class="col-md-2">
				  	<label for="point47_point4">Point Four in 7th Row </label>
				    <input type="text" class="form-control" id="point47_point4" name="point47_point4">
				</div>
				<div class="col-md-2">
				  	<label for="point47_point5">Point Five in 7th Row </label>
				    <input type="text" class="form-control" id="point47_point5" name="point47_point5">
				</div>
			<div class="col-md-2"><div class="form-group">
				<label for="point47_type">Point Type</label>
                  <select class="form-control" name="point47_type" id="point47_type">
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
				  	<label for="point48">Fourth Point in section Four </label>
				    <input type="text" class="form-control" id="point48" name="point48">
				</div>
			<div class="col-md-3">
				<div class="form-group">
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
			{{-- </div> --}}
		  	</div>

				</div>
				</div>
				</div>

	
											{{--section five  --}}


		  	
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
		  	<label for="section_five_subtitle">Section Five Subtitle</label>
		    <input type="text" class="form-control" id="section_five_subtitle" name="section_five_subtitle">
		  	</div>

			<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point51">Point One in section 5 </label>
				    <input type="text" class="form-control" id="point51" name="point51">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point51_type">Point One Type</label>
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
				<div class="col-md-9">
				  	<label for="point52">Point Two in section 5 </label>
				    <input type="text" class="form-control" id="point52" name="point52">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point52_type">Point Two Type</label>
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


			<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point53">Point Three in section 5 </label>
				    <input type="text" class="form-control" id="point53" name="point53">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point53_type">Point Three Type</label>
                  <select class="form-control" name="point53_type" id="point53_type">
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
				  	<label for="point54">Point Four in section 5 </label>
				    <input type="text" class="form-control" id="point54" name="point54">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point54_type">Point Four Type</label>
                  <select class="form-control" name="point54_type" id="point54_type">
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
				  	<label for="point55">Point Five in section 5 </label>
				    <input type="text" class="form-control" id="point55" name="point55">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point55_type">Point Five Type</label>
                  <select class="form-control" name="point55_type" id="point55_type">
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




		  			{{-- </div> --}}
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

