@extends('includes.master')

@section('content')

<div class="content phonebook phonebook--single">

	<div class="container">

		<div class="row">

			<div class="content__layout1-col1">

				<img src="{{$profile->profile_image}}" />

				<ul>

					<li><strong>Name:</strong> {{ $profile->name }}</li>
					<li><strong>Role:</strong> Web Developer</li>
					<li><strong>DOB:</strong> {{ $profile->dob }}</li>

				</ul>

			</div><!-- .phonebook__info-sidebar -->

			<div class="content__layout1-col2">

				<h2 class="content__megaheader">{{ $profile->name }}</h2>

				<ul class="admin-options">

					<li class="admin-options__li"><a>Edit</a></li>

				</ul>
				{!! $profile->bio !!}

				<p><strong>Question</strong></p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

				<p><strong>Question</strong></p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

				<p><strong>Question</strong></p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

			</div><!-- .phonebook__bio -->

			<div class="content__layout1-col3">

				<ul class="content__options">
					<li class="content__options-title">Options</li>
					<li class="content__options-li"><a href="{{route('profiles')}}">View profiles</a></li>
					<li class="content__options-li"><a href="#">View department</a></li>
					<li class="content__options-li"><a>View calender</a></li>
					<li class="content__options-li"><a>Send message</a></li>
				</ul>

			</div>

		</div><!-- .row -->

		<div class="row">

			<h2 class="center-align">Related Staff</h2>

			<ul class="content__list">

				<li class="content__list-li">

					<img src="/img/avatar.jpg" class="content__list-avatar" />

					<ul>

						<li><span>Name:</span>Shane Prendergast</li>
						<li><span>Role:</span>Web Developer</li>
						<li><span>DOB:</span>17-08-1986</li>

					</ul>

					<a href="#" class="content__list-view">View</a>

				</li><!-- .content__list-li -->

				<li class="content__list-li">

					<img src="/img/avatar.jpg" class="content__list-avatar" />

					<ul>

						<li><span>Name:</span>Shane Prendergast</li>
						<li><span>Role:</span>Web Developer</li>

					</ul>

					<a href="#" class="content__list-view">View</a>

				</li><!-- .content__list-li -->

				<li class="content__list-li">

					<img src="/img/avatar.jpg" class="content__list-avatar" />

					<ul>

						<li><span>Name:</span>Shane Prendergast</li>
						<li><span>Role:</span>Web Developer</li>

					</ul>

					<a href="#" class="content__list-view">View</a>

				</li><!-- .content__list-li -->

				<li class="content__list-li">

					<img src="/img/avatar.jpg" class="content__list-avatar" />

					<ul>

						<li><span>Name:</span>Shane Prendergast</li>
						<li><span>Role:</span>Web Developer</li>

					</ul>

					<a href="#" class="content__list-view">View</a>

				</li><!-- .content__list-li -->

			</ul><!-- .content__list -->

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .content -->
   
@stop