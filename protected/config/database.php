<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/crud_app.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=crud_app',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'GreatYear2017!',
	'charset' => 'utf8',
	
);