@include('pages.common.header')

    <!--End Main Header -->

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/resource/2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Contact <span>us</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Contact Page Section -->
	<section class="contact-page-section">

		<div class="auto-container">
			<div class="inner-container">
				{{-- <h2 style="color: red; text-align: center; margin-bottom: 15px;">C kONTACT BRIXTONN SCHOOLS </span></h2> --}}
				{{-- <h4 style="color: purple; text-align: center; margin-bottom: 15px;">EARLY LEARNING CENTRE </span></h4> --}}
				<div class="row clearfix">

					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text">For additional information on TRCC projects, please contact us using the information below:</div>
							<ul class="list-style-five">
								<li><span class="icon fa fa-building"></span>41 Oron Road, Uyo Akwa Ibom State, Nigeria.</li>
								<li>Uyo Centre: <span class="icon fa fa-fax"></span>+234 806 759 6435</li>
								{{-- <li>Abuja Centre: <span class="icon fa fa-fax"></span>+234 912 439 8085</li> --}}
								<li><span class="icon fa fa-envelope-o"></span>info@tropicalcentre.org</li>
							</ul>
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="innercolumn">

							<!--Contact Form-->
							<div class="contactform">
								<form method="post" action="{{ url('createcontact') }}" method="post">
									@csrf
								@if (Session::get('success'))
									<div class="alert alert-success">
										{{ Session::get('success') }}
									</div>
									@endif

									@if (Session::get('fail'))
									<div class="alert alert-danger">
									{{ Session::get('fail') }}
									</div>
								@endif
									<div class="form-group">
										<input class="form-control" type="text" name="firstname" value="" placeholder="Full name">
									</div>

									<div class="form-group">
										<input class="form-control" type="text" name="email" value="" placeholder="Email">
									</div>

									<div class="form-group">
										<input class="form-control" type="text" name="phone" value="" placeholder="Phone">
									</div>

									<div class="form-group">
										<textarea class="form-control" name="message" placeholder="write.."></textarea>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-success">Submit</button>
									</div>

								</form>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->
	
	<!-- Contact Info Section -->
	<section class="contact-info-section" style="background-image:url({{  asset('images/resource/77.jpg') }})">
		<div class="auto-container">
			<div class="row clearfix">
				
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Head Office: Akwa Ibom State</h4>
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> 41 Oron Road, <br> Uyo Akwa Ibom State, Nigeria.</li>
						<li><span class="icon flaticon-phone-receiver"></span>+234 806 759 6435</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>info@tropicalcentre.org</li>
					</ul>
				</div>
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Branch Office:  </h4>
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> Zaakpon, Bori LGA <br> Rivers State, Nigeria</li>
						<li><span class="icon flaticon-phone-receiver"></span>+234 806 759 6435</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>info@tropicalcentre.org</li>
					</ul>
				</div>


				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Branch Office:  </h4>
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> Omadino, Warri South LGA <br> Delta State, Nigeria</li>
						<li><span class="icon flaticon-phone-receiver"></span>+234 806 759 6435</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>info@tropicalcentre.org</li>
					</ul>
				</div>
				{{-- <div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Netherlands</h4>
					<ul class="list-style-six">
						<li><span class="icon flaticon-map-1"></span> Nieuwe Leliestraat 27-HS <br> 101J Amsterdam</li>
						<li><span class="icon flaticon-phone-receiver"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon flaticon-e-mail-envelope"></span>support@finance.com.uk</li>
					</ul>
				</div> --}}
				
			</div>
		</div>
	</section>
	<!-- End Contact Info Section -->

	@include('pages.common.footer')

