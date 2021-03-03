<?php

$servername="localhost";
$username="root";
$password="8098633412Root";
$db="sample_db";

$con=mysqli_connect($servername,$username,$password,$db);

if(!$con) 
{
echo "database not connected". mysqli_connect_error();
}

?>