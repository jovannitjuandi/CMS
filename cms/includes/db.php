<?php

// NORMAL BUT LESS SECURE WAY
/*$server = 'localhost';
$username = 'root';
$password = '';
$database = 'cms';
$connection = mysqli_connect($server, $username, $password, $database);*/

// LONGER BUT MORE SECURE WAY
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$connection) {
    echo "We Are NOT Connected";
}

?>