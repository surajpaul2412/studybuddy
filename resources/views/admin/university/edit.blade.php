@extends('layouts.backend.app')

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-8" align="left">
		    	<h2 class="page-title">Edit University</h2>
	    	</div>
	    	<div class="col-md-6 col-4" align="right">
	    		<a class="btn btn-info text-white" href="{{route('admin.university.index')}}">Back</a>
	    	</div>
	    </div>
	</div>
	<div class="card mt-3">
    <div class="card-body">
      <form method="post" action="{{ route('admin.university.update', $user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
      	<div class="row">
      		<div class="col-md-9 col-12">
      			<div class="row">
      				<div class="col-md-6 col-12">
		      			<div class="form-group mb-3 ">
				          <label class="form-label">Enter University Name : <sup class="text-danger">*</sup></label>
				          <div >
				            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="Enter University Name" value="{{$user->first_name}}" required>
				                @error('first_name')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
				          </div>
				        </div>
		      		</div>
		      		<div class="col-md-6 col-12">
		      			<div class="form-group mb-3 ">
				          <label class="form-label">Email address : <sup class="text-danger">*</sup></label>
				          <div >
				            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{$user->email}}" required autocomplete="email">
				                @error('email')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
				          </div>
				        </div>
		      		</div>
		      		<div class="col-md-3 col-12">
		      			<div class="form-group mb-3 ">
				          <label class="form-label">Telephone number : <sup class="text-danger">*</sup></label>
				          <div>
				            <input id="phonemobile" type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="Enter Telephone Number" value="{{$user->mobile}}" autocomplete="mobile" required>
			                @error('mobile')
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                @enderror
				          </div>
				        </div>
		      		</div>
		      		<div class="col-md-3 col-12">
		      			<div class="form-group mb-3 ">
				          <label class="form-label">Country : <sup class="text-danger">*</sup></label>
				          <div >
				            <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" placeholder="Enter Country" value="{{$user->country}}" required autocomplete="country" autofocus>
			                @error('country')
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                @enderror
				          </div>
				        </div>
		      		</div>
		      		<div class="col-md-3 col-12">
		      			<div class="form-group mb-3 ">
				          <label class="form-label">City : <sup class="text-danger">*</sup></label>
				          <div >
				            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Enter City" value="{{$user->city}}" required autocomplete="city" autofocus>
			                @error('city')
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                @enderror
				          </div>
				        </div>
		      		</div>
		      		<div class="col-md-3 col-12">
		      			<div class="form-group mb-3 ">
				          <label class="form-label">Email Domain : <sup class="text-danger">*</sup></label>
				          <div >
				            <input id="email_domain" type="text" class="form-control @error('email_domain') is-invalid @enderror" name="email_domain" placeholder="Enter Email Domain" value="{{$user->email_domain}}" required autocomplete="email_domain" autofocus>
			                @error('email_domain')
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                @enderror
				          </div>
				        </div>
		      		</div>
		      		<div class="col-md-12">
		      			<div class="form-group mb-3 ">
				          <label class="form-label">Password :<sup class="text-danger">* change only if required</sup></label>
				          <div>
				            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="new-password">
				            @error('password')
				                <span class="invalid-feedback" role="alert">
				                    <strong>{{ $message }}</strong>
				                </span>
				            @enderror
				          </div>
				        </div>
		      		</div>
		      		<div class="col-md-12">
		      			<div class="form-group mb-3 ">
				          <label class="form-label">Confirm Password : <sup class="text-danger">*</sup></label>
				          <div>
				            <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">
				            @error('password_confirmation')
				                <span class="invalid-feedback" role="alert">
				                    <strong>{{ $message }}</strong>
				                </span>
				            @enderror
				            <small class="form-hint">
				              Your password must be 8-20 characters long, contain letters and numbers, and must not contain
				              spaces, special characters, or emoji.
				            </small>
				          </div>
				        </div>
		      		</div>
      			</div>
      		</div>
      		<div class="col-md-3 col-12">
      			<div id="uploadAvatar"></div>
      			@error('avatar')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
				<input type="hidden" name="hidden_avatar" value="{{ $user->avatar }}">
      		</div>
      	</div>

        <div class="form-footer">
          <button type="submit" class="btn btn-primary">Update University</button>
        </div>
      </form>
    </div>
  </div>
</div>
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
                      name="avatar"
                      id="photo-upload-button"
                      accept="image/*"
                      class="input-file"
                />
                <label for="photo-upload-button">Upload New Avatar</label><br/><br/>
                @if(isset($user->avatar))
                <label for="photo-upload-button">Old Image</label>
                <img class="px-4 w-100 preview-avatar" src="{{asset('uploads/avatar/')}}/{{$user->avatar}}"/>
                @endif
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