<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
        <meta name="author" content="Parthav Chodvadiya">
        <title>Log in | Sign up</title>
    </head>
    <style>
        div{
            background-color: 	#ffffff;
            margin: auto;
            text-align: center;
            width: 95%;
            border: 3px solid black;
            padding: 10px;
            padding-left: auto;
            padding-right: auto;
        }
        h2{
            text-align: center;
        }
        .center {
            border-radius: 50px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 25%;
        }
        #google,#login{
            width: 30%;
            background-color: white;
            text-align: center;
        }
        #login{
            background-color: 	#663399;
            font-size: large;
            font-weight: bold;
        }
        input[type=text],#password{
            width: 30%;
            padding: 12px 20px;
            margin-top: 5px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: medium;
            font-weight: bold;
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
        #google{
            color: black;
            font-weight: bold;
            font-size: large;
        }
        span{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            text-align: left;
            margin-right: 24%;
            font-size: medium;
        }
    </style>
    <body>
        <div>
            <a href="home.php"><img src="learnzy.png" class="center"></a>
            <h2>Welcome Back</h2>
            <input id="google" type="submit" value="Continue with Google">
            <p>or</p>
            <form action="login_check.php" method="post">
                <span id="span1">Email Id</span><br>
                <input id="emailid" type="text" name="email" placeholder="Enter Your Email Id" required><br><br>
                <span id="span2">Password</span><br>
                <input type="password" id="password" name="password" placeholder="Enter Your Password" required><br><br>
                <br><input id="login" type="submit" value="Login">
            </form>
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
    </body>
</html>