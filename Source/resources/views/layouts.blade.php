@extends('includes.master')

@section('content')

<div class="content">

	<div class="container">

		<div class="row">

			<h2>Layout one - Three Col - two sidebars</h2>

			<div class="content__layout1-col1 content__demo">

				<p>content__layout1-col1</p>

			</div><!-- .phonebook__info-sidebar -->

			<div class="content__layout1-col2 content__demo">

				<p>content__layout1-col2</p>

			</div><!-- .phonebook__bio -->

			<div class="content__layout1-col3 content__demo">

				<p>content__layout1-col3</p>

			</div>

		</div><!-- .row -->

		<br><br>

		<div class="row">

			<h2>Layout two -Two Col - larger size pages</h2>

			<div class="content__layout2-col1 content__demo">

				<p>content__layout2-col1</p>

			</div><!-- .phonebook__info-sidebar -->

			<div class="content__layout2-col2 content__demo">

				<p>content__layout2-col2</p>

			</div><!-- .phonebook__bio -->

		</div><!-- .row -->

		<div class="row">

			<h2>Conten lists - For lists of stuff - will be elaborated on for extra layouts</h2>

			<ul class="content__list">

				<li class="content__list-li content__demo">

					<p>content__list-li</p>

				</li><!-- .content__list-li -->

				<li class="content__list-li content__demo">

					<p>content__list-li</p>

				</li><!-- .content__list-li -->

				<li class="content__list-li content__demo">

					<p>content__list-li</p>

				</li><!-- .content__list-li -->

				<li class="content__list-li content__demo">

					<p>content__list-li</p>

				</li><!-- .content__list-li -->

			</ul><!-- .content__list -->

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .content -->
   
@stop