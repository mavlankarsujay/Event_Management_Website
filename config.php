<?php
session_start();
$host = "localhost:3307"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "typroject"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}