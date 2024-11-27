@include('pages.common.header')
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('images/resource/5.jpg') }})">
    	<div class="auto-container">
			<div class="content">
				<h1>About <span>Us</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Pages</li>
					<li>About Us</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	
	<!-- Services Section Three-->
	<section class="services-section-three">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-target-1"></span>
						</div>
						<h6><a href="#">Vision</a></h6>
						<div class="text">TRCC’s vision is “a sound society in harmony with nature”. 
						</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-research"></span>
						</div>
						<h6><a href="#">Mission</a></h6>
						<div class="text">TRCC’s mission is to “create awareness, build capacity of rural communities (as well as disseminate innovative products and technologies), that could facilitate sustainable agriculture, environmental resources conservation, community healthy living, and indigenous resources preservation”.
						</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-12 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-help"></span>
						</div>
						<h6><a href="#">Objectives</a></h6>
						<div class="text">-To promote conservation of natural resources; educating rural communities, and the general public on environmental, economic, social, ecological and cultural needs for conservation of natural resources ;</div>
						<div class="text">-To build community capacity in natural resources management;</div>
						<div class="text">-To promote sustainable agricultural practices in rural communities in order to improve their livelihoods: organic farming mixed cropping, livestock production etc.</div>
							</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	
	
	
	
	<!-- Video Section -->
	<section class="video-section" style="background-image:url({{ asset('images/resource/2.jpg') }})">
		<div class="auto-container">
			<div class="title">Video</div>
			<h2>Get in <br> touch on how <span>we Work</span></h2>
			<a href="#" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button" aria-hidden="true"></i><span class="ripple"></span></a>
		</div>
	</section>
	<!-- End Video Section -->
	
	<!-- Blog Grid Section -->
	<section class="blog-grid-section" style="background-color: #f2f3fa;">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2 style="color: #45A401">Our Projects</h2>

			</div>
			<div class="row clearfix">
			
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img style="width: 100%; height: 250px;" src="{{ asset('images/resource/4.jpg') }}" alt="" />
							<a href="{{ asset('images/resource/4.jpg') }}" class="lightbox-image overlay-box"><span class="plus flaticon-plus-symbol"></span></a>
						</div>
						<div class="lower-content">
							
							<h4><a href="{{ url('environments') }}" style="color: #45A401">Environmental/Natural Resources Management</a></h4>
							<a style="text-align: center;" href="{{ url('environments') }}" class="btn btn-lg btn-success">View more</a>
						
						</div>

					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img style="width: 100%; height: 250px;" src="{{ asset('images/resource/2.jpg') }}" alt="" />
							<a href="{{ asset('images/resource/2.jpg') }}" class="lightbox-image overlay-box"><span class="plus flaticon-plus-symbol"></span></a>
						</div>
						<div class="lower-content">
							
							<h4><a href="{{ url('agriculture') }}" style="color: #45A401"> Sustainable Agriculture</a></h4>
							<a style="text-align: center;" href="{{ url('agriculture') }}" class="btn btn-lg btn-success">View more</a>
						
						</div>

					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img style="width: 100%; height: 250px;" src="{{ asset('images/resource/33.jpg') }}" alt="" />
							<a href="{{ asset('images/resource/33.jpg') }}" class="lightbox-image overlay-box"><span class="plus flaticon-plus-symbol"></span></a>
						</div>
						<div class="lower-content">
							
							<h4><a href="{{ url('ecotourism') }}" style="color: #45A401">Eco-Tourism</a></h4>
							<a style="text-align: center;" href="{{ url('ecotourism') }}" class="btn btn-lg btn-success">View more</a>
						
						</div>
					</div>
				</div>

			</div>
			
			
			
		</div>
		<div class="text-center">
			<a  href="{{ url('projects') }}" class="btn btn-lg btn-success">View All Project</a>
		</div>
	</section>
	<!-- End Blog Grid Section -->


    @include('pages.common.footer')