@extends('includes.master')

@section('content')

<div class="content phonebook">

	<div class="container row">

		<div class="content__criteria row">

			<select class="content__criteria-select">
				<option value="">Category</option>
				<option value="">Soemthing</option>
				<option value="">Something</option>
				<option value="">Finance</option>
			</select>

			<select lass="content__criteria-select">
				<option value="">Sort by</option>
				<option value="">Most popular</option>
				<option value="">Best rated</option>
			</select> 

			<form class="content__searchbox">

				<label for="content__searchboxname">Search</label>
				<input type="text" id="content__searchboxname" class="content__searchbox-name" placeholder="Joe Bloggs" />

				<input type="submit" value="Submit" />

			</form>

		</div><!-- .content_criteria -->

		<ul class="content__list content__list--stacked">

			<li class="content__list-li">
			
				<div class="content__list-info-contain">

					<h2 class="content__list-title">Title of download</h2>
	
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					
					<ul class="content__list-tag-ul">
					
						<li class="content__list-tag-li"><a class="content__list-tag-a">Development</a></li>
						<li class="content__list-tag-li"><a class="content__list-tag-a">Accounts</a></li>
						<li class="content__list-tag-li"><a class="content__list-tag-a">PR</a></li>
						
					</ul>
				
				</div><!-- .content__list-info-float -->

				<a href="#" class="content__list-view">View</a>

			</li><!-- .content__list-li -->
			
			<li class="content__list-li">
			
				<div class="content__list-info-contain">

					<h2 class="content__list-title">Title of download</h2>
	
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				
				</div><!-- .content__list-info-float -->

				<a href="#" class="content__list-view">View</a>

			</li><!-- .content__list-li -->

		</ul><!-- .content__list -->

	</div><!-- .container -->

</div><!-- .content -->

@stop