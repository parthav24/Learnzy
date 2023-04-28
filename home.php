<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="author" content="Parthav Chodvadiya">
    <title>Home</title>
</head>
<style>
    .center {
        border-radius: 50px;
        display: block;
        max-width: 15%;
        max-height: 25%;
        padding-bottom: -100px;
    }

    #login {
        border-radius: 20px;
        background-color: #663399;
        font-size: large;
        color: white;
        border: 2px solid black;
    }

    #practice,
    #learn,
    #compete,
    #internship,
    #job,
    #login {
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
    #job:hover {
        border: 3px solid black;
        color: purple;
        background-color: white;
    }

    #login:hover {
        color: purple;
        border-radius: 20px;
        border: 3px solid black;
        background-color: white;
    }

    td {
        padding:7px 10px 7px 10px;
     }

    .slogan1 {
        margin-left: 15px;
        font-size: 25px;
    }

    .slogan2 {
        margin-left: 15px;
        font-size: 22px;
    }

    .slogan3 {
        margin-left: 15px;
        font-size: 30px;
    }

    .comp {
        font-size: large;
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

    hr {
        border-width: 3px;
    }

    input {
        text-align: center;
    }

    #divlogin{
        padding-left: 50%;
        text-align: left;
        margin-top: -90px;
    }

    .menu-icon {
        margin-left: 10px;
    }

    #menu {
        padding-left: 78%;
    }
</style>

<body>
    <a href="home.php"><img src="learnzy.png" class="center"></a>
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
    <div>
        <table>
            <tr>
                <td>
                    <p class="slogan1">Connecting <strong>Experties</strong>, Recruiters</p>
                    <p class="slogan2"> Explore opportunities from across the globe to learn, showcase skills, get hired
                        by your dream
                        company.</p>
                    <hr>
                    <p class="slogan3">Work is Worship</p>
                </td>
                <td>
                    <img src="learnzy1.png">
                </td>
            </tr>

        </table>
    </div>
    <hr>
    <div>
        <table>
            <tr>
                <td>
                    <div class="comp" width="20%">Companies <br>Trust us :</div>
                </td>
                <td>
                    <div width="20%"><img src="amazon.png" alt="Not Found" width="150px" height="50px"></div>
                </td>
                <td>
                    <div width="20%"><img src="tata.png" alt="Not Found" width="150px" height="70px"></div>
                </td>
                <td>
                    <div width="20%"><img src="microsoft.jpeg" alt="Not Found" width="180px" height="70px"></div>
                </td>
                <td>
                    <div width="20%"><img src="google.png" alt="Not Found" width="150px" height="70px"></div>
                </td>
                <td>
                    <div width="20%"><img src="mahindra.jpeg" alt="Not Found" width="150px" height="70px"></div>
                </td>
                
                <td>
                    <div width="20%"><img src="uber.png" alt="Not Found" width="150px" height="70px"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <div width="20%"><img src="hero.png" alt="Not Found" width="150px" height="70px"></div>
                </td>
            
                <td>
                    <div width="20%"><img src="nestle.png" alt="Not Found" width="150px" height="70px"></div>
                </td>
                <td>
                    <div width="20%"><img src="pepsico.png" alt="Not Found" width="150px" height="70px"></div>
                </td>
                <td>
                    <div width="20%"><img src="adityabirla.jpeg" alt="Not Found" width="150px" height="70px"></div>
                </td>
                

            </tr>
        </table>
    </div>
    <hr>
</body>

        </html>