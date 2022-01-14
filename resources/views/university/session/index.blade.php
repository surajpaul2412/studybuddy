@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">Sessions ( {{$sessions->count()}} )</h2>
	    	</div>
	    	<div class="col-md-6 col-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('university.session.create')}}">Add New Session</a>
	    	</div>
	    </div>
	</div>
	@if($sessions->count())
		<div class="row mt-4">
			@include('layouts.backend.partial.alert')
			<table id="example" class="display" style="width:100%">
			    <thead>
			        <tr>
			            <th>Session Name</th>
			            <th>Tutor Name</th>
			            <th>Message</th>
			            <th>Subject</th>
			            <th>Start Time</th>
			            <th>End Time</th>
			            <th>Attendance</th>
			            <th>Detail</th>
			            <th>Edit</th>
			            <th>Delete</th>
			        </tr>
			    </thead>
			    <tfoot>
			        <tr>
			            <th>Session Name</th>
			            <th>Tutor Name</th>
			            <th>Message</th>
			            <th>Subject</th>
			            <th>Start Time</th>
			            <th>End Time</th>
			            <th>Attendance</th>
			            <th>Detail</th>
			            <th>Edit</th>
			            <th>Delete</th>
			        </tr>
			    </tfoot>
			</table>
		</div>
	@else
	@endif
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
var Json = {!!$sessionJSON!!};

$(document).ready(function () {
    $('#example').dataTable({
        data: Json,
        columns: [
            { data: 'name'},
            { data: 'tutor.full_name'},
            { data: 'message'},
            { data: 'subject.name'},
            { data: 'start_date_time'},
            { data: 'end_date_time'},
            {
                data: null,
                render: function(data, type, row, meta) {
                	if(data['attendance_count'] > 1){
                    	return type === 'display' ? '<a class="btn btn-warning py-1" href="/university/session/'+ data['id'] +'">'+ data['attendance_count'] +' Students</a>' : data;
                    }else{
                    	return type === 'display' ? '<a class="btn btn-warning py-1" href="/university/session/'+ data['id'] +'">'+ data['attendance_count'] +' Student</a>' : data;
                    }
                }
            },
            {
                data: null,
                render: function(data, type, row, meta) {
                    return type === 'display' ? '<a class="btn btn-primary py-1" href="/university/session/detail/'+ data['id'] +'"> View</a>' : data;
                    
                }
            },
            {
                data: 'id',
                render: function(data, type, row, meta) {
                    return type === 'display' ?
                        '<a class="btn btn-info py-1" href="/university/session/'+ data +'/edit">Edit</a>' :
                        data;
                }
            },
            {
                data: null,
                render: function(data, type, row, meta) {
                    return '<a class="btn btn-danger py-1" href="/university/session/destroy/'+ data['id'] +'">Delete</a>';
                }
            }
        ]
    });
});
</script>
@endsection