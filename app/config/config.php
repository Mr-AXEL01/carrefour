<?php

<<<<<<< HEAD
//
=======
>>>>>>> 36de1a8d431b2647930faa3ab7cbac75cabe428f
$config = parse_ini_file('config.ini');

// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', $config['DB_USER']);
define('DB_PASS', $config['DB_PASS']);
define('DB_NAME', 'carrefour');

// App Root 
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://localhost/carrefour');

<<<<<<< HEAD
define('SITENAME', 'Carrefour');
=======
// Site Name
define('SITENAME', 'Carrefour');

// App Version
define('APPVERSION', '1.0.0');
>>>>>>> 36de1a8d431b2647930faa3ab7cbac75cabe428f
