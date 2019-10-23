<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LAR Project</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="stylesheet" href="{{ asset('secrets/libs') }}/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('secrets/libs') }}/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="{{ asset('secrets/libs') }}/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="{{ asset('secrets/assets') }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ asset('secrets/assets') }}/css/core.css">
	<link rel="stylesheet" href="{{ asset('secrets/assets') }}/css/misc-pages.css">
</head>
<body class="simple-page">
	<div id="back-to-home">
		<a href="index.html" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
	</div>
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="index.html">
				<span><i class="fa fa-gg"></i></span>
				<span>LAR Project</span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Sign In With Your Account</h4>
	<form action="#">
		<div class="form-group">
			<input id="sign-in-email" type="email" class="form-control" placeholder="Email">
		</div>

		<div class="form-group">
			<input id="sign-in-password" type="password" class="form-control" placeholder="Password">
		</div>

		<div class="form-group m-b-xl">
			<div class="checkbox checkbox-primary">
				<input type="checkbox" id="keep_me_logged_in"/>
				<label for="keep_me_logged_in">Keep me signed in</label>
			</div>
		</div>
		<button type="button" onclick="location.href = '{{ url('dashboard') }}'" class="btn btn-primary">SIGN IN</button>
	</form>
</div><!-- #login-form -->

<div class="simple-page-footer">
	<p><a href="password-forget.html">FORGOT YOUR PASSWORD ?</a></p>
	<p>
		<small>Don't have an account ?</small>
		<a href="signup.html">CREATE AN ACCOUNT</a>
	</p>
</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
</body>
</html>