<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $org = $_POST['org'];
    $password = $_POST['password'];
    $cnfmpswd = $_POST['cnfmpswd'];

    $con = new mysqli('localhost','root','','webdevpro');
    if($con->connect_error){
        die('Connection failed: '.$con->connect_error);
    }else{
        $stmt = $con->prepare("insert into user(fname,lname,uname,gender,email,phno,org,password)values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssiss",$fname,$lname,$uname,$gender,$email,$phno,$org,$password);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $con->close();
    }
?>