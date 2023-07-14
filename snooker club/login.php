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
#echo'worked';
if(isset($_POST['uname'])){
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$uname=validate($_POST['uname']);
$password=validate($_POST['pass']);

if(empty($uname)){
   header("Location: login.html");
   exit();
}
else if(empty($password)){
    header("Location: login.html");
    exit();
}
else
{
$sql = "select username,password from user where username ='".$uname."'AND password='".$password."' limit 1";
$sql1 = "select username from membership where username ='".$uname."' limit 1";
    
$result=mysqli_query($conn,$sql); 
$result1=mysqli_query($conn,$sql1);

if(mysqli_num_rows($result)==1 && mysqli_num_rows($result1)==1){
    echo '<script>alert("Login successfull");</script>';
    echo '<script>window.location.href = "afterlogin.html";</script>';
    }
else if(mysqli_num_rows($result)==1 && mysqli_num_rows($result1)!=1){
    echo '<script>alert("login successfull");</script>';
    echo '<script>window.location.href = "nonmem.html";</script>';
   }
else {
    echo '<script>alert("Please enter valid details");</script>';
    echo '<script>window.location.href = "login.html";</script>';
}
}
}  
?>

