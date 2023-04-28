<?php
session_start();
$check = isset($_SESSION['islogin']);
if (!$check) {
    echo "<script>window.location.assign('login.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
         #divlogin {
            padding-left: 50%;
            text-align: left;
            margin-top: -90px;
        }



        #login {
            border-radius: 20px;
            background-color: #663399;
            font-size: large;
            color: white;
        }

        .center {
            border-radius: 50px;
            display: block;
            max-width: 15%;
            max-height: 25%;
            padding-bottom: -100px;
        }

        #menu1 {
            padding-left: 20px;
            padding-top: 20px;
        }

        .navbar {
            font-size: 20px;
            color: purple;
        }

        #practice,
        #learn,
        #compete,
        #internship,
        #job ,
        #login{
            border-radius: 10px;
            background-color: plum;
            font-size: large;
            color: black;
            margin-right: 5px;
            cursor: pointer;
        }

        #practice:hover,
        #learn:hover,
        #compete:hover,
        #internship:hover,
        #job:hover ,#login:hover{
            border: 3px solid black;
            color: purple;
            background-color: white;
        }
        .submit:hover{
            border: 3px solid black;
            color:purple;
            background-color: white;
        }
        input[type=submit] ,button{
            width: 25%;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: 1px solid black;
            background-color: purple;
            border-radius: 4px;
            cursor: pointer;
        }

        li {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <div>
            <a href="home.php"><img src="learnzy.png" class="center"></a>
        </div>
        
        <div id="divlogin">
            <input id="learn" type="button" value="Learn" onclick="window.location.href='learn.php';">
            <input id="practice" type="button" value="Practice" onclick="window.location.href='practice.php';">
            <input id="compete" type="button" value="Compete" onclick="window.location.href='compete.php';">
            <input id="internship" type="button" value="Internships" onclick="window.location.href='internship.php';">
            <input id="job" type="button" value="Jobs" onclick="window.location.href='job.php';">
            <?php
            if (!isset($_SESSION['islogin'])) {
                echo '<button type="submit" id="login"><a style="text-decoration:none;" href="login.php">Log In</a></button>';
                echo '<button type="submit" id="login" style="display:none;"><a href="logout.php">Log Out</a></button>';
            } else {
                echo '<button type="submit" id="login" style="display:none;"><a href="login.php">Log in</a></button>';
                echo '<button type="submit" id="login"><a style="text-decoration:none;" href="logout.php">Logout</a></button>';
            }
            ?>
        </div>
    <div id="menu1">
        <br>
        <p class="navbar"><a style="text-decoration:none;" href="home.php">Learnzy</a> >> <a style="text-decoration:none;" href="compete.php">Quiz</a></p>
        <br>
    </div>
    <div class="navbar">
    <ul>
        <li><a href="dsa.php" style="text-decoration:none;">Data Structures and Algorithms</a></li>
        <li><a href="ai.php" style="text-decoration:none;">Artificial Intelligence</a></li>
        <li><a href="ml.php" style="text-decoration:none;">Machine Learning</a></li>
        <li><a href="python.php" style="text-decoration:none;">Python</a></li>
        <li><a href="cpp.php" style="text-decoration:none;">C++</a></li>
        <li><a href="wd.php" style="text-decoration:none;">Web Development</a></li>
        <li><a href="ad.php" style="text-decoration:none;">Android Development</a></li>
        <li><a href="java.php" style="text-decoration:none;">Java</a></li>
    </ul>
    </div>
</div>
</body>
</html>