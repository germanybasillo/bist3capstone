@extends('template.account')

@include('template.link.account')

@section('content')

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1></h1>
		<div class="header-main">
			<div class="main-icon">
				<a href="landingpage"><img src="logo.png" alt="" width="250"></a>
			</div>
			<div class="header-left-bottom">
				<form action="{{ route('validate_registration') }}" method="post">
					@csrf
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="name" placeholder="Username" name="name" />
						@if($errors->has('name'))
							<span class="text-danger">{{ $errors->first('name') }}</span>
						@endif
					</div>
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
					{{-- <div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Confirm Password" name="confirm_password" />
						@if($errors->has('confirm_password'))
							<span class="text-danger">{{ $errors->first('confirm_password') }}</span>
						@endif
					</div> --}}
					<div class="form-group">
						<label for="usertype"></label>
						<select name="user_type" class="form-control rounded-left @error('usertype') is-invalid @enderror">
							<option value="" selected disabled>Select User Type</option>
							<option value="student" {{ old('user_type') == 'student' ? 'selected' : '' }}>Admin</option>
							<option value="teacher" {{ old('user_type') == 'teacher' ? 'selected' : '' }}>Rental Owner</option>
							<option value="admin" {{ old('user_type') == 'admin' ? 'selected' : '' }}>Tenants</option>
						</select>
						@error('user_type')
							<span class="text-danger">{{ $message }}</span>
						@enderror
					</div>
					<div class="bottom">
						<button class="btn">Register</button>
					</div>
					<div class="links">
						<p><a href="#"></a></p>
						<p class="right"><a href="login">Old User? Login</a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			<div class="social">
				<ul>
					<li>or register using : </li>
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

@endsection('content')