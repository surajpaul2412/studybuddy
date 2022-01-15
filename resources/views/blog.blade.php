@extends('layout.app')
@section('content')

	<!-- Start: breadcrumbs -->
	<section class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Blog</h2>
					<p>Home / Blog</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Start: breadcrumbs -->
		
	<!-- Start: Main Content -->
	<section class="content gray-bg">
		<div class="container">
		    <div class="row">
                <!-- blog content-->
                <div class="col-md-8"> 
                    @if(isset($blogs)) 
                        @foreach($blogs as $blog)
                        <!-- article> --> 
                        <article class="post-article">
                            <div class="list-single-main-media fl-wrap">
                                <img src="{{asset('blogimg/'.$blog->image)}}" class="respimg" alt="{{$blog->title}}">
                            </div>
                            <div class="list-single-main-item fl-wrap block_box">
                                <h2 class="post-opt-title"><a href="{{url('blog-single')}}/{{$blog->id}}">{{$blog->title}}</a></h2>
                                <p align="justify">{{substr($blog->discripiton, 0, 250)}}...</p>
                                <span class="fw-separator"></span>
                                <div class="post-author"><a href="#"><img src="{{asset('assets/img/sm-3.jpg')}}" alt=""><span>By , {{$blog->name}}</span></a></div>
                                <div class="post-opt">
                                    <ul class="no-list-style">
                                        <li><i class="fa fa-calendar"></i> <span>{{date('d F Y',strtotime($blog->date))}}</span></li>
                                        <li><i class="fa fa-eye"></i> <span>264</span></li>
                                        <li><i class="fa fa-tags"></i> <a href="#">Photography</a> , <a href="#">Design</a> </li>
                                    </ul>
                                </div>
                                <a href="{{url('blog/'.$blog->id)}}" class="btn btn-success">Read more <i class="fa fa-angle-right"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <!-- article end --> 
                        @endforeach
                    @endif
                

                    <!--<div class="pagination">-->
                    <!--    <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i><span>Prev</span></a>-->
                    <!--    <a href="#">1</a>-->
                    <!--    <a href="#" class="current-page">2</a>-->
                    <!--    <a href="#">3</a>-->
                    <!--    <a href="#">...</a>-->
                    <!--    <a href="#">7</a>-->
                    <!--    <a href="#" class="nextposts-link"><span>Next</span><i class="fa fa-caret-right"></i></a>-->
                    <!--</div>-->

                </div>
                <!-- blog conten end-->

                <!-- blog sidebar -->
                <div class="col-md-4">
                    <div class="box-widget-wrap fl-wrap fixed-bar fixbar-action scroll-to-fixed-fixed">                                   
                        <!--box-widget-item -->
                        <!--<div class="box-widget-item fl-wrap block_box">-->
                        <!--    <div class="box-widget-item-header">-->
                        <!--        <h3>Categories</h3>-->
                        <!--    </div>-->
                        <!--    <div class="box-widget fl-wrap">-->
                        <!--        <div class="box-widget-content">-->
                        <!--            <ul class="cat-item no-list-style">-->
                        <!--                <li><a href="#">Standard</a> <span>3</span></li>-->
                        <!--                <li><a href="#">Video</a> <span>6 </span></li>-->
                        <!--                <li><a href="#">Gallery</a> <span>12 </span></li>-->
                        <!--                <li><a href="#">Quotes</a> <span>4</span></li>-->
                        <!--            </ul>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--box-widget-item end -->                                   
                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap block_box">
                            <div class="box-widget-item-header">
                                <h3>Recent Posts</h3>
                            </div>
                            <div class="box-widget  fl-wrap">
                                <div class="box-widget-content">
                                    <!--widget-posts-->
                                    <div class="widget-posts  fl-wrap">
                                        <ul class="no-list-style">
                                            @if(isset($blogs))
                                                @foreach($blogsdata as $blog)
                                                <li>
                                                    <div class="widget-posts-img"><a href="{{url('blog-single')}}"><img src="{{asset('blogimg/'.$blog->image)}}" alt="{{$blog->title}}"></a></div>
                                                    <div class="widget-posts-descr">
                                                        <h4 style="font-size: 14px !important;"><a href="{{url('blog-single')}}/{{$blog->id}}">{{$blog->title}}</a></h4>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fa fa-calendar"></i> {{date('d F Y',strtotime($blog->date))}}</a></div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            @endif
                                            
                                          
                                        </ul>
                                    </div>
                                    <!-- widget-posts end-->
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->                                  
                    </div>
                </div>
                <!-- blog sidebar end -->
            </div>
		</div>
		<!--container--> 
	</section>