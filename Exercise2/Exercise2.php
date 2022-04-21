<?php
  $score = 0;
  $correct = 0;
  echo "<strong><p>1. What is Sepehr's last name?</p></strong>";
  echo "<p>You answered: ".$_POST["question1"]."</p>";
  echo "<p>Correct answer: Noori</p>";
  if ($_POST["question1"] == "Noori")
  {
    $score = $score + 20;
    $correct = $correct + 1;
  }
  echo "<strong><p>2. What is Landen's last name?</p></strong>";
  echo "<p>You answered: ".$_POST["question2"]."</p>";
  echo "<p>Correct answer: Doty</p>";
  if ($_POST["question2"] == "Doty")
  {
    $score = $score + 20;
    $correct = $correct + 1;
  }
  echo "<strong><p>3. What weighs more: a pound of feathers or a pound of bricks?</p></strong>";
  echo "<p>You answered: ".$_POST["question3"]."</p>";
  echo "<p>Correct answer: They weigh the same</p>";
  if ($_POST["question3"] == "They weigh the same")
  {
    $score = $score + 20;
    $correct = $correct + 1;
  }
  echo "<strong><p>4. What is the dive name for 203b?</p></strong>";
  echo "<p>You answered: ".$_POST["question4"]."</p>";
  echo "<p>Correct answer: Back 1.5 Somersaults Pike</p>";
  if ($_POST["question4"] == "Back 1.5 Somersaults Pike")
  {
    $score = $score + 20;
    $correct = $correct + 1;
  }
  echo "<strong><p>5. What is my shoe size?</p></strong>";
  echo "<p>You answered: ".$_POST["question5"]."</p>";
  echo "<p>Correct answer: 11.5</p>";
  if ($_POST["question5"] == "11.5")
  {
    $score = $score + 20;
    $correct = $correct + 1;
  }
  echo "<p>-----------------------------------------------------------------------------------------------------------------</p>";
  echo "<strong><p>Amount correct: </strong>".$correct."</p>";
  echo "<strong><p>Score: </strong>".$score."%</p>";
?>
