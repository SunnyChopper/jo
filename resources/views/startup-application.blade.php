<html>
	<head>
		<title>Jewel Osco Landing Page</title>
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
						<h4 class="text-center">Startup Application Page</h4>
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
								<div class="col-12">
									<p class="mb-2"><small>Business Name<span class="red">*</span>:</small></p>
									<input type="text" class="form-control" name="business_name" required>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-12">
									<p class="mb-2"><small>Brief Description of Product:</small></p>
									<textarea class="form-control" name="description" rows="6"></textarea>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-12">
									<p class="mb-2"><small>Why Are You Interested in Participating?</small></p>
									<select class="form-control" name="participation">
										<option value="1">Reason 1</option>
										<option value="2">Reason 2</option>
										<option value="3">Reason 3</option>
										<option value="4">Reason 4</option>
									</select>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-16-mobile">
									<p class="mb-2"><small>Upload Picture/Video:</small></p>
									<input type="file" name="media">
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