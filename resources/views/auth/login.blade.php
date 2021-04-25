<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('theme/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url(theme/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="{{ route('login') }}" class="signin-form" method="post">
		      		@csrf
		      		<div class="form-group">
		      			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="off" placehoder="Enter E-mail OR Username">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
		      		</div>

		            <div class="form-group">
		              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
	                    @error('password')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>

	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	                <div class="w-50 form-check">
	                	<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
			            <label class="checkbox-wrap checkbox-primary" for="remember">Remember Me
						</label>
				    </div>
	 				<div class="w-50 text-md-right">
	 					@if (Route::has('password.request'))
						<a href="{{ route('password.request') }}" style="color: #fff">Forgot Password</a>
						@endif
					</div>
	            </div>
	          </form>

	          <!-- Authentication Links -->
                        @guest
                            
                            @if (Route::has('register'))
    
                                    <a href="{{ route('register') }}">{{ __('OR Register') }}</a>
               
                            @endif
                        @else
                            
                                <a href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

