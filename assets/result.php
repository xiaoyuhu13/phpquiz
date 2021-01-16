<!DOCTYPE html>

<html>
<head>
	<meta charset=UTF-8/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Slab&family=Sanchez&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2021 Code Intern Web Quiz</title>
</head>
 
<body>
	<div id="result-page-wrap">
        <div class='header' id='result-header'>
            <div class='green-rect'></div>
            <h1> Results </h1>
            <div class='green-rect'></div>
        </div>
		
        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9 -answers'];

            
            //code for storing short answer question answers into sql
            /*
            $mysqli = new mysqli("localhost", "root", "", "quiz");
            if($mysqli === false){
            die("ERROR: Could not connect. " . $mysqli->connect_error);
            }
            $sql = "INSERT INTO persons (q7answers, q8answers, q9answers) VALUES ('$answer7', '$answer8', '$answer9')";
            if($mysqli->query($sql) === true){
             echo "Records inserted successfully.";
            } else{
             echo "ERROR: Could not execute $sql. " . $mysqli->error;
            }
            $mysqli->close();
            */

            $totalCorrectMC = 0;
            $totalCorrectTF = 0;
            
            
            if ($answer1 == "A") { $totalCorrectMC++; }
            if ($answer2 == "B") { $totalCorrectMC++; }
            if ($answer3 == "D") { $totalCorrectMC++; }
            if ($answer4 == "T") { $totalCorrectTF++; }
            if ($answer5 == "F") { $totalCorrectTF++; }
            if ($answer5 == "F") { $totalCorrectTF++; }
            
            
            echo "<div class='results'>$totalCorrectMC/3 Multiple choice correct</div>";
            echo "<div class='results'>$totalCorrectTF/3 True false correct</div>";
            echo "<div class='results'>Short answer to be graded</div>";
            
        ?>
	
	</div>
 
</body>
</html>