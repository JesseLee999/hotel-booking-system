<?php

require_once 'base.php';

$db_server = mysqli_server (DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($db_server->connect_error) {
    die("Connection failed!: " .$db_server. )
}
?>