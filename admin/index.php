
<?php
session_start();
if(!isset($_SESSION['id']))
{
  header('location:login.php');
}
?>
<?php
include("database/db.php");
session_start();

$a = $_POST['uname'];
$b = $_POST['password'];

$s = "SELECT * FROM admin WHERE uname='$a' AND password='$b'";
$sel = mysqli_query($con, $s);
$rows = mysqli_num_rows($sel);

if ($rows == 1) {
    $_SESSION['id'] = "admin123";
    header("location:home.php");
} else {
	echo "<script>alert('Invalid email and password')</script>";
	echo "<script>window.location='login.php'</script>";
    
}
?>
