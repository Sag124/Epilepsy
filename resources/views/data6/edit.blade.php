<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>FAQ Edit Page</title>
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

	<form action="{{ route('screen7.update', $faq->id) }}" method="post">
	{{ method_field('PUT') }}

	{{ csrf_field() }}
<div class="row">
			<div class="text-center">
			<div class="form-group">
				<div class="row">
				<div class="col-md-6 col-md-offset-3">
			 	<label for="maintitle" class="text-center">Main Title</label>
			    <input type="text" class="form-control" value= "{{$faq->maintitle}}" id="maintitle" name="maintitle">
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
		    <input type="text" class="form-control" value= "{{$faq->section_one_title}}" id="section_one_title" name="section_one_title">
		  	</div>

			<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point11">Point One in section 1 </label>
				    <input type="text" class="form-control" value= "{{$faq->point11}}" id="point11" name="point11">
				</div>
			<div class="col-md-3">
				<div class="form-group">
				<label for="point11_type">Point One Type</label>
                  <p class="lead">
                  	{{$faq->point11_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		 	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point12">Point Two in section 1</label>
		    		<input type="text" class="form-control" value= "{{$faq->point12}}" id="point12" name="point12">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point12_type">Point Two Type</label>
                  <p class="lead">
                  	{{$faq->point12_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		  	<label for="section_two_title">Section Two Title</label>
		    <input type="text" class="form-control" value= "{{$faq->section_two_title}}" id="section_two_title" name="section_two_title">
		  	</div>


	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point21">Point One in section 2 </label>
				    <input type="text" class="form-control" value= "{{$faq->point21}}" id="point21" name="point21">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point21_type">Point One Type</label>
                 <p class="lead">
                  	{{$faq->point21_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  		<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point22">Point Two in section 2</label>
		    		<input type="text" class="form-control" value= "{{$faq->point22}}" id="point22" name="point22">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point22_type">Point Two Type</label>
                  <p class="lead">
                  	{{$faq->point22_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		 	<div class="row">
		 		<div class="col-md-9">
		  			<label for="point23">Point Three in section 2</label>
		    		<input type="text" class="form-control" value= "{{$faq->point23}}" id="point23" name="point23">
		 		</div>
		 		<div class="col-md-3"><div class="form-group">
				<label for="point23_type">Point Three Type</label>
                 <p class="lead">
                  	{{$faq->point23_type}}
                  </p>
                </div>
		 		</div>
		 	</div>
		  	</div>

		  	<div class="form-group">
		  	<label for="section_three_title">Section Three Title</label>
		    <input type="text" class="form-control" value= "{{$faq->section_three_title}}" id="section_three_title" name="section_three_title">
		  	</div>


	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point31">Point One in section 3 </label>
				    <input type="text" class="form-control" value= "{{$faq->point31}}" id="point31" name="point31">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point31_type">Point One Type</label>
                  <p class="lead">
                  	{{$faq->point31_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		<div class="form-group">
		  	<label for="section_four_title">Section Four Title</label>
		    <input type="text" class="form-control" value= "{{$faq->section_four_title}}" id="section_four_title" name="section_four_title">
		  	</div>


	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point41">Point One in section 4 </label>
				    <input type="text" class="form-control" value= "{{$faq->point41}}" id="point41" name="point41">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point41_type">Point One Type</label>
               <p class="lead">
                  	{{$faq->point41_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>		  


		  	<div class="form-group">
		  	<label for="section_five_title">Section Five Title</label>
		    <input type="text" class="form-control" value= "{{$faq->section_five_title}}" id="section_five_title" name="section_five_title">
		  	</div>


	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point51">Point One in section 5 </label>
				    <input type="text" class="form-control" value= "{{$faq->point51}}" id="point51" name="point51">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point51_type">Point One Type</label>
                  <p class="lead">
                  	{{$faq->point51_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>	

		  	<div class="form-group">
		  	<label for="section_six_title">Section Six Title</label>
		    <input type="text" class="form-control" value= "{{$faq->section_six_title}}" id="section_six_title" name="section_six_title">
		  	</div>


	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point61">Point One in section 2 </label>
				    <input type="text" class="form-control"value= "{{$faq->point61}}" id="point61" name="point61">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point61_type">Point One Type</label>
                  <p class="lead">
                  	{{$faq->point61_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
		  	<label for="section_seven_title">Section Seven Title</label>
		    <input type="text" class="form-control" value= "{{$faq->section_seven_title}}" id="section_seven_title" name="section_seven_title">
		  	</div>


	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point71">Point One in section 7</label>
				    <input type="text" class="form-control" value= "{{$faq->point71}}" id="point71" name="point71">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point71_type">Point One Type</label>
                  <p class="lead">
                  	{{$faq->point71_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point72">Point Two in section 7</label>
				    <input type="text" class="form-control" value= "{{$faq->point72}}" id="point72" name="point72">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point72_type">Point Two Type</label>
                  <p class="lead">
                  	{{$faq->point72_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point73">Point Three in section 7</label>
				    <input type="text" class="form-control" value= "{{$faq->point73}}" id="point73" name="point73">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point73_type">Point Three Type</label>
               <p class="lead">
                  	{{$faq->point73_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point74">Point Four in section 7</label>
				    <input type="text" class="form-control" value= "{{$faq->point74}}" id="point74" name="point74">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point74_type">Point Four Type</label>
                 <p class="lead">
                  	{{$faq->point74_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point75">Point Five in section 7</label>
				    <input type="text" class="form-control" value= "{{$faq->point75}}" id="point75" name="point75">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point75_type">Point Five Type</label>
                 <p class="lead">
                  	{{$faq->point75_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point76">Point Six in section 7</label>
				    <input type="text" class="form-control" value= "{{$faq->point76}}" id="point76" name="point76">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point76_type">Point Six Type</label>
                 <p class="lead">
                  	{{$faq->point76_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
		  	<label for="section_eight_title">Section Eight Title</label>
		    <input type="text" class="form-control" value= "{{$faq->section_eight_title}}" id="section_eight_title" name="section_eight_title">
		  	</div>


	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point81">Point One in section 7</label>
				    <input type="text" class="form-control" value= "{{$faq->point81}}" id="point81" name="point81">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point81_type">Point One Type</label>
                  <p class="lead">
                  	{{$faq->point81_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
		  	<label for="section_nine_title">Section Nine Title</label>
		    <input type="text" class="form-control" value= "{{$faq->section_nine_title}}" id="section_nine_title" name="section_nine_title">
		  	</div>


	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point91">Point One in section 9</label>
				    <input type="text" class="form-control" value= "{{$faq->point91}}" id="point91" name="point91">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point91_type">Point One Type</label>
                  <p class="lead">
                  	{{$faq->point91_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point92">Point Two in section 9</label>
				    <input type="text" class="form-control" value= "{{$faq->point92}}" id="point92" name="point92">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point92_type">Point Two Type</label>
                 <p class="lead">
                  	{{$faq->point92_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>


		<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point93">Point Three in section 9</label>
				    <input type="text" class="form-control" value= "{{$faq->point93}}" id="point93" name="point93">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point93_type">Point Three Type</label>
                  <p class="lead">
                  	{{$faq->point93_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>


<div class="form-group">
		  	<label for="section_ten_title">Section Ten Title</label>
		    <input type="text" class="form-control" value= "{{$faq->section_ten_title}}" id="section_ten_title" name="section_ten_title">
		  	</div>


	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point101">Point One in section 10</label>
				    <input type="text" class="form-control" value= "{{$faq->point101}}" id="point101" name="point101">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point101_type">Point One Type</label>
                 <p class="lead">
                  	{{$faq->point101_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point102">Point Two in section 10</label>
				    <input type="text" class="form-control" value= "{{$faq->point102}}" id="point102" name="point102">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point102_type">Point Two Type</label>
                 <p class="lead">
                  	{{$faq->point102_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>


		<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point103">Point Three in section 10</label>
				    <input type="text" class="form-control" value= "{{$faq->point103}}" id="point103" name="point103">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point103_type">Point Three Type</label>
                  <p class="lead">
                  	{{$faq->point103_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point104">Point Four in section 10</label>
				    <input type="text" class="form-control" value= "{{$faq->point104}}" id="point104" name="point104">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point104_type">Point Four Type</label>
                  <p class="lead">
                  	{{$faq->point104_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
		  	<label for="section_eleven_title">Section Eleven Title</label>
		    <input type="text" class="form-control" value= "{{$faq->section_eleven_title}}" id="section_eleven_title" name="section_eleven_title">
		  	</div>


	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point111">Point One in section 11</label>
				    <input type="text" class="form-control" value= "{{$faq->point111}}" id="point111" name="point111">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point111_type">Point One Type</label>
                  <p class="lead">
                  	{{$faq->point111_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>


		  	<div class="form-group">
		  	<label for="section_twelve_title">Section Twelve Title</label>
		    <input type="text" class="form-control" value= "{{$faq->section_twelve_title}}" id="section_twelve_title" name="section_twelve_title">
		  	</div>


	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point121">Point One in section 12</label>
				    <input type="text" class="form-control" value= "{{$faq->point121}}" id="point121" name="point121">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point121_type">Point One Type</label>
                  <p class="lead">
                  	{{$faq->point121_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point122">Point Two in section 12</label>
				    <input type="text" class="form-control" value= "{{$faq->point122}}" id="point122" name="point122">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point122_type">Point One Type</label>
                 <p class="lead">
                  	{{$faq->point122_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

		  	<div class="form-group">
			<div class="row">
				<div class="col-md-9">
				  	<label for="point123">Point Three in section 12</label>
				    <input type="text" class="form-control" value= "{{$faq->point123}}" id="point123" name="point123">
				</div>
			<div class="col-md-3"><div class="form-group">
				<label for="point123_type">Point Three Type</label>
                 <p class="lead">
                  	{{$faq->point123_type}}
                  </p>
                </div>
			</div>
			</div>
		  	</div>

			{{-- end of sections --}}
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

