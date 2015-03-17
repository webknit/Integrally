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

## Access controllers
app/http/Controllers/welcomeController.php

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


# The following commands require logging into the vagrant box via SSH using `homestead ssh` and navigating to the source folder

## Dependency updates
Run `composer install`

## Database Schema updates
Run `php artisan migrate`

## Database population
Run `php artisan db:seed`

## Exit ssh
Run `exit`