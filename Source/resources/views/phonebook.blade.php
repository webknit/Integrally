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

		<ul class="phonebook__list">

			<li class="phonebook__person">

				<img src="img/avatar.jpg" class="phonebook__avatar phonebook__avatar--center" />

				<ul class="phonebook__person-info-ul">

					<li class="phonebook__person-info-li"><span>Name</span>Shane Prendergast</li>
					<li class="phonebook__person-info-li"><span>Role</span>Web developer</li>

				</ul>

				<a href="#" class="phonebook__person-view">View</a>

			</li><!-- .phonebook__person -->

			<li class="phonebook__person">

				<img src="img/avatar.jpg" class="phonebook__avatar phonebook__avatar--center" />

				<ul class="phonebook__person-info-ul">

					<li class="phonebook__person-info-li"><span>Name</span>Shane Prendergast</li>
					<li class="phonebook__person-info-li"><span>Role</span>Web developer</li>

				</ul>

				<a href="#" class="phonebook__person-view">View</a>

			</li><!-- .phonebook__person -->

			<li class="phonebook__person">

				<img src="img/avatar.jpg" class="phonebook__avatar phonebook__avatar--center" />

				<ul class="phonebook__person-info-ul">

					<li class="phonebook__person-info-li"><span>Name</span>Shane Prendergast</li>
					<li class="phonebook__person-info-li"><span>Role</span>Web developer</li>

				</ul>

				<a href="#" class="phonebook__person-view">View</a>

			</li><!-- .phonebook__person -->

			<li class="phonebook__person">

				<img src="img/avatar.jpg" class="phonebook__avatar phonebook__avatar--center" />

				<ul class="phonebook__person-info-ul">

					<li class="phonebook__person-info-li"><span>Name</span>Shane Prendergast</li>
					<li class="phonebook__person-info-li"><span>Role</span>Web developer</li>

				</ul>

				<a href="#" class="phonebook__person-view">View</a>

			</li><!-- .phonebook__person -->

		</ul><!-- .phonebook__list -->

	</div><!-- .container -->

</div><!-- .content -->

@stop