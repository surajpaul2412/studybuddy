@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">{{$college->name}} ({{$students->count()}} Student(s))</h2>
	    	</div>
	    </div>
	</div>
	@if($students->count())
		<div class="row mt-4">
			@include('layouts.backend.partial.alert')
			<table id="example1" class="display" style="width:100%">
			    <thead>
			        <tr>
			            <th>S.no</th>
			            <th>First Name</th>
			            <th>Last Name</th>
			            <!-- <th>Classes</th> -->
			            <th>Status</th>
			            <th>Edit</th>
			        </tr>
			    </thead>
			</table>
		</div>
	@else
	@endif
</div>
<!-- {{$studentsJSON}} -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
var Json = {!!$studentsJSON!!};
$(document).ready(function() {
	// Data Table
    $('#example1').DataTable({
        data: Json,
        columns: [
            { "data": null, "render": 'id' },
            { "data": null, "render": 'user.first_name' },
            { "data": null, "render": 'user.last_name' },
        ]
    });
});
</script>
@endsection