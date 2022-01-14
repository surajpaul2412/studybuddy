@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">Add New College</h2>
	    	</div>
	    	<div class="col-md-6 col-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('admin.university.show', $id)}}">Back</a>
	    	</div>
	    </div>
	</div>
	<div class="card mt-2">
	    <div class="card-body">
	      <form method="post" action="{{ route('admin.university.showStore',$id) }}">
	        @csrf
	      	<div class="row">
	      		<div class="col-md-12 col-12">
	      			<div class="row">
	      				<div class="col-md-12 col-12">
			      			<div class="form-group">
					          <label class="form-label">Enter College Name : <sup class="text-danger">*</sup></label>
					          <div >
					            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter College Name" value="{{ old('name') }}" required>
					                @error('name')
					                    <span class="invalid-feedback" role="alert">
					                        <strong>{{ $message }}</strong>
					                    </span>
					                @enderror
					          </div>
					        </div>
			      		</div>
	      			</div>
	      		</div>
	      	</div>

	        <div class="form-footer">
	          <button type="submit" class="btn btn-primary">Create College</button>
	        </div>
	      </form>
	    </div>
	</div>
</div>
@endsection