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

			@foreach($profiles as $profile)
				<li class="content__list-li">

					<a href="{{route('profile', ['slug' => $profile->slug])}}">
						<img src="{{$profile->profile_image}}" class="content__list-avatar" />
					</a>
					
					<ul>

						<li><span>Name:</span> {{$profile->first_name}} {{$profile->last_name}}</li>
						<li><span>Role:</span> Web Developer</li>
						<li><span>DOB:</span> {{$profile->dob}}</li>

					</ul>

					<a href="{{route('profile', ['slug' => $profile->slug])}}" class="content__list-view">View</a>

				</li><!-- .content__list-li -->
			@endforeach

		</ul><!-- .content__list -->

	</div><!-- .container -->

</div><!-- .content -->

@stop