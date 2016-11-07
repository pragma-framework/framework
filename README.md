# Pragma Framework

## Installation

1. Clone repository

2. composer install

	$ make vendor

## Configuration

Copy the `config.default.php` to `config.php`, and edit the `DB_*` constant values according to your system installation.

	$ make config/config.php
	$ $VISUAL config/config.php

## Assets management

The `assets/` folder isn't in the `public/` folder used as the DocumentRoot/root for you Web server.

The idea is to allow you to work on your source files and only make the compiled version available to the world (e.g: sass -> css, coffee -> js, ...).

__Hierarchy file structure example:__

	.
	[...]
	+-- assets
	|   +-- images
	|   +-- javascripts
	|   |   +-- lib
	|   |   |   +-- jquery.min.js
	|   |   +-- app.js
	|   +-- stylesheets
	|   |   +-- src
	|   |   |   +-- styles.sass
	|   |   +-- dist
	|   |   |   +-- lib
	|   |   |   |   +-- bootstrap.min.css
	|   |   |   +-- styles.css
	[...]
	+-- public

Assuming you have this tree, you can make availabe the needed assets as follow:

	$ cd public/
	$ mkdir assets/
	$ cd assets/
	$ ln -s ../../assets/images ./
	$ ln -s ../../assets/javascripts ./
	$ ln -s ../../assets/stylesheets/dist ./stylesheets
