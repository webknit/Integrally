@extends('includes.master')

@section('content')

<div class="content admin">

	<div class="container">

		<div class="row">

			<div class="content__layout2-col1">

				<h2>Admin options</h2>

				<ul>

					<li><a>Add a new user</a></li>
					<li><a>Add a new department</a></li>
					<li><a>Add a new download/info</a></li>

				</ul>

				<h3>Add a new user</h3>
				<form>

					<label>Email</label>
					<input type="text" />

					<label>First Name</label>
					<input type="text" />

					<label>Last Name</label>
					<input type="text" />

					<label>Department</label>
					<input type="checkbox" name="dept" value="dept1"> Dept 1<br>
					<input type="checkbox" name="dept" value="dept2"> Dept 2<br>

					<input type="submit" />

				</form>

				<h3>Add a new department</h3>
				<form>

					<label>Department Name</label>
					<input type="text" />

					<label>Description</label>
					<textarea>Department description</textarea>

					<label>Add people to the department</label>
					<input type="checkbox" name="person" value="person1"> Person 1<br>
					<input type="checkbox" name="person" value="person2"> Person 2<br>

					<input type="submit" />

				</form>

			</div><!-- .phonebook__info-sidebar -->

			<div class="content__layout2-col2">

				

			</div><!-- .phonebook__bio -->

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .content -->
   
@stop