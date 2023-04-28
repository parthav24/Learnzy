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
    <title>Practice</title>
</head><style>
    #divlogin{
        padding-left: 50%;
        text-align: left;
        margin-top: -90px;
    }
    input{
        text-align: center;
    }
    #login{
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
    #menu1{
        padding-left:20px;
        padding-top:20px;
    }
    .navbar {
        font-size: 20px;
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
    .nameof{
        text-align:center;
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
        <p class="navbar"><a style="text-decoration:none;" href="home.php">Learnzy</a> >> <a style="text-decoration:none;" href="practice.php">Practice</a></p>
        <br>
        <table border="1" cellspacing="0">
        <tr>
            <td>For Web Developement<a style="text-decoration:none;"
                    href="https://www.frontendmentor.io/"><img
                        src="frontendmentor.png">
                    <p>FrontEndMentor</p>
                </a></td>
            <td>For Python<a style="text-decoration:none;"
                href="https://www.codechef.com/learn/python"><img src="codechefPY.jpeg">
                <p>CodeChef</p></a>
            </td>
            <td>For Machine Learning<a style="text-decoration:none;"
                href="https://colab.research.google.com/github/jakevdp/PythonDataScienceHandbook/blob/master/notebooks/05.00-Machine-Learning.ipynb"><img src="googlecollabML.png">
                <p>Google Collab</p></a>
            </td>
            <td>For C++<a style="text-decoration:none;"
                href="https://leetcode.com/problems/subsets-ii/solutions/30168/C++-solution-and-explanation/"><img src="leetcodeCPP.png">
                <p>Leet Code</p></a>
            </td>
        </tr>
        <tr>
            <td>For DSA<a style="text-decoration:none;"
                href="https://www.geeksforgeeks.org/data-structures/"><img src="gfgDSA.png">
                <p>Geeks For Geeks</p></a>
            </td>

            <td>For AI<a style="text-decoration:none;"
                href="https://www.kaggle.com/general/276298"><img src="kaggleAI.png">
                <p>Kaggle</p></a>
            </td>
            <td>For Android Developement<a style="text-decoration:none;"
                href="https://www.freecodecamp.org/news/tag/android-app-development/"><img src="freecodecampAD.png">
                <p>Free Code Camp</p>
            </a></td>
            <td>For Java<a style="text-decoration:none;"
            href="https://codingbat.com/java"><img src="codingbat.JV.jpeg">
                <p>CodingBat</p></a>
            </td>

        </tr>
        <tr>
            <td>For Web Developement<a style="text-decoration:none;"
                    href="https://www.codewell.cc/"><img
                        src="codewellWD.jpeg">
                    <p>CodeWell</p>
                </a></td>
            <td>For Python<a style="text-decoration:none;"
                href="https://www.hackerrank.com/domains/python"><img src="hackerrankPY.png">
                <p>Hacker Rank</p></a>
            </td>
            <td>For Machine Learning<a style="text-decoration:none;"
                href="https://machinehack.com/"><img src="machinehackML.jpeg">
                <p>Machine Hack</p></a>
            </td>
            <td>For C++<a style="text-decoration:none;"
                href="https://coderbyte.com/question/websites-to-learn-cpp"><img src="coderbyteCPP.jpeg">
                <p>CoderByte</p></a>
            </td>
        </tr>
        <tr>
            <td>For DSA<a style="text-decoration:none;"
                href="https://www.hackerrank.com/domains/data-structures"><img src="hackerrankDSA.jpeg">
                <p>Hacker Rank</p></a>
            </td>

            <td>For AI<a style="text-decoration:none;"
                href="https://colab.research.google.com/drive/1n_xrgKDlGQcCF6O-eL3NOd_x4NSqAUjK"><img src="googlecolabAI.png">
                <p>Google Collab</p></a>
            </td>
            <td>For Android Developement<a style="text-decoration:none;"
                href="https://www.codewars.com/"><img src="codewarsAD.png">
                <p>Code Wars</p>
            </a></td>
            <td>For Java<a style="text-decoration:none;"
            href="https://codegym.cc/?ref=ext_admitadaffiliatenetwork28_e1a5e6b952eb81054e761e2b50320a93_1214120&tm_uid=e1a5e6b952eb81054e761e2b50320a93&tm_publisher=1214120&tm_website=1317079"><img src="codegymJV.jpeg">
                <p>Code Gym</p></a>
            </td>

        </tr>
    </table>
</body>

</html>