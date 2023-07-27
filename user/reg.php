<?php
include("database/db.php");
session_start();

if(isset($_POST['submit']))
{
$a = $_POST['username'];
$b = $_POST['email'];
$c = $_POST['password'];

$check = "SELECT * FROM users WHERE username='$a' OR email='$b'";
$reg = mysqli_query($con,$check);
$row=mysqli_num_rows($reg);
if($row==0)
{
    $s = "INSERT INTO users(`username`, `email`, `pass`) VALUES ('$a','$b','$c')";
    if(mysqli_query($con,$s))
    {
         $_SESSION['msg'] = 'Your registration is successfully completed.';
        header("location:login.php");
    }
    else
    {
        echo "<script>alert('Connection failed. please try again.')</script>";
        header("location:register.php");
    } 
}
else{
    $_SESSION['msg'] = 'This Username or Email ID already exisits';
    header("location:register.php");
}

}
else{
    header("location:register.php");
}
?>

