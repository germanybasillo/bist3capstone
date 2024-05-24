@extends('template.account')

@include('template.link.account')

@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif

@section('content')

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1></h1>
		<div class="header-main">
			<div class="main-icon">
				<a href="/landingpage"><img src="logo.png" alt="" width="250"></a>
			</div>
			<div class="header-left-bottom">
				<form action="{{ route('validate_login') }}" method="post">
					@csrf
					<div class="icon1">
						<span class="fa fa-envelope"></span>
						<input type="email" placeholder="Email Address" name="email" />
						@if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Password" name="password" />
						@if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
					</div>
					{{-- <div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
					</div> --}}
					<div class="bottom">
						<button class="btn">Log In</button>
					</div>
					<div class="links">
						<p><a href="#">Forgot Password?</a></p>
						<p class="right"><a href="registration">New User? Register</a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			<div class="social">
				<ul>
					<li>or login using : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
        @include('template.footer_acc')
	</div>
</div>	
<!-- //main -->

@endsection
