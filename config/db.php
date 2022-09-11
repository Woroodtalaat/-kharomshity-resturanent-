<?php
require 'constent.php';
$conn = new mysqli (DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$conn)
{
    die ("connection failed: ".mysqli_connect_error());
}