<div class="col-md-12 col-12">
	@if(session()->get('success'))
	  <div class="alert alert-success">
	    {{ session()->get('success') }}  
	  </div><br/>
	@endif
	@if (session('error'))
	<div class="alert alert-danger">{{ session('error') }}</div>
	@endif
</div>