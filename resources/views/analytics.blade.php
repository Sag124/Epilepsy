@extends('main')

@section('title', '| All Pages Data')

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
    filename: "PagesData" //do not include extension
  });
});
	});
</script>
@endsection

@section('content')
	<div class="text-center">
		<h1 style="color: skyblue;">All Pages Information</h1>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped" id="table2excel">
					<thead>
						<tr>
							<th>Id</th>	
							<th>Mobile</th>
							<th>App Name</th>
							<th>Screen Name</th>
							<th>Views</th>
							<th>Hospital</th>
							<th>Location</th>	
							<th>Date_Added</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pages as $page)
							<tr>
								<td> {{$page->id}} </td>
								<td> {{$page->mobile}} </td>
								<td> {{$page->app_name}} </td>
								<td> {{$page->screen_name}} </td>
								<td> {{$page->count}} </td>
								<td> {{$page->hospital}} </td>
								<td> {{$page->location}} </td>
								<td> {{date('M j, Y h:ia', strtotime($page->created_at)) }} </td>
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

