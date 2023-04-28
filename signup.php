<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="author" content="Parthav Chodvadiya">
    <title>Sign up</title>
</head>
<script>
    function validate() {
        var refname = /^[A-z]+$/;
        var relname = /^[A-z]+$/;
        var reuname = /^[A-z0-9]+$/;
        var reemail = /^([A-z]+[0-9]*)@([a-z]+)\.([a-z]{2,5})$/;
        var repnum = /^[0-9]{10,12}$/;
        var reorg = /^[A-z ]+$/;
        var repassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/;
        var selectedValue = document.getElementById('gender').value;
        var errorMsg = " ";
        if (!refname.test(firm.fname.value)) {
            errorMsg += "Invaild First Name \n";
        }
        if (!relname.test(firm.lname.value)) {
            errorMsg += "Invaild Last Name \n";
        }
        if (!reuname.test(firm.uname.value)) {
            errorMsg += "Invaild User Name \n";
        }
        if(!reemail.test(firm.email.value)){
            errorMsg += "Invalid Email \n";
        }
        if(selectedValue == "none"){
            errorMsg += "Please Select Gender \n";
        }
    
        if (!repnum.test(firm.phno.value)) { 
            errorMsg += "Invaild Phone Number \n";
        }
        if (!reorg.test(firm.org.value)) {
            errorMsg += "Invaild Organisation Name \n";
        }
        if (!repassword.test(firm.password.value)) {
            errorMsg += "Invaild Password\n";
        }
        if(firm.password.value != firm.cnfmpswd.value){
            errorMsg += "Password and Confirm Password are diffrent\n";
        }
        if(errorMsg!=""){
            alert(errorMsg);
            return false;
        }
        return true;
    }
</script>
<style>
    div {
        background-color: #ffffff;
        margin: auto;
        width: 95%;
        border: 3px solid black;
        padding: 10px;
        padding-left: auto;
        padding-right: auto;
    }

    h2 {
        text-align: center;
    }

    .center {
        border-radius: 50px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 25%;
    }

    #fnameErr {
        text-align: center;
    }

    #span1,
    #span2,
    #span3,
    #span4,
    #span5,
    #span6,
    #span7,
    #span8,
    #span9 {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: medium;
    }

    #password {
        width: 30%;
        padding: 12px 20px;
        margin-top: 5px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
        font-weight: bold;
    }

    #cnfmpswd {
        -webkit-text-security: disc;
    }

    input[type=text] {
        width: 30%;
        padding: 12px 20px;
        margin-left: 35%;
        margin-top: 5px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
        font-weight: bold;
    }

    #gender {
        width: 30%;
        padding: 12px 20px;
        margin-top: 5px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 30%;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 10px;
        cursor: pointer;
    }

    #register {
        width: 30%;
        text-align: center;
        background-color: #663399;
    }

    span {
        text-align: left;
        margin-left: 35%;
    }

    #span4,
    #password,
    #gender {
        margin-left: 35%;
    }

    #register {
        margin-left: 35%;
        font-weight: bold;
    }

    #login {
        text-align: center;
    }

    b {
        text-decoration-color: #ccc;
    }
</style>

<body>
    <form name="firm"  onsubmit="return validate()" action="connect.php" method="post">
        <div>
            <a href="home.php"><img src="learnzy.png" class="center"></a>
            <h2>Welcome!</h2>
            <span id="span1">First Name</span><br>
            <input id="fname" type="text" placeholder="Enter Your First Name" name="fname"><br><br>
            <span id="span2">Last Name</span><br>
            <input id="lname" type="text" placeholder="Enter Your Last Name" name="lname"><br><br>
            <span id="span3">User Name</span><br>
            <input id="uname" type="text" placeholder="Enter Your Username" name="uname"><br><br>
            <label id="span4" for="gender">Gender</label><br>
            <select id="gender" name="gender">
                <option value="none" disabled selected>Select Your Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select><br><br>
            <span id="span5">Email</span><br>
            <input id="email" type="text" placeholder="Enter Your Email Id" name="email"><br><br>
            <span id="span6">Phone</span><br>
            <input id="phno" type="text" placeholder="Enter Your Phone number" name="phno"><br><br>
            <span id="span7">Organisation</span><br>
            <input id="org" type="text" placeholder="Enter Your Organisation / Institute" name="org"><br><br>
            <span id="span8">Password</span><br>
            <input type="password" id="password" name="password" placeholder="Enter Your Password">
            <br><br>
            <span id="span9">Confirm Password</span><br>
            <input id="cnfmpswd" type="text" placeholder="Enter Your Password" name="cnfmpswd"><br><br>
            <br><input type="submit" id="register" value="Register">
            <p id="login">Already have an account? <a href="login.php">Log in</a></p>
        </div>
    </form>

</body>

</html>