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
					<li><a>Add a new job</a></li>
					<li><a>Add a new category or sub cat</a></li>

				</ul>

				<h3>Add a new user</h3>
				<form>

					<label>Email</label>
					<input type="text" />

					<label>First Name</label>
					<input type="text" />

					<label>Last Name</label>
					<input type="text" />

					<label>DOB</label>
					<input type="text" />

					<label>Groups</label>
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

					<input type="submit" />

				</form>

				<h3>Add a new group</h3>
				<form>

					<label>Group Name</label>
					<input type="text" />

					<label>Group Description</label>
					<textarea>Description</textarea>

					<label>Select parent</label>
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