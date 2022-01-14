@extends('layouts.frontend.app')

@section('metas')
<title>Legal | Fly</title>
@endsection

@section('content')
<section class="page_heading_section legal_heading">
    <div class="container">
        <h1 class="title">Legal Documentations</h1>
        @include('layouts.frontend.partials.counter')
    </div>
</section>

@php
use App\Models\Legal;
$legals = Legal::whereIsActive(1)->paginate(9);
@endphp
<section class="legal_listing">
    <div class="container">
        <div class="row">
            @foreach($legals as $legal)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single">
                    <figure>
                        <a href="{{route('legal-detail',$legal)}}">
                            <img src="{{asset('uploads/document_thumbnails')}}/{{$legal->thumbnail}}" />
                        </a>
                    </figure>
                    <div class="content">
                        <p class="date">{{$legal->created_at->format('M d, Y')}} </p>
                        <h4 class="title">
                            <a href="{{route('legal-detail',$legal)}}">{{$legal->title}}</a>
                        </h4>
                        <!-- <p>{{ \Illuminate\Support\Str::limit($legal->description, 180, $end='...') }}</p> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div align="center">
            {{$legals->links()}}
        </div>

        <a href="javascript:void(0)" class="dark_btn more_btn"
            >See More</a
        >
    </div>
</section>
@endsection
