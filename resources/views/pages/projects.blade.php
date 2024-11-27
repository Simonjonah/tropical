@include('pages.common.header')
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('images/resource/2.jpg') }})">
    	<div class="auto-container">
			<div class="content">
				<h1>Our <span>Projects</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Pages</li>
					<li>Projects</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	
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



				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img style="width: 100%; height: 250px;" src="{{ asset('images/resource/44.jpg') }}" alt="" />
							<a href="{{ asset('images/resource/44.jpg') }}" class="lightbox-image overlay-box"><span class="plus flaticon-plus-symbol"></span></a>
						</div>
						<div class="lower-content">
							
							<h4><a href="{{ url('communityhealth') }}" style="color: #45A401">Community Health</a></h4>
							<a style="text-align: center;" href="{{ url('communityhealth') }}" class="btn btn-lg btn-success">View more</a>
						
						</div>
					</div>
				</div>


				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img style="width: 100%; height: 250px;" src="{{ asset('images/resource/32.jpg') }}" alt="" />
							<a href="{{ asset('images/resource/32.jpg') }}" class="lightbox-image overlay-box"><span class="plus flaticon-plus-symbol"></span></a>
						</div>
						<div class="lower-content">
							
							<h4><a href="{{ url('renewablenergy') }}" style="color: #45A401">Renewable Energy</a></h4>
							<a style="text-align: center;" href="{{ url('renewablenergy') }}" class="btn btn-lg btn-success">View more</a>
						
						</div>
					</div>
				</div>



				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img style="width: 100%; height: 250px;" src="{{ asset('images/resource/6.jpg') }}" alt="" />
							<a href="{{ asset('images/resource/6.jpg') }}" class="lightbox-image overlay-box"><span class="plus flaticon-plus-symbol"></span></a>
						</div>
						<div class="lower-content">
							
							<h4><a href="{{ url('indigenousresources') }}" style="color: #45A401">Indigenous Resources</a></h4>
							<a style="text-align: center;" href="{{ url('indigenousresources') }}" class="btn btn-lg btn-success">View more</a>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- End Blog Grid Section -->

    @include('pages.common.footer')