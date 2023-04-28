<?php
session_start();
$check = isset($_SESSION['islogin']);
if (!$check) {
    echo "<script>window.location.assign('login.php');</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="author" content="Parthav Chodvadiya">
    <title>Learn</title>
</head>
<style>
    .center {
        border-radius: 50px;
        display: block;
        max-width: 15%;
        max-height: 25%;
        padding-bottom: -100px;
    }

    .navbar {
        font-size: 20px;
    }

    table {
        margin-top: 10px;

    }
    #menu1{
        padding-left:20px;
        padding-top:20px;
    }

    td {
        padding: 10px;
        font-size: large;
        color: blueviolet;
    }       
    #login{
        border-radius: 20px;
        background-color: #663399;
        font-size: large;
        color: white;
    }
    #practice,#learn,#compete,#internship,#job,#login{
        border-radius: 10px;
        background-color: plum;
        font-size: large;
        color: black;
        margin-right: 5px;
        cursor: pointer;
    }
    #practice:hover,#learn:hover,#compete:hover,#internship:hover,#job:hover,#login:hover{
        border: 3px solid black;
        color:purple;
        background-color: white;
    }
    input[type=submit],button {
        width: 25%;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: pointer;
    }
    input{
        text-align: center;
    }
    #divlogin{
        padding-left: 50%;
        text-align: left;
        margin-top: -90px;
    }
    .menu-icon{
        margin-left: 10px;
    }
    #menu{
        padding-left: 78%;
    }
</style>

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
        <p class="navbar"><a style="text-decoration:none;" href="home.php">Learnzy</a> >> <a style="text-decoration:none;" href="learn.php">Learn</a></p>
        <br>
    </div>
    </div>
    <table border="1">
        <tr>
            <td><a style="text-decoration:none;"
                    href="https://www.youtube.com/playlist?list=PLfqMhTWNBTe3H6c9OGXb5_6wcc1Mca52n"><img
                        src="webDevlop.png">
                    <p>Web Development Including HTML,CSS,Javascript,PHP</p>
                </a></td>
            <td><a style="text-decoration:none;"
                href="https://www.youtube.com/playlist?list=PLdo5W4Nhv31bZSiqiOL5ta39vSnBxpOPT"><img src="python.png">
                <p>Python for beginners : Basic to Advanced leval </p></a>
            </td>
            <td><a style="text-decoration:none;"
                href="https://www.youtube.com/playlist?list=PLu0W_9lII9ai6fAMHp-acBmJONT7Y4BSG"><img src="ml.jpg">
                <p>Complete Machine Learning & Data Science Progarm </p></a>
            </td>
            <td><a style="text-decoration:none;"
                href="https://www.youtube.com/playlist?list=PLdo5W4Nhv31YU5Wx1dopka58teWP9aCee"><img src="cpp.png">
                <p>Master C++ Programming - Complete Beginner to Advanced</p></a>
            </td>
        </tr>
        <tr>
            <td><a style="text-decoration:none;"
                href="https://www.youtube.com/playlist?list=PLfqMhTWNBTe0b2nM6JHVCnAkhQRGiZMSJ"><img src="dataStruct.png">
                <p>Data Structures and Algorithms - Self Paced</p></a>
            </td>

            <td><a style="text-decoration:none;"
                href="https://www.youtube.com/playlist?list=PLxCzCOWd7aiHGhOHV-nwb0HR5US5GFKFI"><img src="aI.jpg">
                <p>Artificial Intelligence</p></a>
            </td>
            <td><a style="text-decoration:none;"
                href="https://www.youtube.com/playlist?list=PLu0W_9lII9aiL0kysYlfSOUgY5rNlOhUd"><img src="androidDev.png">
                <p>Learn Android Developement with Flutter</p>
            </a></td>
            <td><a style="text-decoration:none;"
            href="https://www.youtube.com/playlist?list=PLfqMhTWNBTe3LtFWcvwpqTkUSlB32kJop"><img src="java.jpg">
                <p>Fork Java Programming - Self Paced</p></a>
            </td>

        </tr>
    </table>
</body>

</html>