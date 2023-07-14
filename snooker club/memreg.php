<?php
include "dbconn.php";
$username = $_GET['uname'];
$email = $_GET['email'];
$cat = $_GET['category'];
if($cat == "1")
{
    $category = "A";
    $dur = "12months";
    $amo = "5000";
}
else if ($cat == "2")
{
    $category = "B";
    $dur = "6months";
    $amo = "3000";
}
else if ($cat == "3")
{
    $category = "C";
    $dur = "1month";
    $amo = "1000";
}
$sql = "insert into membership (username,email,category,amount,duration) values ('$username','$email','$category','$amo','$dur')";
$result = mysqli_query($conn,$sql);
if($result)
    header('Location: payment.html');

