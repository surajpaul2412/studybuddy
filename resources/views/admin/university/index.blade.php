@extends('layouts.backend.app')

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">Universities ( {{$users->count()}} )</h2>
	    	</div>
	    	<div class="col-md-6 col-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('admin.university.create')}}">Add New University</a>
	    	</div>
	    </div>
	</div>
	@if($users->count())
		<div class="row mt-4">
			@include('layouts.backend.partial.alert')
		  	@foreach($users as $user)
		    <div class="col-md-6 col-lg-4">
		      <div class="card">
		        <div class="card-body">
		          <div class="row row-sm align-items-center">
		            <div class="col-auto">
		            	@if($user->avatar)
		            		<span class="avatar avatar-md" style="background-image: url('{{asset('uploads/avatar/')}}/{{$user->avatar}}')"></span>
		            	@else
		            		<span class="avatar avatar-md" style="background-image: url('{{asset('assets/backend/img/static/admin-avatar.png')}}')"></span>
		            	@endif
		            </div>
		            <div class="col">
		              <div class="text-dark font-weight-bold text-h5">{{$user->first_name}} {{$user->last_name}}</div>
		              <div class="text-muted text-h5">{{$user->email}}</div>
		              <div class="text-muted text-h5">{{$user->mobile}}</div>
		            </div>
		            <div class="col-auto lh-1 align-self-start">
		              <span class="badge bg-gray-lt">
		                {{$user->country}}
		              </span>
		              <span class="badge bg-gray-lt">
		                {{$user->city}}
		              </span>
		            </div>
		          </div>
		          <div class="row align-items-center mt-4">
		            <div class="col">
		              <div>
		                <div class="d-flex mb-1 align-items-center lh-1">
		                  <div class="btn-list">
		                  	@if($user->status == 1)
			              	<a href="{{ route('admin.university.activate',$user->id)}}" class="edit">
			              		<button class="btn btn-success btn-sm text-white" type="submit">Activted</button>
			              	</a>
			              	@else
			              	<a href="{{ route('admin.university.deactivate',$user->id)}}" class="edit">
			              		<button class="btn btn-danger btn-sm text-white" type="submit">Deactivted</button>
			              	</a>
			              	@endif
			              </div>
		                </div>
		              </div>
		            </div>
		            <div class="col-auto">
		              <div class="btn-list">
		              	<a href="{{ route('admin.university.edit',$user->id)}}" class="edit">
		              		<button class="btn btn-info btn-sm text-white" type="submit">Edit</button>
		              	</a>
		              </div>
		            </div>
		            <div class="col-auto">
		              <div class="btn-list">
				        <a href="{{ route('admin.university.show',$user->id)}}">
		              		<button class="btn btn-warning btn-sm text-white" type="submit">Colleges ({{$user->colleges->count()}})</button>
		              	</a>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		    @endforeach

		    <div class="paginate pt-4">
		    	{{$users->links()}}
		    </div>
		</div>
	@else
	@endif
</div>

@endsection