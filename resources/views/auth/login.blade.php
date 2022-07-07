
<!doctype html>
<html lang="en">
  <head>
  	<title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ url('frontend/styles/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Admin</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">CV Mandiri Jaya Group </h3>
						<form action="{{ route('login') }}" method="POST" class="login-form">
							@csrf
		      		<div class="form-group">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
		      		</div>
	            <div class="form-group d-flex">
					<input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">	{{ __('Remember Me') }}
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						
									  <span class="checkmark"></span>
									</label>
								</div>
						
	            </div>
		
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">	{{ __('Login') }}</button>
				
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript" src="{{ url('frontend/libraries/jquery/jquery-1.11.2.min.js') }}"></script>  
    <script type="text/javascript" src="{{ url('frontend/libraries/bootstrap/js/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('frontend/libraries/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('frontend/styles/main.js') }}"></script>

	</body>
</html>

