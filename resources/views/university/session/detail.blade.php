@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<style type="text/css">
	label{
		color: #6387ee;
	}
</style>
@endsection

@section('content')
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12" align="left">
		    	<h2 class="page-title">Session Details :</h2>
	    	</div>
	    	<div class="col-md-6 col-12" align="right">
		    	<a class="btn btn-info" href="{{route('university.session.index')}}">Back</a>
	    	</div>
	    </div>
	</div>
	@if($session->count())
		<div class="card p-3">
			@if($session->is_organized_by == 1)
			<h2 class="text-info fort-weight-bold" align="center">-- Private Session --</h2>
			@else
			<h2 class="text-info fort-weight-bold" align="center">-- University Session --</h2>
			@endif
			<div class="row">
				<div class="col-md-12 font-weight-bold">
					<div class="pt-2">
						<label>Tutor Name:</label>
						{{$session->tutor->full_name}}
					</div>
					@if($session->is_organized_by == 1)
					<div class="pt-2">
						<label>Student Name:</label>
						{{$session->author->full_name}}
					</div>
					@endif
					<div class="pt-2">
						<label>Session Title:</label>
						{{$session->name}}
					</div>
					<div class="pt-2">
						<label>Message:</label>
						{{$session->message}}
					</div>
					<div class="pt-2">
						<label>Description:</label>
						{{$session->description}}
					</div>
					<div class="pt-2">
						<label>Subject:</label>
						{{$session->subject->name}}
					</div>
					<div class="pt-2">
						<label>Start Date Time:</label>
						{{$session->start_date_time}}
					</div>
					<div class="pt-2">
						<label>End Date Time:</label>
						{{$session->end_date_time}}
					</div>
					@if($session->is_organized_by == 0)
					<div class="pt-2">
						<label>Amount:</label>
						"Free"
					</div>
					@else
					<div class="pt-2">
						<label>Amount:</label>
						{{$session->income}}
					</div>
					@endif
					@if($session->backpack_id)
					<div class="pt-2">
						<label>Backpack:</label><br>
						@foreach($session->backpack->backpackItems as $item)
						<a href="{{asset('storage')}}/{{$item->file_url}}" download>
							<img src="{{asset('img/pdf.png')}}" class="img-fluid mt-3" width="50px">
						</a>
						@endforeach
					</div>
					@else
					@endif
					@if($session->is_organized_by == 0)
						<div class="pt-2">
							<label>Attendance:</label>{{$session->attendance->count()}} Students
							<br>
							@foreach($session->attendance as $attendance)
							> {{$attendance->user->full_name}}<br>
							@endforeach
						</div>
					@endif

					<div class="pt-2 row">
						<label>Reviews :</label>
						<br>
						@if($session->reviews->count())
							@foreach($session->reviews as $key => $review)
								@if($review->reviewer->role_id == 3)
									<div class="bg-success col-md-6 col-12 mt-3 p-3" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-top-left-radius: 15px;">
										by {{$review->reviewer->full_name}}<br>
										@php
										$starRange = range(1, $review->star);
										@endphp
										@foreach($starRange as $star)
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffec00" fill="#ffec00" stroke-linecap="round" stroke-linejoin="round">
											  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
											</svg>
										@endforeach
										<br>
										<i>-- {{$review->review}}</i>
									</div>
									<div class="col-md-6 col-12"></div>
								@endif
								@if($review->reviewer->role_id == 4)
									<div class="col-md-6 col-12"></div>
									<div class="bg-info col-md-6 col-12 mt-3 p-3" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;border-top-right-radius: 15px; ">
										by {{$review->reviewer->full_name}}<br>
										@php
										$starRange = range(1, $review->star);
										@endphp
										@foreach($starRange as $star)
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffec00" fill="#ffec00" stroke-linecap="round" stroke-linejoin="round">
											  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											  <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
											</svg>
										@endforeach
										<br>
										<i>-- {{$review->review}}</i>
									</div>
								@endif
							@endforeach
						@else
							No Reviews.
						@endif
					</div>
				</div>
			</div>
		</div>
	@else
		<div align="center">
			<h3>No Student mark attending.</h3>
		</div>
	@endif
</div>
@endsection