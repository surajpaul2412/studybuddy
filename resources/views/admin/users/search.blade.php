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
		    				<option disabled>-- Select University --</option>
		    				@foreach($universities as $university)
		    				<?php
					            $selected = '';
					            if($university->id == $searched_uni)
					            { $selected = 'selected="selected"';}
					        ?>
		    				<option value="{{$university->id}}" {{$selected}}>{{$university->first_name}} {{$university->last_name}}</option>
		    				@endforeach
		    			</select>
		    		</div>
		    	</form>
	    	</div>
	    </div>
	</div>
	<div class="row mt-4">
		@include('layouts.backend.partial.alert')
		<table id="userDataTable" class="display" style="width:100%">
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
var Json = {!!$userJSON!!};
$(document).ready(function() {
	// Data Table
    $('#userDataTable').DataTable({
        data: Json,
        columns: [
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
			        	return '<form method="GET" action="/admin/user/activate/'+ data['id'] +'">@csrf<input type="hidden" name="search" value="{{$searched_uni}}"><button class="btn btn-danger py-1" type="submit">Disabled</button></form>';
	                }
	                else {
	                  return '<form method="GET" action="/admin/user/destroy/'+ data['id'] +'">@csrf<input type="hidden" name="search" value="{{$searched_uni}}"><button class="btn btn-success py-1" type="submit">Activated</button></form>';
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