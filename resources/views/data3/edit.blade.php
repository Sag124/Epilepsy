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

	<form action="{{ route('screen4.update', $exercise->id) }}" method="post">
	{{ method_field('PUT') }}

	{{ csrf_field() }}
	<div class="row">
			<div class="text-center">
			<div class="form-group">
				<div class="row">
				<div class="col-md-6 col-md-offset-3">
			 	<label for="maintitle" class="text-center">Main Title</label>
			    <input type="text" class="form-control" value= "{{$exercise->maintitle}}" id="maintitle" name="maintitle">
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
		    <input type="text" class="form-control" id="section_one_title" value= "{{$exercise->section_one_title}}"  name="section_one_title">
		  	</div>

			<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point11">Point One in section 1 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point11}}" id="point11" name="point11">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point11_type">Point One Type</label>
              
                  <p class="lead">
                  	{{$exercise->point11_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		 	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point12">Point Two in section 1</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point12}}" id="point12" name="point12">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point12_type">Point Two Type</label>
                {{--   <select class="form-control" name="point12_type" id="point12_type">
                     <option {{old('point12_type',$exercise->point12_type)=="Bullet"? 'selected':''}}  value="Bullet">Bullet</option>
                    <option {{old('point12_type',$exercise->point12_type)=="Simple"? 'selected':''}}  value="Simple">Simple</option>
                    <option {{old('point12_type',$exercise->point12_type)=="Sequence"? 'selected':''}}  value="Sequence">Sequence</option>
                    <option {{old('point12_type',$exercise->point12_type)=="Two-Type-Table"? 'selected':''}}  value="Two-type-table">Two-Type-Table</option>
                    <option {{old('point12_type',$exercise->point12_type)=="Five-Type-Table"? 'selected':''}}  value="Five-type-table">Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$exercise->point12_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point13">Point Three in section 1 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point13}}" id="point13" name="point13">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point13_type">Point Three Type</label>
              
                  <p class="lead">
                  	{{$exercise->point13_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point14">Point Four in section 1 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point14}}" id="point14" name="point14">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point14_type">Point Four Type</label>
              
                  <p class="lead">
                  	{{$exercise->point14_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point15">Point Five in section 1 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point15}}" id="point15" name="point15">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point15_type">Point Five Type</label>
              
                  <p class="lead">
                  	{{$exercise->point15_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point16">Point six in section 1 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point16}}" id="point16" name="point16">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point16_type">Point six Type</label>
              
                  <p class="lead">
                  	{{$exercise->point16_type}}
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
		    <input type="text" class="form-control" value= "{{$exercise->section_two_title}}" id="section_two_title" name="section_two_title">
		  	</div>

		<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point21">Point One in section 2 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point21}}" id="point21" name="point21">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point21_type">Point One Type</label>
                  <p class="lead">
                  	{{$exercise->point21_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point22">Point two in section 2 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point22}}" id="point22" name="point22">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point22_type">Point two Type</label>
                  <p class="lead">
                  	{{$exercise->point22_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point23">Point Third in section 2 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point23}}" id="point23" name="point23">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point23_type">Point Third Type</label>
             
                  <p class="lead">
                  	{{$exercise->point23_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point24">Point Four in section 2 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point24}}" id="point24" name="point24">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point24_type">Point Four Type</label>
                {{--   <select class="form-control" value= "{{$exercise->point24_type}}" name="point24_type" id="point24_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$exercise->point24_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point25">Point Five in section 2 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point25}}" id="point25" name="point25">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point25_type">Point Five Type</label>
                 {{--  <select class="form-control" value= "{{$exercise->point25_type}}" name="point25_type" id="point25_type">
                    <option>Bullet</option>
                    <option>Simple</option>
                    <option>Sequence</option>
                    <option>Two-Type-Table</option>
                    <option>Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$exercise->point25_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point26">Point Six in section 2 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point26}}" id="point26" name="point26">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point26_type">Point Six Type</label>
                  <p class="lead">
                  	{{$exercise->point26_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	 <div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point27">Point Seven in section 2 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point27}}" id="point27" name="point27">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point27_type">Point Seven Type</label>
                  <p class="lead">
                  	{{$exercise->point27_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	 	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point28">Point Eight in section 2 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point28}}" id="point28" name="point28">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point28_type">Point Eight Type</label>
                  <p class="lead">
                  	{{$exercise->point28_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	 <div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point29">Point Nine in section 2 </label>
				    <input type="text" class="form-control" value= "{{$exercise->point29}}" id="point29" name="point29">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point29_type">Point Nine Type</label>
                  <p class="lead">
                  	{{$exercise->point29_type}}
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
			<div class="row">
				<div class="col-md-4">
				  	<label for="point31_point1">Left Point in First Row</label>
				    <input type="text" class="form-control" value= "{{$exercise->point31_point1}}" id="point31_point1" name="point31_point1">
				</div>
				<div class="col-md-5">
				  	<label for="point31_point2">Right Point in First Row </label>
				    <input type="text" class="form-control" value= "{{$exercise->point31_point2}}" id="point31_point2" name="point31_point2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point31_type">Point Type</label>
               <p class="lead">
                  	{{$exercise->point31_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-2">
		  			<label for="point32_point1">Point One in 2nd row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point32_point1}}" id="point32_point1" name="point32_point1">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point32_point2">Point Two in 2nd row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point32_point2}}" id="point32_point2" name="point32_point2">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point32_point3">Point Three in 2nd row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point32_point3}}" id="point32_point3" name="point32_point3">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point32_point4">Point Four in 2nd row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point32_point4}}" id="point32_point4" name="point32_point4">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point32_type">Point Two Type</label>
                    <p class="lead">
                  	{{$exercise->point32_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-3">
		  			<label for="point33_point1">Point One in section 3</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point33_point1}}" id="point33_point1" name="point33_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point33_point2">Point Two in section 3</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point33_point2}}" id="point33_point2" name="point33_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point33_point3">Point Three in section 3</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point33_point3}}" id="point33_point3" name="point33_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point33_type">Point Three Type</label>
                    <p class="lead">
                  	{{$exercise->point33_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-4">
		  			<label for="point34_point1">Point Four One in section 3</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point34_point1}}" id="point34_point1" name="point34_point1">
		 		</div>
		 		<div class="col-md-5">
		  			<label for="point34_point2">Point Four Two in section 3</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point34_point2}}" id="point34_point2" name="point34_point2">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point34_type">Point Four Type</label>
                    <p class="lead">
                  	{{$exercise->point34_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>		

			</div>


		  	

		  	{{-- </div> --}}


		</div>

										{{-- Section 4 --}}

			<div class="row">
			<div class="well">
			<div class="text-center">
				<h1>Section Four</h1>
			</div>
		

			<div class="form-group">
		  	<label for="section_four_title">Section Four Title</label>
		    <input type="text" class="form-control" value= "{{$exercise->section_four_title}}"  id="section_four_title" name="section_four_title">
		  	</div>


		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-3">
		  			<label for="point41_point1">Point One in first row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point41_point1}}"  id="point41_point1" name="point41_point1">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point41_point2">Point Two in first row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point41_point2}}" id="point41_point2" name="point41_point2">
		 		</div>
		 		<div class="col-md-3">
		  			<label for="point41_point3">Point Three in first row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point41_point3}}" id="point41_point3" name="point41_point3">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point41_type">Point Three Type</label>
                   <p class="lead">
                  	{{$exercise->point41_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

			</div>

		</div> 


		{{-- section 5 --}}
			<div class="row">
			<div class="well">
			<div class="text-center">
				<h1>Section Five</h1>
			</div>
		

			<div class="form-group">
		  	<label for="section_five_title">Section Five Title</label>
		    <input type="text" class="form-control" value= "{{$exercise->section_five_title}}" id="section_five_title" name="section_five_title">
		  	</div>


		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-2">
		  			<label for="point51_point1">Point One in first row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point51_point1}}" id="point51_point1" name="point51_point1">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point51_point2">Point Two in first row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point51_point2}}" id="point51_point2" name="point51_point2">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point51_point3">Point Three in first row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point51_point3}}" id="point51_point3" name="point51_point3">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point51_point4">Point Three in first row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point51_point4}}" id="point51_point4" name="point51_point4">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point51_point5">Point Three in first row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point51_point5}}" id="point51_point5" name="point51_point5">
		 		</div>
		 		<div class="col-md-2"><div class="form-group">
				<label for="point51_type">Point Type</label>
                   <p class="lead">
                  	{{$exercise->point51_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-2">
		  			<label for="point52_point1">Point One in 2nd row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point52_point1}}" id="point52_point1" name="point52_point1">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point52_point2">Point Two in 2nd row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point52_point2}}" id="point52_point2" name="point52_point2">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point52_point3">Point Three in 2nd row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point52_point3}}" id="point52_point3" name="point52_point3">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point52_point4">Point Three in 2nd row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point52_point4}}" id="point52_point4" name="point52_point4">
		 		</div>
		 		<div class="col-md-2">
		  			<label for="point52_point5">Point Three in 2nd row</label>
		    		<input type="text" class="form-control" value= "{{$exercise->point52_point5}}" id="point52_point5" name="point52_point5">
		 		</div>
		 		<div class="col-md-2"><div class="form-group">
				<label for="point52_type">Point Type</label>
                    <p class="lead">
                  	{{$exercise->point52_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

			</div>

		</div> 
		{{-- end of section 5 --}}
	

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

