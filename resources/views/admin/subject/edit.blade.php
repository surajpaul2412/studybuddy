@extends('layouts.backend.app')

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-8" align="left">
		    	<h2 class="page-title">Edit Subject</h2>
	    	</div>
	    	<div class="col-md-6 col-4" align="right">
	    		<a class="btn btn-info text-white" href="{{route('admin.subject.index')}}">Back</a>
	    	</div>
	    </div>
	</div>
	<div class="card mt-3">
    <div class="card-body">
      <form method="post" action="{{ route('admin.subject.update', $subject->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
      	<div class="row">
      		<div class="col-md-12 col-12">
      			<div class="row">
      				<div class="col-md-12 col-12">
		      			<div class="form-group">
				          <label class="form-label">Enter Subject Name : <sup class="text-danger">*</sup></label>
				          <div >
				            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Subject Name" value="{{$subject->name}}" required>
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
          <button type="submit" class="btn btn-primary">Update Subject</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection