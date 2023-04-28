<?php

if($_POST){
    $email = $_POST['email'];
    $password =$_POST['password'];

$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"webdevpro");
$query=mysqli_query($conn,"select * from user");
if(mysqli_num_rows($query) > 0)
{   
    while($row = mysqli_fetch_assoc($query)){
        if($row['email'] == $email && $row['password'] == $password)
        {
            echo "<script>alert(\"Login successfully\");</script>";
            session_start();
            $_SESSION['islogin'] = true;
            echo "<script>window.location.assign('home.php');</script>";
        }
    }
}
echo "<script>alert(\"invalid email or password\")</script>";
echo "<script>window.location.assign('home.php');</script>";
}

?>