@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">Testimonials ( {{$testimonials->count()}} )</h2>
	    	</div>
	    	<div class="col-md-6 col-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('admin.testimonial.create')}}">Add New testimonial</a>
	    	</div>
	    </div>
	</div>
	@if($testimonials->count())
		<div class="row mt-4 table-responsive">
			@include('layouts.backend.partial.alert')
			<table class="table table-striped">
			    <thead>
			        <tr>
			            <th>S.no</th>
			            <th>Name</th>
			            <th>Avatar</th>
			            <th>designation</th>
			            <th>Status</th>
			            <th>Edit</th>
			            <th>Delete</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach($testimonials as $key => $testimonial)
			        <tr>
			            <th>{{$key+1}}.</th>
			            <th>{{$testimonial->name}}</th>
			            <th><img src="{{asset('uploads/testimonial')}}/{{$testimonial->avatar}}" width="120px"></th>
			            <th>{{$testimonial->designation}}</th>
			            <th>@if($testimonial->is_active == 0) <span class="text-danger">Drafted</span> @else <span class="text-success">Active</span> @endif</th>
			            <th>
			            	<a href="{{ route('admin.testimonial.edit',$testimonial->id)}}" class="badge bg-info">
					            Edit
					        </a>
					    </th>
			            <th>
							<form action="{{ route('admin.testimonial.destroy', $testimonial->id)}}" method="post">
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