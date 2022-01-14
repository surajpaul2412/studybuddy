@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">Session Attendance ( {{$sessionAttendance->count()}} )</h2>
	    	</div>
	    	<div class="col-md-6 col-12" align="right">
		    	<a class="btn btn-info" href="{{route('admin.session.index')}}">Back</a>
	    	</div>
	    </div>
	</div>
	@if($sessionAttendance->count())
		<div class="row mt-4">
			@include('layouts.backend.partial.alert')
			<table id="example" class="display" style="width:100%">
			    <thead>
			        <tr>
			            <th>Name</th>
			            <th>Email</th>
			            <th>Mobile</th>
			            <th>Country</th>
			            <th>City</th>
			            <th>Avatar</th>
			        </tr>
			    </thead>
			    <tfoot>
			        <tr>
			            <th>Name</th>
			            <th>Email</th>
			            <th>Mobile</th>
			            <th>Country</th>
			            <th>City</th>
			            <th>Avatar</th>
			        </tr>
			    </tfoot>
			</table>
		</div>
	@else
		<div align="center">
			<h3>No Student mark attending.</h3>
		</div>
	@endif
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
var Json = {!!$sessionAttendanceJSON!!};

$(document).ready(function () {
    $('#example').dataTable({
        data: Json,
        columns: [
            { data: 'user.full_name'},
            { data: 'user.email'},
            { data: 'user.mobile'},
            { data: 'user.country'},
            { data: 'user.city'},
            {
                data: 'user.avatar',
                render: function(data, type, row, meta) {
                	if(data){
                		return type === 'display' ? '<img src="{{asset('uploads/avatar/')}}/'+ data +'" width="50px">' : data;
                	}else{
                		return data;
                	}
                }
            },
        ]
    });
});
</script>
@endsection