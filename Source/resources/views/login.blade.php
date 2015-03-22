@extends('includes.master')

@section('content')

<div class="content login">

	<h2 class="content__header">Log in</h2>

	<div class="login__box">

		<form>

			<input type="text" placeholder="Username" />

			<input type="password" placeholder="Password" />

			<input type="submit" />

		</form>

		<a href="">Forgot Password</a>

	</div><!-- .login__box -->

</div><!-- .content -->
   
@stop