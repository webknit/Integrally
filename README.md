# Integrally
A modern intranet

local URL - integrally.app/

## Server start/end
- homestead up
- homestead halt

## Access Templates
resources/views

## Access files in browser/ add routes
app/http/routes.php

## Public files
Anything public, images, CSS, JS goes in /public

## Example foreach loop
See app/http/controllers/WelcomeController.php for example

	{{-- dd($people) --}}
	{{-- var_dump($people) --}}

	@foreach($people as $person)
	<ul class="phonebook__person-info-ul">

		<li class="phonebook__person-info-li"><span>Name</span>{{$person['name']}}</li>
		<li class="phonebook__person-info-li"><span>Role</span>{{$person['role']}}</li>
		<li class="phonebook__person-info-li"><span>DOB</span>17-08-1986</li>

	</ul>
	@endforeach