<?php
$servername = {SERVER_NAME};
$username = {USERNAME};
$password = {PASSWORD};
$dbname = {DATABASE_NAME};

$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>