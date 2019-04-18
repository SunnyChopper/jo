<html>
	<head>
		<title>Jewel Osco - Community Partnerships</title>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('css/layouts.css') }}" rel="stylesheet">
	</head>
	<body>
		<div class="center-container container pt-32 pb-32">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-10 col-sm-10 col-12">
					<div class="jo-card">
						<img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Jewel_Osco_logo.svg" class="regular-image-30 centered mb-16">
						<h4 class="text-center">Let's Grow Our Community</h4>
						<p class="text-center">We currently offer partnership opportunities for the following organizations/programs:</p>
						<p class="text-center mb-0">Community Gardens</p>
						<p class="text-center mb-0">Workshop Sponsorships</p>
						<p class="text-center">Local Farm Promotion</p>
						<p class="text-center"><small>Fields with <span class="red">*</span> are required.</small></p>
						<hr />
						<form>
							<div class="form-group row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-12">
									<p class="mb-2"><small>First Name<span class="red">*</span>:</small></p>
									<input type="text" class="form-control" name="first_name" required>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-16-mobile">
									<p class="mb-2"><small>Last Name<span class="red">*</span>:</small></p>
									<input type="text" class="form-control" name="last_name" required>
								</div>
							</div>

							<div class="form-group row">
								<div class=" col-lg-6 col-md-6 col-sm-12 col-12">
									<p class="mb-2"><small>Phone<span class="red">*</span>:</small></p>
									<input type="tel" class="form-control" name="phone" required>
								</div>

								<div class=" col-lg-6 col-md-6 col-sm-12 col-12">
									<p class="mb-2"><small>Email<span class="red">*</span>:</small></p>
									<input type="email" class="form-control" name="email" required>
								</div>

							</div>

							<div class="form-group row">
								<div class="col-12">
									<p class="mb-2"><small>Which organization do you represent?<span class="red">*</span>:</small></p>
									<input type="text" class="form-control" name="organization" required>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-12">
									<p class="mb-2"><small>Which program are you interested in?<span class="red">*</span>:</small></p>
									<select class="form-control" name="participation">
										<option value="Community Gardens">Community Gardens</option>
										<option value="Workshop Sponsorships">Workshop Sponsorships</option>
										<option value="Local Farm Promotion">Local Farm Promotion</option>
									</select>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-16-mobile">
									<p class="mb-2"><small>Where would this event take place?<span class="red">*</span>:</small></p>
									<input type="text" class="form-control" name="event_place" required>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-12">
									<input type="submit" class="btn btn-primary centered" value="Submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>