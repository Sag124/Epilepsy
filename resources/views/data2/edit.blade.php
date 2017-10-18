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

	<form action="{{ route('screen3.update', $screen->id) }}" method="post">
	{{ method_field('PUT') }}

	{{ csrf_field() }}
	<div class="row">
			<div class="text-center">
			<div class="form-group">
				<div class="row">
				<div class="col-md-6 col-md-offset-3">
			 	<label for="maintitle" class="text-center">Main Title</label>
			    <input type="text" class="form-control" value= "{{$screen->maintitle}}" id="maintitle" name="maintitle">
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
		    <input type="text" class="form-control" id="section_one_title" value= "{{$screen->section_one_title}}"  name="section_one_title">
		  	</div>

			<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point11">Point One in section 1 </label>
				    <input type="text" class="form-control" value= "{{$screen->point11}}" id="point11" name="point11">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point11_type">Point One Type</label>
				<br>
				{{-- <br> --}}
                  {{-- <select class="form-control" value= "{{$screen->point11_type}}" name="point11_type" id="point11_type"> --}}
                  {{-- <input type="text" value="{{$screen->point11_type}}" disabled> --}}
                  {{-- <label for="point11_type">{{$screen->point11_type}}</label> --}}
                  <p class="lead">{{$screen->point11_type}}</p>
                  {{--   <option>Bullet</option>
                    <option disabled>Simple</option>
                    <option disabled>Sequence</option>
                    <option disabled>Two-Type-Table</option>
                    <option disabled>Five-Type-Table</option>
                  </select> --}}
                </div>
			</div>
			</div>
		  	</div>

		 	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point12">Point Two in section 1</label>
		    		<input type="text" class="form-control" value= "{{$screen->point12}}" id="point12" name="point12">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point12_type">Point Two Type</label>
               {{--    <select class="form-control" value= "{{$screen->point12_type}}" name="point12_type" id="point12_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  {{-- {{$screen->point11_type}} --}}
                  <p class="lead">
                  	{{$screen->point12_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>


		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point13">Point Three in section 1</label>
		    		<input type="text" class="form-control" value= "{{$screen->point13}}" id="point13" name="point13">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point13_type">Point Three Type</label>
                 {{--  <select class="form-control" name="point13_type" value= "{{$screen->point13_type}}" id="point13_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point13_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>


		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point14">Point Four in section 1</label>
		    		<input type="text" class="form-control" value= "{{$screen->point14}}" id="point14" name="point14">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point14_type">Point Four Type</label>
                  {{-- <select class="form-control" name="point14_type" value= "{{$screen->point14_type}}" id="point14_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point14_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>


		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point15">Point Five in section 1</label>
		    		<input type="text" class="form-control" value= "{{$screen->point15}}" id="point15" name="point15">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point15_type">Point Five Type</label>
                {{--   <select class="form-control" name="point15_type" value= "{{$screen->point15_type}}" id="point15_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point15_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>


		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point16">Point Six in section 1</label>
		    		<input type="text" class="form-control" value= "{{$screen->point16}}" id="point16" name="point16">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point16_type">Point Six Type</label>
                  {{-- <select class="form-control" name="point16_type" value= "{{$screen->point16_type}}" id="point16_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point16_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point17">Point Seven in section 1</label>
		    		<input type="text" class="form-control" value= "{{$screen->point17}}" id="point17" name="point17">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point17_type">Point Seven Type</label>
                {{--   <select class="form-control" name="point17_type" value= "{{$screen->point17_type}}" id="point17_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point17_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point18">Point Eight in section 1</label>
		    		<input type="text" class="form-control" value= "{{$screen->point18}}" id="point18" name="point18">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point18_type">Point Eight Type</label>
                 {{--  <select class="form-control" name="point18_type" value= "{{$screen->point18_type}}" id="point18_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point18_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point19">Point Nine in section 1</label>
		    		<input type="text" class="form-control" value= "{{$screen->point19}}" id="point19" name="point19">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point19_type">Point Nine Type</label>
                  {{-- <select class="form-control" name="point19_type" value= "{{$screen->point19_type}}" id="point19_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point19_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point110">Point ten in section 1</label>
		    		<input type="text" class="form-control" value= "{{$screen->point110}}" id="point110" name="point110">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point110_type">Point ten Type</label>
                {{--   <select class="form-control" name="point110_type" value= "{{$screen->point110_type}}" id="point110_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point110_type}}
                  </p>
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
		    <input type="text" class="form-control" value= "{{$screen->section_two_title}}" id="section_two_title" name="section_two_title">
		  	</div>

		<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point21">Point One in section 2 </label>
				    <input type="text" class="form-control" value= "{{$screen->point21}}" id="point21" name="point21">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point21_type">Point One Type</label>
                {{--   <select class="form-control" value= "{{$screen->point21_type}}" name="point21_type" id="point21_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point21_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point22">Point two in section 2 </label>
				    <input type="text" class="form-control" value= "{{$screen->point22}}" id="point22" name="point22">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point22_type">Point two Type</label>
                {{--   <select class="form-control" value= "{{$screen->point22_type}}" name="point22_type" id="point22_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point22_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point23">Point Third in section 2 </label>
				    <input type="text" class="form-control" value= "{{$screen->point23}}" id="point23" name="point23">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point23_type">Point Third Type</label>
                 {{--  <select class="form-control" value= "{{$screen->point23_type}}" name="point23_type" id="point23_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point23_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point24">Point Four in section 2 </label>
				    <input type="text" class="form-control" value= "{{$screen->point24}}" id="point24" name="point24">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point24_type">Point Four Type</label>
                  {{-- <select class="form-control" value= "{{$screen->point24_type}}" name="point24_type" id="point24_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point24_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point25">Point Five in section 2 </label>
				    <input type="text" class="form-control" value= "{{$screen->point25}}" id="point25" name="point25">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point25_type">Point Five Type</label>
                {{--   <select class="form-control" value= "{{$screen->point25_type}}" name="point25_type" id="point25_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point25_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point26">Point Six in section 2 </label>
				    <input type="text" class="form-control" value= "{{$screen->point26}}" id="point26" name="point26">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point26_type">Point Six Type</label>
                 {{--  <select class="form-control" value= "{{$screen->point26_type}}" name="point26_type" id="point26_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point26_type}}
                  </p>
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
		    <input type="text" class="form-control" value= "{{$screen->section_three_title}}" id="section_three_title" name="section_three_title">
		  	</div>
	
			<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point31">Point One in section 3 </label>
				    <input type="text" class="form-control" value= "{{$screen->point31}}" id="point31" name="point31">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point31_type">Point One Type</label>
                 {{--  <select class="form-control" value= "{{$screen->point31_type}}" name="point31_type" id="point31_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point31_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point32">Point two in section 3 </label>
				    <input type="text" class="form-control" value= "{{$screen->point32}}" id="point32" name="point32">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point32_type">Point two Type</label>
                 {{--  <select class="form-control" value= "{{$screen->point32_type}}" name="point32_type" id="point32_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point32_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>
		
		<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point33">Point Three in section 3 </label>
				    <input type="text" class="form-control" value= "{{$screen->point33}}" id="point33" name="point33">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point33_type">Point Three Type</label>
               {{--    <select class="form-control" value= "{{$screen->point33_type}}" name="point33_type" id="point33_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point33_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point34">Point Four in section 3 </label>
				    <input type="text" class="form-control" value= "{{$screen->point34}}" id="point34" name="point34">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point34_type">Point Four Type</label>
             {{--      <select class="form-control" value= "{{$screen->point34_type}}" name="point34_type" id="point34_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point34_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point35">Point Five in section 3 </label>
				    <input type="text" class="form-control" value= "{{$screen->point35}}" id="point35" name="point35">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point35_type">Point Five Type</label>
                  {{-- <select class="form-control" value= "{{$screen->point35_type}}" name="point35_type" id="point35_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point35_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>


		</div>


										{{-- Section 4 --}}

				
	

		  			{{-- </div> --}}
		  	{{-- 	</div>
		  	</div> --}}

			</div>



			<div class="text-center">
		  	<input type="submit" value="Update" class="btn btn-lg btn-success">	
			</div>
		  	{{-- <button type="submit" class="btn btn-default">Submit</button> --}}



		  	
	</form>


</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

