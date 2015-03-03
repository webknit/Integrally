@extends('includes.master')

@section('content')

<div class="content phonebook">

	<div class="container row">

		<div class="content__criteria row">

			<select class="content__criteria-select">
				<option value="">Department</option>
				<option value="">Development</option>
				<option value="">Accounts</option>
				<option value="">Finance</option>
			</select>

			<select lass="content__criteria-select">
				<option value="">Sort Name</option>
				<option value="">A-Z</option>
				<option value="">Z-A</option>
			</select> 

			<form class="content__searchbox">

				<label for="content__searchboxname">Search</label>
				<input type="text" id="content__searchboxname" class="content__searchbox-name" placeholder="Joe Bloggs" />

				<input type="submit" value="Submit" />

			</form>

		</div><!-- .content_criteria -->

		<ul class="content__list">

			<li class="content__list-li">

				<img src="img/avatar.jpg" class="content__list-avatar" />

				<ul>

					<li><span>Name:</span>Shane Prendergast</li>
					<li><span>Role:</span>Web Developer</li>
					<li><span>DOB:</span>17-08-1986</li>

				</ul>

				<a href="#" class="content__list-view">View</a>

			</li><!-- .content__list-li -->

			<li class="content__list-li">

				<img src="img/avatar.jpg" class="content__list-avatar" />

				<ul>

					<li><span>Name:</span>Shane Prendergast</li>
					<li><span>Role:</span>Web Developer</li>

				</ul>

				<a href="#" class="content__list-view">View</a>

			</li><!-- .content__list-li -->

			<li class="content__list-li">

				<img src="img/avatar.jpg" class="content__list-avatar" />

				<ul>

					<li><span>Name:</span>Shane Prendergast</li>
					<li><span>Role:</span>Web Developer</li>

				</ul>

				<a href="#" class="content__list-view">View</a>

			</li><!-- .content__list-li -->

			<li class="content__list-li">

				<img src="img/avatar.jpg" class="content__list-avatar" />

				<ul>

					<li><span>Name:</span>Shane Prendergast</li>
					<li><span>Role:</span>Web Developer</li>

				</ul>

				<a href="#" class="content__list-view">View</a>

			</li><!-- .content__list-li -->

		</ul><!-- .content__list -->

	</div><!-- .container -->

</div><!-- .content -->

@stop