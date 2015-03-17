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

					<label>Categories</label>
					<li>
						<input type="checkbox" name="stein" value="stein"> stein<br>
						<ul>
							<li>
								<input type="checkbox" name="stein" value="stein"> EMEA
								<ul>
									<li>
										<input type="checkbox" name="stein" value="stein"> Bollington
										<ul>
											<li>
												<input type="checkbox" name="stein" value="stein"> Developers
												<ul>
													<li>
														<input type="checkbox" name="stein" value="stein"> Front end
														<ul>
															<li><input type="checkbox" name="stein" value="stein"> Senior</li>
															<li><input type="checkbox" name="stein" value="stein"> Midweight</li>
															<li><input type="checkbox" name="stein" value="stein"> Junior</li>
														</ul>
													</li>
													<li><input type="checkbox" name="stein" value="stein"> Back end</li>
											</li>
											<li><input type="checkbox" name="stein" value="stein"> Accounts</li>
										</ul>
									</li>
									<li><input type="checkbox" name="stein" value="stein"> London</li>
									<li><input type="checkbox" name="stein" value="stein"> Paris</li>
								</ul>
							</li>
							<li><input type="checkbox" name="stein" value="stein"> ASIA</li>
							<li><input type="checkbox" name="stein" value="stein"> APAC</li>
						</ul>
					</li>

					<label>Sub Department</label>
					<input type="checkbox" name="subdept" value="subdept1"> Sub Dept 1<br>
					<input type="checkbox" name="subdept" value="subdept2"> Sub Dept 2<br>

					<input type="submit" />

				</form>

				<h3>Add a new department</h3>
				<form>

					<label>Department Name</label>
					<input type="text" />

					<label>Description</label>
					<textarea>Department description</textarea>

					<label>Department categories</label>
					<li>
						<input type="checkbox" name="stein" value="stein"> stein<br>
						<ul>
							<li>
								<input type="checkbox" name="stein" value="stein"> EMEA
								<ul>
									<li>
										<input type="checkbox" name="stein" value="stein"> Bollington
									</li>
									<li><input type="checkbox" name="stein" value="stein"> London</li>
									<li><input type="checkbox" name="stein" value="stein"> Paris</li>
								</ul>
							</li>
							<li><input type="checkbox" name="stein" value="stein"> ASIA</li>
							<li><input type="checkbox" name="stein" value="stein"> APAC</li>
						</ul>
					</li>

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