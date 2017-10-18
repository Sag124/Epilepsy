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

	<form action="{{ route('screen1.update', $screen->id) }}" method="post">
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
               {{--    <select class="form-control" name="point11_type" id="point11_type">
                    <option {{old('point11_type',$screen->point11_type)=="Bullet"? 'selected':''}}  value="Bullet">Bullet</option>
                    <option {{old('point11_type',$screen->point11_type)=="Simple"? 'selected':''}}  value="Simple">Simple</option>
                    <option {{old('point11_type',$screen->point11_type)=="Sequence"? 'selected':''}}  value="Sequence">Sequence</option>
                    <option {{old('point11_type',$screen->point11_type)=="Two-Type-Table"? 'selected':''}}  value="Two-type-table">Two-Type-Table</option>
                    <option {{old('point11_type',$screen->point11_type)=="Five-Type-Table"? 'selected':''}}  value="Five-type-table">Five-Type-Table</option>
        
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point11_type}}
                  </p>
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
                {{--   <select class="form-control" name="point12_type" id="point12_type">
                     <option {{old('point12_type',$screen->point12_type)=="Bullet"? 'selected':''}}  value="Bullet">Bullet</option>
                    <option {{old('point12_type',$screen->point12_type)=="Simple"? 'selected':''}}  value="Simple">Simple</option>
                    <option {{old('point12_type',$screen->point12_type)=="Sequence"? 'selected':''}}  value="Sequence">Sequence</option>
                    <option {{old('point12_type',$screen->point12_type)=="Two-Type-Table"? 'selected':''}}  value="Two-type-table">Two-Type-Table</option>
                    <option {{old('point12_type',$screen->point12_type)=="Five-Type-Table"? 'selected':''}}  value="Five-type-table">Five-Type-Table</option>
                  </select> --}}
                  <p class="lead">
                  	{{$screen->point12_type}}
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
                 {{--  <select class="form-control" value= "{{$screen->point21_type}}" name="point21_type" id="point21_type">
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
                  {{-- <select class="form-control" value= "{{$screen->point22_type}}" name="point22_type" id="point22_type">
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
				  	<label for="f1">Point Third in section 2 </label>
				    <input type="text" class="form-control" value= "{{$screen->f1}}" id="f1" name="f1">
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
				  	<label for="f2">Point Four in section 2 </label>
				    <input type="text" class="form-control" value= "{{$screen->f2}}" id="f2" name="f2">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point24_type">Point Four Type</label>
                {{--   <select class="form-control" value= "{{$screen->point24_type}}" name="point24_type" id="point24_type">
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
                 {{--  <select class="form-control" value= "{{$screen->point25_type}}" name="point25_type" id="point25_type">
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

