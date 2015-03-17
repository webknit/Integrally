@extends('includes.master')

@section('content')

<div class="content admin">

	<div class="container">

		<div class="row">

			<div class="content__layout2-col1">

				<h2>Profile edit</h2>

				<form>

					<label>First name</label>
					<input type="text" />

					<label>Last Name</label>
					<input type="text" />

					<label>DOB</label>
					<input type="text" />

					<label>Department</label>
					<input type="checkbox" name="dept" value="dept1"> Dept 1<br>
					<input type="checkbox" name="dept" value="dept2"> Dept 2<br>

					<label>Sub Department</label>
					<input type="checkbox" name="subdept" value="subdept1"> Sub Dept 1<br>
					<input type="checkbox" name="subdept" value="subdept2"> Sub Dept 2<br>

					<label>Role</label>
					<input type="text" />

					<label>Bio</label>
					<textarea>Bio information</textarea>

					<input type="submit" />

				</form>

			</div><!-- .phonebook__info-sidebar -->

			<div class="content__layout2-col2">

				

			</div><!-- .phonebook__bio -->

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .content -->
   
@stop