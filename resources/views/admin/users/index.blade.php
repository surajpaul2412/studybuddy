@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-12 col-12" align="left">
		    	<h2 class="page-title">All Users ( {{$users->count()}} )</h2>
	    	</div>
	    	<div class="col-md-12 col-12 mt-3" align="left">
		    	<form method="POST" action="{{route('admin.users.search')}}" class="row" id="universitySearch">
		    		@csrf
		    		<div class="col-md-2 font-weight-bold pt-2">
		    			Filter By University :
		    		</div>
		    		<div class="col-md-5">
		    			<select name="search" class="form-control" id="search" style="text-align: center;">
		    				<option value="">-- Select University --</option>
		    				@foreach($universities as $university)
		    				<option value="{{$university->id}}">{{$university->first_name}} {{$university->last_name}}</option>
		    				@endforeach
		    			</select>
		    		</div>
		    	</form>
	    	</div>
	    </div>
	</div>
		<div class="row mt-4">
			@include('layouts.backend.partial.alert')
			<table id="example" class="display" style="width:100%">
			    <thead>
			        <tr>
			            <th>Id</th>
			            <th>Role</th>
			            <th>First Name</th>
			            <th>Last Name</th>
			            <th>Status</th>
			            <th>Edit</th>
			        </tr>
			    </thead>
			    <tfoot>
			        <tr>
			            <th>Id</th>
			            <th>Role</th>
			            <th>First Name</th>
			            <th>Last Name</th>
			            <th>Status</th>
			            <th>Edit</th>
			        </tr>
			    </tfoot>
			</table>
		</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
	// Data Table
    $('#example').DataTable( {
        "ajax": '{{route('admin.adminUsers')}}',
        "columns": [
            { "data": null, "render": 'id' },
            {
            	data: 'role_id',
		        render: function(data, data2, type, row, meta) {
		        	if(data == 2){
		        		return '<badge class="badge badge-success"> University </badge>';
		        	}else if(data == 3){
		        		return '<badge class="badge badge-info"> Tutor </badge>';
		        	}else{
		        		return '<badge class="badge badge-warning"> Student </badge>';
		        	}			        
	            }
            },
            { "data": "first_name" },
            { "data": "last_name" },
            { 
            	data: null,
		        render: function(data, data2, type, row, meta) {
			        if(data['deleted_at']) {
			        	return '<a class="btn btn-danger py-1" href="/admin/user/activate/'+ data['id'] +'">Disabled</a>';
	                }
	                else {
	                  return '<a class="btn btn-success py-1" href="/admin/user/destroy/'+ data['id'] +'">Activated</a>';
	                }
	            }
			 
			},
            {
                data: 'id',
                render: function(data, type, row, meta) {
                    return type === 'display' ?
                        '<a class="btn btn-info py-1" href="/admin/users/'+ data +'/edit">Edit</a>' :
                        data;
                }
            },
        ]
    });
    // search by uni
	$('#search').change(function(){
		$('#universitySearch').submit();
	});
});
</script>
@endsection