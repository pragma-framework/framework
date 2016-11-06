# Pragma Framework

## Installation

1. Clône du dépôt

2. composer install

	$ make vendor

## Configuration

Il faut renommer le fichier config.default.php en config.php et compléter les infos attendues pour la connexion à la DB

	$ make config/config.php
	$ $VISUAL config/config.php

## Gestion des assets

Le dossier assets n'est pas directement dans le dossier public qui sert de DocumentRoot à votre serveur WEB.

L'idée est de vous permettre de travailler vos sources et de ne rendre accessibles que les versions compilées (ex : sass --> css, coffee --> js).

__Exemple :__

	.
	[...]
	+-- assets
	|   +-- images
	|		+-- javascripts
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

En supposant que vous ayez cette arborescence, vous pouvez rendre accessible les assets souhaités de la façon suivante.

	$ cd public
	$ mkdir assets
	$ cd assets
	$ ln -s ../../assets/images
	$ ln -s ../../assets/javascripts
	$ ln -s ../../assets/stylesheets/dist stylesheets
