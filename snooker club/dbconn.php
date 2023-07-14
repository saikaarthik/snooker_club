<?php 

$host="localhost";
$user="root";
$password="";
$db="snooker";

$conn = mysqli_connect($host, $user, $password,$db);


if(! $conn ) {
         die('Could not connect: ' . mysqli_error($conn));
      }
$retval = mysqli_select_db( $conn, 'snooker' );
if(! $retval ) {
         die('Could not select database: ' . mysqli_error($conn));
      }
?>