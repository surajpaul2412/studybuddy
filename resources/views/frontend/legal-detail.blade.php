@extends('layouts.frontend.app')
@section('metas')
<title>Legal | Fly</title>
@endsection
@section('content')
<section class="page_heading_section legal_heading">
    <div class="container">
        <h1 class="title">Legal</h1>
        <p>Follow our stories and unique insights!</p>
        @include('layouts.frontend.partials.counter')
    </div>
</section>
<section class="legal_listing detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-6 col-sm-6 col-12">
                <div class="single">
                    <figure>
                        <img src="{{asset('uploads/document_thumbnails')}}/{{$legal->thumbnail}}" />
                    </figure>
                    <div class="content">
                        <p class="date">{{$legal->created_at->format('M d, Y')}} </p>
                        <h4 class="title">
                            {!! $legal->title !!}
                        </h4>
                        <p>{!! $legal->description !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <h4>Recent Posts</h4>
                <ul>
                    @php
                    use App\Models\Legal;
                    $legals = Legal::whereIsActive(1)->paginate(4);
                    @endphp
                    @foreach($legals as $legal)
                    <li>
                        <span>{{$legal->created_at->format('M d, Y')}}</span>
                        <label><a href="{{route('legal-detail',$legal)}}">{!! $legal->title !!}</a></label>
                        <p>{!! \Illuminate\Support\Str::limit($legal->description, 70, $end='...') !!}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div align="center"></div>
    </div>
</section>
@endsection
