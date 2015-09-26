@extends('layout')

@section('content')
<div id="background">
	<div>
		<div id="logo">
			<a href="/"><img src="img/logo.svg" alt="logo" id="logo-image"></a>
		</div>

		<div id="login-header">
			<input type="text" placeholder="Search Kaisu" id="searchbar">

			<div id="login-buttons">
				<a href="/auth/login"><button id="login">Log In</button></a>
				<a href="/auth/register"><button id="register">Sign Up</button></a>
			</div>
		</div>
	</div>

	<p id="logo-text">Kaisu</p>

	<p id="catchphrase">Search, create and share your favourite food recipes</p>

	<form id="login-form" method="post" action="/auth/register">
		{!! csrf_field() !!}

		<input type="email" name="email" placeholder="Email" value="{{ old('email') }}">

		<input type="text" name="name" placeholder="Username" value="{{ old('name') }}">

		<input type="password" name="password" placeholder="Password">

		<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password confirmation">

		<button type="submit" id="submit">Sign Up</button>
	</form>

	@include('landing-footer')

</div>
@stop