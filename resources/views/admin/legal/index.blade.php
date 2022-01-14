@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">Legal Documents ( {{$legals->count()}} )</h2>
	    	</div>
	    	<div class="col-md-6 col-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('admin.legal.create')}}">Add New legal</a>
	    	</div>
	    </div>
	</div>
	@if($legals->count())
		<div class="row mt-4 table-responsive">
			@include('layouts.backend.partial.alert')
			<table class="table table-striped">
			    <thead>
			        <tr>
			            <th>S.no</th>
			            <th>Slug</th>
			            <th>Thumbnail</th>
			            <th>Title</th>
			            <th>Status</th>
			            <th>Edit</th>
			            <th>Delete</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach($legals as $key => $legal)
			        <tr>
			            <th>{{$key+1}}.</th>
			            <th>{{$legal->slug}}</th>
			            <th><img src="{{asset('uploads/document_thumbnails')}}/{{$legal->thumbnail}}" width="120px"></th>
			            <th>{{$legal->title}}</th>
			            <th>@if($legal->is_active == 0) <span class="text-danger">Drafted</span> @else <span class="text-success">Active</span> @endif</th>
			            <th>
			            	<a href="{{ route('admin.legal.edit',$legal->id)}}" class="badge bg-info">
					            Edit
					        </a>
					    </th>
			            <th>
							<form action="{{ route('admin.legal.destroy', $legal->id)}}" method="post">
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