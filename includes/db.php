<?php

$db["db_host"] = "localhost"; //naome of host
$db["db_user"] = "root"; // username
$db["db_pass"] = ""; // password
$db["db_name"] = "checkmat_plymouth"; //db name

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = "SET NAMES utf8";
mysqli_query($conn, $query);
