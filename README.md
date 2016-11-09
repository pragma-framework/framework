# Pragma Framework

## Installation

### Using composer

	$ composer create-project pragma-framework/framework [project-name] dev-master

### Using git

	$ git clone https://github.com/pragma-framework/framework.git

## Dependencies

	$ composer install

Alternatively we provide a Makefile for some redundant tasks:

	$ make vendor

## Configuration

Copy the `config.default.php` to `config.php`, and edit the `DB_*` constant values according to your system installation.

	$ make config/config.php
	$ $VISUAL config/config.php

## Assets management

The `assets/` folder isn't in the `public/` folder used as the DocumentRoot/root for your Web server.

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

Assuming you have this tree, you can make available the needed assets as follow:

	$ cd public/
	$ mkdir assets/
	$ cd assets/
	$ ln -s ../../assets/images ./
	$ ln -s ../../assets/javascripts ./
	$ ln -s ../../assets/stylesheets/dist ./stylesheets
