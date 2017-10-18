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
	<h1 style="text-align: center; color: black;">Admin PanelEdit Page</h1>

	<form action="{{ route('screen6.update', $living->id) }}" method="post">
	{{ method_field('PUT') }}

	{{ csrf_field() }}
	<div class="row">
			<div class="text-center">
			<div class="form-group">
				<div class="row">
				<div class="col-md-6 col-md-offset-3">
			 	<label for="maintitle" class="text-center">Main Title</label>
			    <input type="text" class="form-control" value= "{{$living->maintitle}}" id="maintitle" name="maintitle">
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
		    <input type="text" class="form-control" value= "{{$living->section_one_title}}" id="section_one_title" name="section_one_title">
		  	</div>

			<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point11">Point One in section 1 </label>
				    <input type="text" class="form-control" value= "{{$living->point11}}" id="point11" name="point11">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point11_type">Point One Type</label>
                 <p class="lead">
                  	{{$living->point11_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point12">Point Two in section 1 </label>
				    <input type="text" class="form-control" value= "{{$living->point12}}"  id="point12" name="point12">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point12_type">Point Two Type</label>
                   <p class="lead">
                  	{{$living->point12_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point13">Point Three in section 1 </label>
				    <input type="text" class="form-control" value= "{{$living->point13}}" id="point13" name="point13">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point13_type">Point Three Type</label>
                 <p class="lead">
                  	{{$living->point13_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point14">Point Four in section 1 </label>
				    <input type="text" class="form-control" value= "{{$living->point14}}" id="point14" name="point14">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point14_type">Point Four Type</label>
                  <p class="lead">
                  	{{$living->point14_type}}
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
		    <input type="text" class="form-control" value= "{{$living->section_two_title}}" id="section_two_title" name="section_two_title">
		  	</div>

		<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point21">Point One in section 2 </label>
				    <input type="text" class="form-control" value= "{{$living->point21}}" id="point21" name="point21">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point21_type">Point One Type</label>
                 <p class="lead">
                  	{{$living->point21_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>


		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point22">Point Two in section 2</label>
		    		<input type="text" class="form-control" value= "{{$living->point22}}" id="point22" name="point22">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point22_type">Point Two Type</label>
                 <p class="lead">
                  	{{$living->point22_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point23">Point Three in section 2</label>
		    		<input type="text" class="form-control" value= "{{$living->point23}}" id="point23" name="point23">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point23_type">Point Three Type</label>
                 <p class="lead">
                  	{{$living->point23_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>


		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point24">Point Four in section 2</label>
		    		<input type="text" class="form-control" value= "{{$living->point24}}" id="point24" name="point24">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point24_type">Point Four Type</label>
                  <p class="lead">
                  	{{$living->point24_type}}
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
		    <input type="text" class="form-control" value= "{{$living->section_three_title}}" id="section_three_title" name="section_three_title">
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point31">Point One in section 3</label>
		    		<input type="text" class="form-control" value= "{{$living->point31}}" id="point31" name="point31">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point31_type">Point One Type</label>
                  <p class="lead">
                  	{{$living->point31_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point32">Point Two in section 3</label>
		    		<input type="text" class="form-control" value= "{{$living->point32}}" id="point32" name="point32">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point32_type">Point Two Type</label>
                  <p class="lead">
                  	{{$living->point32_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point33">Point Three in section 3</label>
		    		<input type="text" class="form-control" value= "{{$living->point33}}" id="point33" name="point33">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point33_type">Point Three Type</label>
                 <p class="lead">
                  	{{$living->point33_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point34">Point Four in section 3</label>
		    		<input type="text" class="form-control" value= "{{$living->point34}}" id="point34" name="point34">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point34_type">Point Four Type</label>
                <p class="lead">
                  	{{$living->point34_type}}
                  </p>
                </div>
		 		</div>
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
		    <input type="text" class="form-control" value= "{{$living->section_four_title}}" id="section_four_title" name="section_four_title">
		  	</div>

			<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point41">Point Four in section 3</label>
		    		<input type="text" class="form-control" value= "{{$living->point41}}" id="point41" name="point41">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point41_type">Point Four Type</label>
                  <p class="lead">
                  	{{$living->point41_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point42">Point Four in section 3</label>
		    		<input type="text" class="form-control" value= "{{$living->point42}}" id="point42" name="point42">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point42_type">Point Four Type</label>
                   <p class="lead">
                  	{{$living->point42_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point43">Point Four in section 3</label>
		    		<input type="text" class="form-control" value= "{{$living->point43}}" id="point43" name="point43">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point43_type">Point Four Type</label>
                   <p class="lead">
                  	{{$living->point43_type}}
                  </p>
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
		    <input type="text" class="form-control" value= "{{$living->section_five_title}}" id="section_five_title" name="section_five_title">
		  	</div>

			<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point51">Point One in section 5</label>
		    		<input type="text" class="form-control" value= "{{$living->point51}}" id="point51" name="point51">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point51_type">Point One Type</label>
                   <p class="lead">
                  	{{$living->point51_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

			</div>

		</div>

		{{-- end of section 5 --}}


	{{-- section 6 --}}

	<div class="row">
			<div class="well">
			<div class="text-center">
				<h1>Section Six</h1>
			</div>
		

			<div class="form-group">
		  	<label for="section_six_title">Section Six Title</label>
		    <input type="text" class="form-control" value= "{{$living->section_six_title}}" id="section_six_title" name="section_six_title">
		  	</div>

		  	<div class="form-group">
		  	<label for="section_six_subtitle">Section Six Subtitle</label>
		    <input type="text" class="form-control" value= "{{$living->section_six_subtitle}}" id="section_six_subtitle" name="section_six_subtitle">
		  	</div>

			<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point61">Point One in section 6</label>
		    		<input type="text" class="form-control" value= "{{$living->point61}}" id="point61" name="point61">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point61_type">Point One Type</label>
                   <p class="lead">
                  	{{$living->point61_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point62">Point Two in section 6</label>
		    		<input type="text" class="form-control" value= "{{$living->point62}}" id="point62" name="point62">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point62_type">Point Type</label>
                   <p class="lead">
                  	{{$living->point62_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point63">Point three in section 6</label>
		    		<input type="text" class="form-control" value= "{{$living->point63}}" id="point63" name="point63">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point63_type">Point three Type</label>
                  <p class="lead">
                  	{{$living->point63_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point64">Point Four in section 6</label>
		    		<input type="text" class="form-control" value= "{{$living->point64}}" id="point64" name="point64">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point64_type">Point Four Type</label>
                   <p class="lead">
                  	{{$living->point64_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point65">Point Five in section 6</label>
		    		<input type="text" class="form-control" value= "{{$living->point65}}" id="point65" name="point65">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point65_type">Point Five Type</label>
                   <p class="lead">
                  	{{$living->point65_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point66">Point Six in section 6</label>
		    		<input type="text" class="form-control" value= "{{$living->point66}}" id="point66" name="point66">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point66_type">Point Six Type</label>
                   <p class="lead">
                  	{{$living->point66_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point67">Point Seven in section 6</label>
		    		<input type="text" class="form-control" value= "{{$living->point67}}" id="point67" name="point67">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point67_type">Point Seven Type</label>
                   <p class="lead">
                  	{{$living->point67_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point68">Point Eight in section 6</label>
		    		<input type="text" class="form-control" value= "{{$living->point68}}" id="point68" name="point68">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point68_type">Point Eight Type</label>
                  <p class="lead">
                  	{{$living->point68_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	
		  	


			</div>

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

