<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mentordb');

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if ($con->connect_error) {
	die('Database error:'. $con->connect_error);
}


// id15504455_mentordb
// id15504455_mentordb_victor
// ?hoH]TPa]zm^gV7N