@extends('layouts.backend.app')

@section('css')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-8" align="left">
		    	<h2 class="page-title">Edit page</h2>
	    	</div>
	    	<div class="col-md-6 col-4" align="right">
	    		<a class="btn btn-info text-white" href="{{route('admin.page.index')}}">Back</a>
	    	</div>
	    </div>
	</div>
	<div class="card mt-3">
    <div class="card-body">
      <form method="post" action="{{ route('admin.page.update', $page->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
      	<div class="row">
      		<div class="col-md-12 col-12">
      			<div class="row">
      				<div class="col-md-12 col-12">
		      			<div class="form-group mt-3">
				          <label class="form-label">Enter page Title : <sup class="text-danger">*</sup></label>
				          <div >
				            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter page Title" value="{{$page->title}}" required>
				                @error('title')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
				          </div>
				        </div>
				        <div class="form-group mt-4">
				          <label class="form-label">Enter page Content : <sup class="text-danger">*</sup></label>
				          <div>
				            <textarea name="content" id="summernote">{{$page->content}}</textarea>
			                @error('content')
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
          <button type="submit" class="btn btn-primary">Update page</button>
        </div>
      </form>
    </div>
  </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$('#summernote').summernote({
	tabsize: 2,
	height: 300,
	placeholder: "Enter Content Here..."
});
</script>
@endsection