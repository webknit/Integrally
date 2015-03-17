@extends('includes.master')

@section('content')

<div class="content admin">

	<div class="container">

		<div class="row">

			<div class="content__layout2-col1">

				<h2>Profile edit</h2>

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

					<label>Bio</label>
					<textarea>Bio information</textarea>

					<input type="submit" />

				</form>

			</div><!-- .phonebook__info-sidebar -->

			<div class="content__layout2-col2">

				<ul>
					<li><a href="{{route('profiles')}}">View profiles</a></li>
				</ul>	

			</div><!-- .phonebook__bio -->

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .content -->
   
@stop