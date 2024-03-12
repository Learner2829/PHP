<?php
$Server="localhost";
$user="root";
$pass="";
$database="Ashish";

$conn=mysqli_connect($Server,$user,$pass,$database);
if(!$conn){
    Echo "Not conected";
}
?>