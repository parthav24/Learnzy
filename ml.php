<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ML Quiz</title>
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
        #job:hover,#login:hover {
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
            <p class="navbar"><a style="text-decoration:none;" href="home.php">Learnzy</a> >> <a
                    style="text-decoration:none;" href="compete.php">Quiz</a> >> <a style="text-decoration:none;"
                    href="ml.php">ML Quiz</a></p>
            <br>
        </div>
    </div>
    <form id="dsa-quiz" onsubmit="return validate()" >
        <label for="res" id="res"></label><br><br>

    <label for="q1">
        What is Machine learning?<br>
    A . The autonomous acquisition of knowledge through the use of manual programs <br>
    B . The selective acquisition of knowledge through the use of manual programs<br>
    C . The autonomous acquisition of knowledge through the use of computer programs<br>
    D . The selective acquisition of knowledge through the use of computer programs</label><br>
    <input type="text" id="q1" name="q1"> <br>
    <label for="q1" id="q1Err"></label>
    <br><br>
   
    <label for="q2">
    How many types of Machine Learning Techniques?<br>
    A . 3<br>
    B . 5<br>
    C . 7<br>
    D . 9</label><br>
    <input type="text" id="q2" name="q2"> <br>
    <label for="q2" id="q2Err"></label>
    <br><br>

    <label for="q3">
    Machine learning is a subset of_________ .<br>
    A . Data Learining<br>
    B . Deep Learning <br>
    C . Artificial Intelligence<br>
    D . None of the above</label><br>
    <input type="text" id="q3" name="q3"> <br>
    <label for="q3" id="q3Err"></label>
    <br><br>

    <label for="q4">  
        Machine Learning is a field of AI consisting of learning algorithms that________ .<br>
    A . At executing some task<br>
    B . Over time with experience<br>
    C . Improve their performance<br>
    D . All of the above</label>  <br>
    <input type="text" id="q4" name="q4"> <br>
    <label for="q4" id="q4Err"></label>
    <br><br>

    <input type="submit" class="submit" value="Submit Your Answers">
</form>
<script>
    function validate(){
    var q1Ans=document.getElementById('q1').value;
    var q2Ans=document.getElementById('q2').value;
    var q3Ans=document.getElementById('q3').value;
    var q4Ans=document.getElementById('q4').value;
    var score=0;
    if(q1Ans == 'C' || q1Ans=='c'){
        document.getElementById('q1Err').innerHTML="=>Answer is Correct";
        score++;
    }
    else{
        document.getElementById('q1Err').innerHTML="=>Answer is Incorrect and Correct answer is C";
        
    }
    if(q2Ans == 'A' || q2Ans=='a'){
        document.getElementById('q2Err').innerHTML="=>Answer is Correct";
        score++;
    }
    else{
        document.getElementById('q2Err').innerHTML="=>Answer is Incorrect and Correct answer is A";

    }
    if(q3Ans == 'C' || q3Ans=='c'){
        document.getElementById('q3Err').innerHTML="=>Answer is Correct";
        score++;
    }
    else{
        document.getElementById('q3Err').innerHTML="=>Answer is Incorrect and Correct answer is C";

    }
    if(q4Ans == 'D' || q4Ans=='d'){
        document.getElementById('q4Err').innerHTML="=>Answer is Correct";
        score++;
    }
    else {
        document.getElementById('q4Err').innerHTML="=>Answer is Incorrect and Correct answer is D";

    }
    document.getElementById('res').innerHTML=score;

    return false;
    }
</script>
</body>
</html>