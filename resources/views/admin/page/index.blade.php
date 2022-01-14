@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">Pages ( {{$pages->count()}} )</h2>
	    	</div>
	    	<div class="col-md-6 col-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('admin.page.create')}}">Add New Page</a>
	    	</div>
	    </div>
	</div>
	@if($pages->count())
		<div class="row mt-4 table-responsive">
			@include('layouts.backend.partial.alert')
			<table class="table table-striped">
			    <thead>
			        <tr>
			            <th>S.no</th>
			            <th>Slug</th>
			            <th>Title</th>
			            <th>Edit</th>
			            <th>Delete</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach($pages as $key => $page)
			        <tr>
			            <th>{{$key+1}}.</th>
			            <th>{{$page->slug}}</th>
			            <th>{{$page->title}}</th>
			            <th>
			            	<a href="{{ route('admin.page.edit',$page->id)}}" class="badge bg-info">
					            Edit
					        </a>
					    </th>
			            <th>
							<form action="{{ route('admin.page.destroy', $page->id)}}" method="post">
								@csrf
								@method('DELETE')
								<button type="submit" class="badge bg-danger">Delete</button>
							</form>
			            </th>
			        </tr>
			        @endforeach
			    </tbody>
			</table>
		</div>
	@else
	@endif
</div>
@endsection