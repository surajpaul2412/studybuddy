@extends('layouts.backend.app')

@section('css')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">Add New Document</h2>
	    	</div>
	    	<div class="col-md-6 col-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('admin.legal.index')}}">Back</a>
	    	</div>
	    </div>
	</div>
	<div class="card mt-2">
	    <div class="card-body">
	      <form method="post" action="{{ route('admin.legal.store') }}" enctype="multipart/form-data">
	        @csrf
	      	<div class="row">
	      		<div class="col-md-12 col-12">
	      			<div class="row">
	      				<div class="col-md-12 col-12">
					        <div class="row">
					        	<div class="col-9 mt-3 form-group">
					        		<div class="form-group">
							          <label class="form-label">Title : <sup class="text-danger">*</sup></label>
							          <div >
							            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter legal Title" value="{{ old('title') }}" required>
							                @error('title')
							                    <span class="invalid-feedback" role="alert">
							                        <strong>{{ $message }}</strong>
							                    </span>
							                @enderror
							          </div>
							        </div>
						          <div class="mt-3">
						          	<label class="form-label">Slug : <sup class="text-danger">*</sup></label>
						            <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" placeholder="Enter legal Title" value="{{ old('slug') }}" required>
						                @error('slug')
						                    <span class="invalid-feedback" role="alert">
						                        <strong>{{ $message }}</strong>
						                    </span>
						                @enderror
						          </div>
						          	<div class="mt-3">
							          <label class="form-label">Status : <sup class="text-danger">*</sup></label>
							          <select class="form-control" name="is_active">
							          	<option value="0">Draft</option>
							          	<option value="1">Active</option>
							          </select>
						      		</div>
						        </div>
						        <div class="col-3 form-group">
						          <div id="uploadAvatar"></div>
					      			@error('thumbnail')
						                <span class="invalid-feedback" role="alert">
						                    <strong>{{ $message }}</strong>
						                </span>
						            @enderror
						        </div>
					        </div>
					        <div class="form-group mt-4">
					          <label class="form-label">Enter Description : <sup class="text-danger">*</sup></label>
					          <div>
					            <textarea name="description" id="summernote"></textarea>
					          </div>
					        </div>
					        <!-- meta -->
					        <div class="form-group mt-4">
					          <label class="form-label">Meta Title : <sup class="text-danger">*</sup></label>
					          <div >
					            <input id="meta_title" type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" placeholder="Enter legal Title" value="{{ old('meta_title') }}">
					                @error('meta_title')
					                    <span class="invalid-feedback" role="alert">
					                        <strong>{{ $message }}</strong>
					                    </span>
					                @enderror
					          </div>
					        </div>
					        <div class="form-group mt-4">
					          <label class="form-label">Enter Meta Keyword : <sup class="text-danger">*</sup></label>
					          <div>
					            <textarea name="meta_keyword" class="form-control" rows="4"></textarea>
					          </div>
					        </div>
					        <div class="form-group mt-4">
					          <label class="form-label">Enter Meta Description : <sup class="text-danger">*</sup></label>
					          <div>
					            <textarea name="meta_desription" class="form-control" rows="6"></textarea>
					          </div>
					        </div>
			      		</div>
	      			</div>
	      		</div>
	      	</div>

	        <div class="form-footer">
	          <button type="submit" class="btn btn-primary">Create Document</button>
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
	placeholder: "Add Description Here..."
});
</script>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>
<script type="text/javascript">
new Vue({
el: '#uploadAvatar',
template: `
           <div class="photo-upload">
          <div class="file-upload-form">
                <input
                      type="file"
                      @change="previewThumbnail"
                      name="thumbnail" required
                      id="photo-upload-button"
                      accept="image/*"
                      class="input-file"
                />
                <label for="photo-upload-button">Upload Thumbnail</label>
          </div>
          <div
                class="image-preview"
                v-if="imageData.length > 0"
          >
                <img
                      :src="imageData"
                      class="image-preview__img"
                >
          </div>
    </div>
  `,
data: function returnImageData() {
  return {
    imageData: ''
  };
},
methods: {
  previewThumbnail: function getPreview(event) {
    const input = event.target;

    if (input.files && input.files[0]) {
      const reader = new FileReader();

      reader.onload = e => {
        this.imageData = e.target.result;
      };

      reader.readAsDataURL(input.files[0]);
    }
  }
}
});
</script>
@endsection