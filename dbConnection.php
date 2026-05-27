<?php

$databaseHost = 'host.docker.internal';
$databaseName = 'test';
$databaseUsername = 'appuser';
$databasePassword = 'apppassword';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

?>