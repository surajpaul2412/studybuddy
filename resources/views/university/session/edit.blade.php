@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">Edit Session</h2>
	    	</div>
	    	<div class="col-md-6 col-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('university.session.index')}}">Back</a>
	    	</div>
	    </div>
	</div>
	<div class="card mt-2">
	    <div class="card-body">
	      <form method="post" action="{{ route('university.session.update', $session->id) }}" enctype="multipart/form-data">
	        @csrf
	        @method('PATCH')
	      	<div class="row">
	      		<div class="col-md-12 col-12">
	      			<div class="row">
	      				<div class="col-md-12 col-12 mt-2">
			      			<div class="form-group">
					          <label class="form-label">Enter Session Title : <sup class="text-danger">*</sup></label>
					          <div >
					            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Session Name" value="{{$session->name}}" required>
					                @error('name')
					                    <span class="invalid-feedback" role="alert">
					                        <strong>{{ $message }}</strong>
					                    </span>
					                @enderror
					          </div>
					        </div>
			      		</div>
			      		<div class="col-md-12 col-12 mt-3">
			      			<div class="form-group">
					          <label class="form-label">Session Description :</label>
					          <div>
					          	<textarea class="form-control @error('description') is-invalid @enderror" rows="8" name="description" placeholder="Enter Session Description">{{$session->description}}</textarea>
					                @error('description')
					                    <span class="invalid-feedback" role="alert">
					                        <strong>{{ $message }}</strong>
					                    </span>
					                @enderror
					          </div>
					        </div>
			      		</div>
			      		<div class="col-md-12 col-12 mt-3">
			      			<div class="form-group">
					          <label class="form-label">Enter Message :</label>
					          <div >
					            <input id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Enter Message" value="{{$session->message}}">
					                @error('message')
					                    <span class="invalid-feedback" role="alert">
					                        <strong>{{ $message }}</strong>
					                    </span>
					                @enderror
					          </div>
					        </div>
			      		</div>
			      		<div class="col-md-4 col-12 mt-3">
			      			<div class="form-group">
					          <label class="form-label">Select Tutor : <sup class="text-danger">*</sup></label>
					          <div>
					          	<select class="form-control" name="tutor" value="{{ old('tutor') }}" required>
					          		<option value="">-- Select Tutor --</option>
					          		@foreach($tutors as $tutor)
					          		<?php
							            $selected = '';
							            if($tutor->id == $session->tutor_id)
							            { $selected = 'selected="selected"';}
							        ?>
					          		<option value="{{$tutor->id}}" {{$selected}}>{{$tutor->first_name}} {{$tutor->last_name}}</option>
					          		@endforeach
					          	</select>
				                @error('tutor')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
					          </div>
					        </div>
			      		</div>
			      		<div class="col-md-4 col-12 mt-3">
			      			<div class="form-group">
					          <label class="form-label">Select Subject : <sup class="text-danger">*</sup></label>
					          <div>
					          	<select class="form-control" name="subject" value="{{ old('subject') }}" required>
					          		<option value="">-- Select Subject --</option>
					          		@foreach($subjects as $subject)
					          		<?php
							            $selected = '';
							            if($subject->id == $session->subject_id)
							            { $selected = 'selected="selected"';}
							        ?>
					          		<option value="{{$subject->id}}" {{$selected}}>{{$subject->name}}</option>
					          		@endforeach
					          	</select>
				                @error('subject')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
					          </div>
					        </div>
			      		</div>
			      		<div class="col-md-4 col-12 mt-3"></div>
			      		<div class="col-md-4 col-12 mt-3">
			      			<div class="form-group">
					          <label class="form-label">Session Start timings : <sup class="text-danger">*</sup></label>
					          <div >
					            <input id="start_date_time" type="datetime-local" class="form-control @error('start_date_time') is-invalid @enderror" name="start_date_time" required value="{{ date('Y-m-d\TH:i', strtotime($session->start_date_time)) }}">
					                @error('start_date_time')
					                    <span class="invalid-feedback" role="alert">
					                        <strong>{{ $message }}</strong>
					                    </span>
					                @enderror
					          </div>
					        </div>
			      		</div>
			      		<div class="col-md-4 col-12 mt-3">
			      			<div class="form-group">
					          <label class="form-label">Session Closing timings : <sup class="text-danger">*</sup></label>
					          <div >
					            <input id="end_date_time" type="datetime-local" class="form-control @error('end_date_time') is-invalid @enderror" name="end_date_time" required value="{{ date('Y-m-d\TH:i', strtotime($session->end_date_time)) }}">
					                @error('end_date_time')
					                    <span class="invalid-feedback" role="alert">
					                        <strong>{{ $message }}</strong>
					                    </span>
					                @enderror
					          </div>
					        </div>
			      		</div>
			      		<div class="col-md-12 col-12 mt-3">
			      			<div class="form-group">
					          <label class="form-label">Upload Backpack :</label>
					          	<div id="items">
					          		@if($session->backpack)
					          		@foreach($session->backpack->backpackItems as $item)
					          		<div class="next-referral py-2">
					            		<input id="files" type="hidden" class="form-control @error('files') is-invalid @enderror" name="old_files[]" value="{{$item->file_url}}">
					            		<a href="{{asset('storage')}}/{{$item->file_url}}" download>
					            			<img src="{{asset('img/pdf.png')}}" class="img-fluid" width="50px">
					            		</a>
					            	</div>

					            	@endforeach
					            	@endif

					                @error('files')
					                    <span class="invalid-feedback" role="alert">
					                        <strong>{{ $message }}</strong>
					                    </span>
					                @enderror
					          	</div>
					            <a id="add" class="btn btn-info" type="button">+ Add another .pdf</a>
					            <a class="delete btn btn-danger">- Remove .pdf</a>
					        </div>
			      		</div>
	      			</div>
	      		</div>
	      	</div>

	        <div class="form-footer">
	          <button type="submit" class="btn btn-primary">Update Session</button>
	        </div>
	      </form>
	    </div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  // $(".delete").hide();
  //when the Add Field button is clicked
  $("#add").click(function(e) {
    $(".delete").fadeIn("1500");
    //Append a new row of code to the "#items" div
    $("#items").append(
      '<div class="next-referral"><input id="files" type="file" class="form-control" name="files[]" accept="application/pdf"></div>'
    );
  });
  $("body").on("click", ".delete", function(e) {
    $(".next-referral").last().remove();
  });
});
</script>
@endsection