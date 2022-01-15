@extends('layout.app')
@section('content')
	@if(isset($_REQUEST['msg']))
		<script>
		    alert("Your Registration has been submitted successful !");  // display string message
        </script>
    @endif


	<!-- Start: Registration Modal -->
	<div class="modal fade" id="register" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	    <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Register Now</h4>
	        </div>
	        <div class="modal-body">
	          

				<form class="form-horizontal" action="{{route('register')}}" method="post">
					<div class="row" style="margin: 0px;">
						<div class="col-md-12">
						    
						    <div class="form-group">
						      <!-- Username -->
						      <label class="control-label"  for="Name">Name</label>
						      <div class="controls">
						        <input type="text" id="name" name="name" placeholder="" class="form-control" required>
						      </div>
						    </div>
						 
						    <div class="form-group">
						      <!-- E-mail -->
						      <label class="control-label" for="email">E-mail</label>
						      <div class="controls">
						        <input type="email" id="email" name="email" placeholder="" class="form-control" required>
						      </div>
						    </div>
						 
						    <div class="form-group">
						      <!-- Password-->
						      <label class="control-label" for="password">Company</label>
						      <div class="controls">
						        <input type="text" id="Company" name="company" placeholder="" class="form-control" required>
						      </div>
						    </div>
						 
						    <div class="form-group">
						      <!-- Password -->
						      <label class="control-label"  for="password_confirm">Are you interested in</label>
						      <div class="controls">
						        <select  name="category" class="form-control" required>
						        	<option value="">Select</option>
						        	<option value="Designer">Designer</option>
						        	<option value="Wholesaler">Wholesaler</option>
						        	<option value="Retailer">Retailer</option>
						        	<option value="Manufacturer">Manufacturer</option>
						        </select>
						      </div>
						    </div>
						 
						    <div class="form-group">
						      <!-- Button -->
						      <div class="controls">
							  <input type="submit" name="submit" value="submit" class="btn btn-success btn-block">
						      </div>
						    </div>
						</div>
					</div>
				</form>


	        </div>
	      </div>
	      
	    </div>
	</div>
	<!-- End: Registration Modal --> 

	<!-- Start: Slider -->
	<section class="main-banner"> 
		<!-- <div class="owl-carousel owl-theme home-slider" id="owl-home">
	   <div class="item">
	      <img src="assets/img/slider-img-1.jpg">
	    </div>
	    <div class="item">
	      <img src="assets/img/slider-img-2.jpg">
	    </div>
	    <div class="item">
	      <img src="assets/img/slider-img-3.jpg">
	    </div>
	    </div> --> 
		
		<!-- ++++++++++++++++++++++++++++++++++++++++ -->
		
		<div class="slider-content">
			<div class="row">
				<div class="col-sm-12">
					<h2>The best <span>fashion designer</span>, in their <span>Great moment</span>.</h2>
					<p>Getting a quick EXPERT has never been easier</p>
					<a href="#" class="btn btn-grey slider-btn" data-toggle="modal" data-target="#register"> Join Now  </a> </div>
			</div>
		</div>
		<a href="#section-steps" class="mouse"></a> </section>
	<!-- Start: Slider -->
		
	<!-- Start: Quick results -->
	<section class="steps" id="section-steps">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-header wow fadeInUp" data-wow-duration="2">
						<p class="subhead">Quick results</p>
						<h2>Find the level of service that works for you</h2>
						<p class="large">Each option includes access to collar's large pool of top-quality fashion designer. Choose the best level of service you need. 						Post your project and receive competitive bids from freelancers within minutes. Our reputation system will make it easy to find the perfect freelancer for your job. It's the simplest and safest way to get work done online.</p>
						<p class="large">we have millions of freelancers fashion designer for thousands of freelance  jobs: for women's apparel, men apprel, kids apparel product manufacturing and wholesaler.Whatever your needs, there will be a freelancer to get it done.</p>
					</div>
				</div>
			</div>
			<!--row-->
			<div class="row">
				<div class="col-md-4 wow fadeInUp " data-wow-duration="2s">
					<article>
						<div class="striped-icon-small" >1</div>
						<img src="assets/img/step-1.png" alt="icon" />
						<h5>Post your project</h5>
						<p>it's always free to post your project.Invite our freelancers to submit bids,or browse relevant freelancers and make an offer.You'll have replies to your job within minutes!.</p>
					</article>
				</div>
				<div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
					<article>
						<div class="striped-icon-small">2</div>
						<img src="assets/img/connect.png" alt="icon" />
						<h5>Choose the perfect freelancer fashion designer </h5>
						<p>browse freeancer profiles chat in real-time compare proposals and select the best one award your project and your freelancer goes to work.
							</p>
					</article>
				</div>
				<div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
					<article>
						<div class="striped-icon-small">3</div>
						<img src="assets/img/move.png" alt="icon" />
						<h5>Pay when you are satisfied!</h5>
						<p>Pay safely using our Milestone Payment system-release payments according to a schedule of goals you set,or pay only upon completion.you are in control,so you get to make the decisions.</p>
					</article>
				</div>
			</div>
			<!--row--> 
		</div>
		<!--container--> 
	</section>
	<!-- End: Quick results -->

	<!-- Start: Ready to start immediately -->
	<section id="ready" class="price blog"> <a class="striped-icon divider scroll" href="#ready"> <i class="fa fa-chevron-down"></i> </a>
		<div class="container">
		
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-header   wow fadeInUp" data-wow-duration="2s">
						<p class="subhead">World's top fashion designer</p>
						<h2>Ready to start immediately</h2>
						<p class="large">Exclusivity & accessible pricing crack world's niche designer faction marketplace "Key factors to be a preferred supplier are organizational structure, workforce, financial strenght & reputation. Commitment, Quality and price are main essentials in a preferred supplier".</p>
					</div>
				</div>
			</div>
			<!--row-->
			
			<div class="row">
				<div class="col-md-12  wow fadeInUp" data-wow-duration="2s">
					<div class="owl-carousel owl-theme pack-slider" id="new-launch">
						<div class="item">
							<div class="post">
								<div class="post-heading"> <a class="post-image" href="#"> <img src="assets/img/3.jpg" alt="post" /> </a> <a class="post-avatar"  href="#"> <img class="" src="assets/img/sm-1.jpg" alt="avatar" /> </a> </div>
								<div class="post-body">
									<ul class="list-inline">
										<li><i class="fa fa-globe"></i>Japan</li>
										<li><i class="fa fa-usd"></i>259/hours</li>
									</ul>
									<a href="#" class="styl-hed">
									<h5>Robin Sharma</h5>
									</a>
									<p> I chose COLLAR "how to start a fashion business"and many little interviews with actual designers. Lets not forget the great price..</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="post">
								<div class="post-heading"> <a class="post-image" href="#"> <img src="assets/img/6.jpg" alt="post" /> </a> <a class="post-avatar"  href="#"> <img class="" src="assets/img/sm-2.jpg" alt="avatar" /> </a> </div>
								<div class="post-body">
									<ul class="list-inline">
								<li><i class="fa fa-globe"></i>China</li>
								<li><i class="fa fa-usd"></i>259/hours</li>
							</ul>
									<a href="#" class="styl-hed"><h5>Rahul Dua</h5></a>
									<p>Very good PLACE, explaining the inside workings of the fashion design world to beginners to expet</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="post">
								<div class="post-heading"> <a class="post-image" href="#"> <img src="assets/img/5.jpg" alt="post" /> </a> <a class="post-avatar"  href="#"> <img class="" src="assets/img/sm-3.jpg" alt="avatar" /> </a> </div>
								<div class="post-body">
									<ul class="list-inline">
								<li><i class="fa fa-globe"></i>China</li>
								<li><i class="fa fa-usd"></i>259/hours</li>
							</ul>
									<a href="#" class="styl-hed"><h5>Deepak Shikka</h5></a>
									<p> Just was not what I expected, It seems like it great place fordesigners.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="post">
								<div class="post-heading"> <a class="post-image" href="#"> <img src="assets/img/5.jpg" alt="post" /> </a> <a class="post-avatar"  href="#"> <img class="" src="assets/img/sm-3.jpg" alt="avatar" /> </a> </div>
								<div class="post-body">
									<ul class="list-inline">
								<li><i class="fa fa-globe"></i>China</li>
								<li><i class="fa fa-usd"></i>259/hours</li>
							</ul>
									<a href="#" class="styl-hed"><h5>Sanjay gava</h5></a>
									<p> I can't believe hiring a fashion desginer is so easy thanks COLLAR .</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--row--> 
			
		</div>
		<!--container-->
		
		<div class=
			<button type="button" class="btn btn-info btn-round-brdr"></button>
		</div>
	</section>
	<!-- End: Ready to start immediately -->

	<!-- Start: Mobile App Download -->
	<section class="application" id="application"> <a class="striped-icon divider scroll" href="#application"> <i class="fa fa-chevron-down"></i> </a>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-header  wow fadeInUp" data-wow-duration="2s">
						<p class="subhead">always at hand</p>
						<h2>Mobile App Download</h2>
						<ul class="list-inline text-center">
							<li> <a href="#"><img src="assets/img/googleplay-logo.png" alt="button" /></a> </li>
							<li> <a  href="https://itunes.apple.com/us/app/colar/id1350649389?ls=1&mt=8"><img src="assets/img/appstore-logo.png" alt="button" /></a> </li>
							<li> <a  href="#" data-toggle="modal" data-target="#register"><img src="assets/img/registration.png" alt="button" /></a> </li>
						</ul>
					</div>
				</div>
			</div>
			<!--row-->
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="app-features left-features  wow fadeInUp" data-wow-duration="2s">
						<h5>Post a job to Tell us about your project. </h5>
						<p>Well'll quickly match you with the right fashion designer.</p>
						<div class="striped-icon-large"> <span aria-hidden="true" class="icon-cloud-download"></span> </div>
					</div>
					<div class="app-features left-features  wow fadeInUp" data-wow-duration="2s">
						<h5>Browse profiles, reviews and proposals </h5>
						<p>the interview top candidates. Hire a Favorite and begin your project</p>
						<div class="striped-icon-large"> <span aria-hidden="true" class="icon-check"></span> </div>
					</div>
					<div class="app-features left-features  wow fadeInUp" data-wow-duration="2s">
						<h5>Use the collar platform to chat, </h5>
						<p>share file, and collaborate from your app or on the go.</p>
						<div class="striped-icon-large"> <span aria-hidden="true" class="icon-eye"></span> </div>
					</div>
				</div>
				<div class="col-md-4  wow fadeInUp" data-wow-duration="2s"> <img class="app-demo" src="assets/img/phone-6.png" alt="hand" /> </div>
				<div class="col-md-4 col-sm-6 ">
					<div class="app-features right-features  wow fadeInUp" data-wow-duration="2s">
						<h5>Just give us the details</h5>
						<p> of your project and our freelancers fashion designer will get it done faster<!--, better and cheaper then you could possible imagine. Your job can be as big or small as you like, and be fixed price or hourly. You can even specify the schedule, cost and milesstones-->.</p>
						<div class="striped-icon-large"> <span aria-hidden="true" class="icon-camera"></span> </div>
					</div>
					<div class="app-features right-features  wow fadeInUp" data-wow-duration="2s">
						<div class="striped-icon-large"> <span aria-hidden="true" class="icon-link"></span> </div>
						<h5>Invoicing and payments happen </h5>
						<p>through with collar Protection, only pay for work you authorize.</p>
					</div>
					<div class="app-features right-features  wow fadeInUp" data-wow-duration="2s">
						<h5> Work without limits</h5>
						<p>Watch how businesses are getting more done with freelancers.</p>
						<div class="striped-icon-large"> <span aria-hidden="true" class="icon-settings"></span> </div>
					</div>
				</div>
			</div>
			<!--row--> 
			
		</div>
		<!--container--> 
	</section>
	<!-- End: Mobile App Download -->

	<!-- Start: Twitter -->
	<section class="twitter dark parallax-section-3">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<article> <i class="fa fa-twitter"></i>
						<div id="twitter-carousel" class="owl-carousel owl-theme twitter-carousel">
							<div class="twitter-feed">
								<p>COLLAR are passionate about design. COLLAR design process involves finding out what you need from your clothing. They listen to your feedback and merge it with our design inspiration, to create beautiful, vibrant clothing, especially for you.</p>
								<footer>@Ravinder Singh <cite> 2 days ago</cite></footer>
							</div>
							<div class="twitter-feed">
								<p>COLLAR are passionate about design. COLLAR design process involves finding out what you need from your clothing. They listen to your feedback and merge it with our design inspiration, to create beautiful, vibrant clothing, especially for you.</p>
								<footer>@Suraj Kumar <cite> 1 days ago</cite></footer>
							</div>						
						</div>
					</article>
				</div>
			</div>
			<!--row--> 
		</div>
		<!--container--> 
	</section>
	<!-- End: Twitter -->

	<!-- Start: Our Blog -->
	<section class="blog mrgn-130 fashion-designer" id="blog"> <a class="striped-icon divider scroll" href="#blog"> <i class="fa fa-chevron-down"></i> </a>
		<div class="container">
			<div class="row"> 
				<div class="col-md-8 col-md-offset-2">
					<div class="section-header  wow fadeInUp" data-wow-duration="2s">
						<p class="subhead">Our blog</p>
						<h2>Fashion Designer / WholeSaler / Factory Owner</h2>
						<p class="large">Stay informed and get inspired with our newsletter</p>
					</div>
				</div>
			</div> 

			<div class="row"> 
	   			<div class="col-md-4 wow fadeInUp" data-wow-duration="2s">
					<div class="post">
						<div class="post-heading"> 
							<a class="post-image" href="#"> <img src="assets/img/1.jpg" alt="post" /> </a> 
							<a class="post-avatar"  href="blog-single.php"> <img class="" src="assets/img/sm-1.jpg" alt="avatar" /> </a> 
						</div>
						<div class="post-body">
							<ul class="list-inline">
								<li><i class="fa fa-globe"></i>China</li>
								<li><i class="fa fa-usd"></i>259/hours</li>
							</ul>
							<a href="blog-single.php"><h5>Shivendra Singh</h5></a>
							<p>The fashion industry is now fast moving. Before, trends come for a season. But I think that  COLLAR now goes by faster than ever before.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4  wow fadeInUp" data-wow-duration="2s">
					<div class="post">
						<div class="post-heading"> 
							<a class="post-image" href="blog-single.php"> <img src="assets/img/2.jpg" alt="post" /> </a> 
							<a class="post-avatar" href="#"> <img class="" src="assets/img/sm-2.jpg" alt="avatar" /> </a>
						</div>
						<div class="post-body">
							<ul class="list-inline">
								<li><i class="fa fa-globe"></i>France</li>
								<li><i class="fa fa-usd"></i>259/hours</li>
							</ul>
							<a href="blog-single.php"><h5>Harry Shukla</h5></a>
							<p>That’s absolutely true Aira! With such rapid changes in the fashion industry, one could only imagine what it will look like in 5-10 years.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4  wow fadeInUp" data-wow-duration="2s">
					<div class="post">
						<div class="post-heading"> 
							<a class="post-image" href="blog-single.php"> <img src="assets/img/4.jpg" alt="post" /> 
							</a> <a class="post-avatar" href="blog-single.php"> <img class="" src="assets/img/sm-3.jpg" alt="avatar" /> </a> 
						</div>
						<div class="post-body">
							<ul class="list-inline">
								<li><i class="fa fa-globe"></i>India</li>
								<li><i class="fa fa-usd"></i>259/hours</li>
							</ul>
							<a href="blog-single.php"><h5>Manu Rawat</h5></a>
							<p> COLLAR raises cash for fashion app that gives designers real-time consumer feedback</p>
						</div>
					</div>
				</div>  
			</div>  

			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="subscribe">
						<form class="form-inline clearfix">
							<input type="email" class="form-control pull-left" placeholder="Enter email">
							<button type="submit" class="btn btn-success btn-round pull-right hidden-xs">Subscribe</button>
							<button type="submit" class="btn btn-success btn-round-small pull-right visible-xs-block"> <i class="fa fa-pencil fa-lg"></i> </button>
						</form>
					</div>
				</div>
			</div>
			<!--row--> 
		</div>
		<!--container--> 
	</section>
	<!-- End: Our Blog --> 

	<!-- Start: Youtube video Section -->
	<section class=" mrgn-130 fashion-designer" id="youtube" style="background-color: #f5f5f5;"> 
		<a class="striped-icon divider scroll" href="#youtube"> <i class="fa fa-chevron-down"></i> </a>
		<div class="container">
			<div class="row">

				<div class="col-md-8 col-md-offset-2">
					<div class="section-header  wow fadeInUp" data-wow-duration="2s">
						<p class="subhead hide">Our blog</p>
						<h2>How to use COLAR. Manual Guide</h2>
						<p class="large">Stay informed and get inspired with Manual Guide</p>
					</div>
				</div>
			</div>
			<!--row-->		
			
			<div class="row  wow fadeInUp" data-wow-duration="2s">
				<div class="col-md-6 col-md-offset-3">
					<div class="video-container">
						<iframe width="500" height="250" src="https://www.youtube.com/embed/5OGvj1aQ2-k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				</div>
			</div>
			<!--row--> 
		</div>
		<!--container--> 
	</section>
	<!-- End: Youtube video Section --> 

	<!-- Start: What Clients Say? -->
	<section class="testimonials" id="testimonials"> <a class="striped-icon divider scroll" href="#testimonials"> <i class="fa fa-chevron-down"></i> </a>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-header wow fadeInUp" data-wow-duration="2s">
						<p class="subhead">about reviews</p>
						<h2>What Clients Say?</h2>
						<p class="large">COLLAR has allowed me to build a great distributed team and run a apparel resources  successfully.</p>
					</div>
				</div>
			</div>
			<!--row-->
			<div class="row">
				<div class="col-sm-12">
					<div id="testimonials-carousel">
						<div class="reviews">
							<div class="client left">
								<p class="large comment">BTW, thanks for the always brilliant online service and quality. Since moving to Melbourne from Sydney 10 years ago, I rely on the COLLAR APP or the option of phone ordering as I can no longer easily make physical visits to a store. Thus I am a highly frequent online user (multiple times daily), and even though I do not operate a related commercial operation, I have been meaning to submit my feedback re the COLLAR APP  for a long time. </p>
								<div class="media">
									<div class="media-left"> <a href="#"> <img class="avatar media-object " src="assets/img/sm-3.jpg" alt="avatar" /> </a> </div>
									<div class="media-body">
										<h5 class="media-heading">Ankit Panwar</h5>
										<p>Fashion Designer</p>
									</div>
								</div>
							</div>
							<div class="client right">
								<p class="large comment">Retailers across formats can improve the online experience by creating transparent, real-time communication channels for online transactions from the point of purchase to final delivery. As consumers continue to migrate to online channels, COLLAR is given such thanks collar team.</p>
								<div class="media">
									<div class="media-left"> <a href="#"> <img class="avatar media-object " src="assets/img/sm-4.jpg" alt="avatar" /> </a> </div>
									<div class="media-body">
										<h5 class="media-heading">Manu Saxena</h5>
										<p>Fashion Retailer</p>
									</div>
								</div>
							</div>
						</div>
						<!--reviews-->
						<div class="reviews">
							<div class="client left">
								<p class="large comment">BTW, thanks for the always brilliant online service and quality. Since moving to Melbourne from Sydney 10 years ago, I rely on the COLLAR APP or the option of phone ordering as I can no longer easily make physical visits to a store. Thus I am a highly frequent online user (multiple times daily), and even though I do not operate a related commercial operation, I have been meaning to submit my feedback re the COLLAR APP  for a long time.</p>
								<div class="media">
									<div class="media-left"> <a href="#"> <img class="avatar media-object " src="assets/img/sm-3.jpg" alt="avatar" /> </a> </div>
									<div class="media-body">
										<h5 class="media-heading">Ankit Panwar</h5>
										<p>Fashion Designer</p>
									</div>
								</div>
							</div>
							<div class="client right">
								<p class="large comment">Retailers across formats can improve the online experience by creating transparent, real-time communication channels for online transactions from the point of purchase to final delivery. As consumers continue to migrate to online channels, COLLAR is given such thanks collar team.</p>
								<div class="media">
									<div class="media-left"> <a href="#"> <img class="avatar media-object " src="assets/img/sm-4.jpg" alt="avatar" /> </a> </div>
									<div class="media-body">
										<h5 class="media-heading">Manu Saxena</h5>
										<p>Fashion Retailer</p>
									</div>
								</div>
							</div>
						</div>
						<!--reviews--> 
					</div>
					<!--carousel--> 
				</div>
			</div>
			<div class="brands hide">
				<div class="row no-gutter">
					<div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
						<div class="brand-logo"> <a class="brand-logo-wrap" href="#"> <img src="assets/img/client-1.jpg" alt="brand" /> </a> </div>
					</div>
					<div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
						<div class="brand-logo"> <a class="brand-logo-wrap" href="#"> <img src="assets/img/client-1.jpg" alt="brand" /> </a> </div>
					</div>
					<div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
						<div class="brand-logo"> <a class="brand-logo-wrap" href="#"> <img src="assets/img/client-1.jpg" alt="brand" /> </a> </div>
					</div>
					<div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
						<div class="brand-logo"> <a class="brand-logo-wrap" href="#"> <img src="assets/img/client-1.jpg" alt="brand" /> </a> </div>
					</div>
					<div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
						<div class="brand-logo"> <a class="brand-logo-wrap" href="#"> <img src="assets/img/client-1.jpg" alt="brand" /> </a> </div>
					</div>
					<div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
						<div class="brand-logo"> <a class="brand-logo-wrap" href="#"> <img src="assets/img/client-1.jpg" alt="brand" /> </a> </div>
					</div>
					<div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
						<div class="brand-logo"> <a class="brand-logo-wrap" href="#"> <img src="assets/img/client-1.jpg" alt="brand" /> </a> </div>
					</div>
					<div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
						<div class="brand-logo"> <a class="brand-logo-wrap" href="#"> <img src="assets/img/client-1.jpg" alt="brand" /> </a> </div>
					</div>
				</div>
				<!--row--> 
			</div>
			<!--brands--> 
		</div>
	</section>
	<!-- End: What Clients Say? -->

@endsection

