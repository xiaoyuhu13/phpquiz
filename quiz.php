<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Antic+Slab&family=Sanchez&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2021 Code Intern Web Quiz</title>
</head>

<body>
  <div id='quiz-page-wrap'>
    <form action="assets/result.php" method='post'>
      <div class='header'>
        <div class='green-rect'></div>
        <h1> 2021 Code Intern Web Quiz </h1>
        <div class='green-rect'></div>
      </div>

      <h2>Multiple Choice Questions</h2>
      <ol>   
        <li>
            <h3>What is 2 + 5?</h3>
            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                <label for="question-1-answers-A">A) 7 </label>
            </div>
            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                <label for="question-1-answers-B">B) 8</label>
            </div>
            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                <label for="question-1-answers-C">C) 10</label>
            </div>
            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                <label for="question-1-answers-D">D) 9</label>
            </div>
        </li>
        
        <li>
            <h3>What is 5 - 1?</h3>
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                <label for="question-2-answers-A">A) 3</label>
            </div>
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                <label for="question-2-answers-B">B) 4</label>
            </div>
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                <label for="question-2-answers-C">C) 2</label>
            </div>
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                <label for="question-2-answers-D">D) 1</label>
            </div>
        </li>
        
        <li>
            <h3>What is 29 &#247; 3?</h3>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                <label for="question-3-answers-A">A) 10</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                <label for="question-3-answers-B">B) 3</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                <label for="question-3-answers-C">C) 9</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                <label for="question-3-answers-D">D) 7</label>
            </div>
        </li>
    </ol>



    <h2> True/False Questions</h2>
      <ol start="4">
        <li class='truefalse'>
          <h3>Someone described as loquacious would be very talkative.</h3>
          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-T" value="T" />
            <label for="question-3-answers-true">True</label>
            <input type="radio" name="question-4-answers" id="question-4-answers-F" value="F" />
            <label for="question-3-answers-false">False</label>
          </div>
        </li> 
        <li class='truefalse'>
          <h3>An ambivalent person makes devisions quickly.</h3>
          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-T" value="T" />
            <label for="question-5-answers-true">True</label>
            <input type="radio" name="question-5-answers" id="question-5-answers-F" value="F" />
            <label for="question-3-answers-true">False</label>
          </div>
        </li> 
        <li class='truefalse'>
          <h3>The candor salesman was known for his lies.</h3>
          <div>
          <input type="radio" name="question-6-answers" id="question-6-answers-T" value="T" />
          <label for="question-6-answers-true">True</label>
          <input type="radio" name="question-6-answers" id="question-6-answers-F" value="F" />
          <label for="question-3-answers-false">False</label>
          </div>
        </li> 
      </ol>


      <h2>Short Answer Questions</h2>
        <ol start="7">
          <li>
            <div>
              <h3>Explain the difference between an affordance and a signifier in design.</h3>
              <textarea class='text' name="question-7-answer" rows="5" cols="40"></textarea>
            </div>
          </li>
          <li>
            <div>
              <h3>Explain the concept of learned helplesness and how it relates to design.</h3>
              <textarea class='text' name="question-8-answer" rows="5" cols="40"></textarea>
            </div>
          </li>
          <li>
            <div>
              <h3>List the three levels of information processing.</h3>
              <textarea class='text' name="question-9-answer" rows="5" cols="40"></textarea>
            </div>
          </li>
        </ol>


    <input type="submit" value="Submit" class="submitbtn" />
    </form>
    </div>

</body>
</html>