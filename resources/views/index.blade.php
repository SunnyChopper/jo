<html>
	<head>
		<title>Jewel Osco Landing Page</title>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('css/layouts.css') }}" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="-webkit-box-shadow: 0px 10px 64px -15px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 10px 64px -15px rgba(0,0,0,0.75);
box-shadow: 0px 10px 64px -15px rgba(0,0,0,0.75);">
			<div class="container">
				<div class="col-lg-2 col-md-2 col-sm-12 col-12">
					<a class="navbar-brand" href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Jewel_Osco_logo.svg" class="regular-image regular-image-60-mobile"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-12 col-12">
					<div class="collapse navbar-collapse" id="navbarNav">
		    			<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/') }}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/startup-application') }}">Startup Application</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/community') }}">Community Partnerships</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/contact') }}">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<div style="width: 100%; height: 50vh; background: url('http://iciinc.com/wp-content/uploads/jewel-new-const-001.jpg'); background-size: cover; background-position: center; display: flex;">
			<div class="container" style="margin: auto;">
				<div class='col-12'>
					<h1 class="text-center white" style="padding-top: 24px; padding-bottom: 4px; background-color: rgba(0, 0, 0, 0.75); margin-bottom: 0px;">Welcome to Jewel Osco</h1>
					<h5 class="text-center white" style="padding-bottom: 24px; padding-top: 4px; background-color: rgba(0, 0, 0, 0.75);">Building stronger communities together</h5>
				</div>
			</div>
		</div>

		<div class="container pt-64 pb-64">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<h3>Startup Application</h3>
					<p>Interested in having your product on the shelves of your local Jewel store? We are accepting applications for our 2019 startup competition. Whether you're a college student, serial entrepreneur, or just have a product you think we would love, Jewel wants to partner with you.</p>
					<a href="{{ url('/startup-application') }}">Apply Now</a>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-32-mobile">
					<h3>Community Partnerships</h3>
					<p>Jewel believes that when our community thrives, our business thrives. We want to give you the resources to make an impact in your community, whether it's starting a community garden in your area or leading a workshop to spread awareness on topics such as sustainability or nutritional awareness.</p>
					<a href="{{ url('/community') }}">Apply Now</a>
				</div>
			</div>
		</div>

		<div id="footer" style="background: #D7002B;">
			<div class="container pt-16 pb-16">
				<p class="muted mb-0 white">Copyright 2019 &copy; Jewel Osco</p>
			</div>
		</div>

		<script
		  src="https://code.jquery.com/jquery-3.4.0.min.js"
		  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
		  crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
	</body>
</html>