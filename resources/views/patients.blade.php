@extends('main')

@section('title', '| All Patients Data')

@section('header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="{{asset('js/jquery.table2excel.js')}}"></script>
<script>
	$(document).ready(function(){
	$("button").click(function(){
  $("#table2excel").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Worksheet Name",
    filename: "Patients Data" //do not include extension
  });
});
	});
</script>
@endsection

@section('content')
	<div class="text-center">
		<h1 style="color: skyblue;">All Patients Information</h1>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped" id="table2excel">
					<thead>
						<tr>
							<th>Id</th>	
							<th>Ailment</th>
							<th>Hospital</th>
							<th>Location</th>
							<th>Language</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Relation</th>
							<th>Relation_Gender</th>
							<th>Mobile</th>	
							<th>Date_Added</th>
						</tr>
					</thead>
					<tbody>
						@foreach($patients as $patient)
							<tr>
								<td> {{$patient->id}} </td>
								<td> {{$patient->Ailment}} </td>
								<td> {{$patient->Hospital}} </td>
								<td> {{$patient->Location}} </td>
								<td> {{$patient->Language}} </td>
								<td> {{$patient->Age}} </td>
								<td> {{$patient->Gender}} </td>
								<td> {{$patient->Relation}} </td>
								<td> {{$patient->Relation_Gender}} </td>
								<td> {{$patient->Mobile}} </td>
								<td> {{date('M j, Y h:ia', strtotime($patient->created_at)) }} </td>
							</tr>	
						@endforeach
					</tbody>
				</table>
				<div class="text-center">
				<button>Download</button>
				</div>
			</div>
		</div>

		@endsection





