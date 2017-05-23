<?php
define('DB_CONNECTOR', 'mysql'); // Possible values: mysq, sqlite
define('DB_HOST', 'db-server');
define('DB_NAME', 'db-name'); // sqlite: used as file path
define('DB_USER', 'db-user');
define('DB_PASSWORD', 'db-password');

define( 'APP_PATH', realpath('..') . '/app' );

//AuthSession params
//define('AUTH_USER_MODEL', 'YOUR MODEL CLASS');
//define('AUTH_CRYPTO_COST', 10);

define('ORM_ID_AS_UID', false);//set true if you want to have ids as uids instead of autoincrement ids - default strategy : php uniqid('', true)
define('ORM_UID_STRATEGY', 'php');//define the way you want to create uids (php : uniqid('', true) ; mysql : uuid() - it works only if DB_CONNECTOR is 'mysql')
