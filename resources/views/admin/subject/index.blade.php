@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">Subjects ( {{$subjects->count()}} )</h2>
	    	</div>
	    	<div class="col-md-6 col-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('admin.subject.create')}}">Add New Subject</a>
	    	</div>
	    </div>
	</div>
	@if($subjects->count())
		<div class="row mt-4">
			@include('layouts.backend.partial.alert')
			<table id="example" class="display" style="width:100%">
			    <thead>
			        <tr>
			            <th>S.no</th>
			            <th>Name</th>
			            <th>Status</th>
			            <th>Edit</th>
			        </tr>
			    </thead>
			    <tfoot>
			        <tr>
			            <th>S.no</th>
			            <th>Name</th>
			            <th>Status</th>
			            <th>Edit</th>
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
$(document).ready(function() {
    $('#example').DataTable( {
        "ajax": '{{url('/admin/getAllSubjects')}}',
        "columns": [
            { "data": null, "render": 'id' },
            { "data": "name" },
            { 
            	data: null,
		        render: function(data, data2, type, row, meta) {
			        if(data['deleted_at']) {
			        	return '<a class="btn btn-danger py-1" href="/admin/subject/activate/'+ data['id'] +'">Deleted</a>';
	                }
	                else {
	                  return '<a class="btn btn-success py-1" href="/admin/subject/destroy/'+ data['id'] +'">Activated</a>';
	                }
	            }
			 
			},
            {
                data: 'id',
                render: function(data, type, row, meta) {
                    return type === 'display' ?
                        '<a class="btn btn-info py-1" href="/admin/subject/'+ data +'/edit">Edit</a>' :
                        data;
                }
            },
            // {
            //     data: 'id',
            //     render: function(data, type, row, meta) {
            //         return type === 'display' ?
            //             '<a class="btn btn-danger py-1" href="/admin/subject/destroy/'+ data +'">Delete</a>' :
            //             data;
            //     }
            // }
        ]
    } );
});
</script>
@endsection