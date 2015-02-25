@extends('includes.master')

@section('content')

<div class="content phonebook">

	<div class="container row">

		<div class="phonebook__criteria row">

			<select class="phonebook__criteria-select">
				<option value="">Department</option>
				<option value="">Development</option>
				<option value="">Accounts</option>
				<option value="">Finance</option>
			</select>

			<select lass="phonebook__criteria-select">
				<option value="">Sort Name</option>
				<option value="">A-Z</option>
				<option value="">Z-A</option>
			</select> 

			<form class="phonebook__searchbox">

				<label for="phonebook__searchboxname">Search</label>
				<input type="text" id="phonebook__searchboxname" class="phonebook__searchbox-name" placeholder="Joe Bloggs" />

				<input type="submit" value="Submit" />

			</form>

		</div><!-- .phonebook_criteria -->

		<div class="content__list-info">

			<h2>Development</h2>

			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

			<ul class="admin-options">

				<li class="admin-options__li"><a>Edit</a></li>

			</ul>

		</div><!-- .content__list-info -->

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