@extends('includes.master')

@section('content')

<div class="content admin">

	<div class="container">

		<div class="row">

			<div class="content__layout2-col1">

				<h2>Log in</h2>

				<form>

					<label>Username</label>
					<input type="text" />

					<label>Password</label>
					<input type="password" />

					<input type="submit" />

				</form>

				<a href="">Forgot Password</a>

			</div><!-- .phonebook__info-sidebar -->

			<div class="content__layout2-col2">

				

			</div><!-- .phonebook__bio -->

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .content -->
   
@stop