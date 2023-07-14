<html>
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    function func() {
      swal("Signup", "Successfully!", "success");
        setTimeout(function() {
          window.location.href = "login.html";
        }, 5000);
    }
  </script>
</head>
<?php 

$host="localhost";
$user="root";
$password="";
$db="snooker";

$conn = mysqli_connect($host, $user, $password,$db);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$password = $_POST['pass'];

$sql="insert into user values ('$fname','$lname','$uname','$email','$password')";

$result = (mysqli_query($conn, $sql));
if($result)
{
    echo '<script>alert("Signup successfully");</script>';
    echo '<script>window.location.href = "login.html";</script>';
}
else
{
    echo '<script>alert("Signup unsuccessful");</script>';
    echo '<script>window.location.href = "Signup.html";</script>';
}
mysqli_close($conn);
?>