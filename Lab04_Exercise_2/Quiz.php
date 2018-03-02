<?php

$answers=array("Mercy", "20", "StarCraft", "Dorado", "500");
$score=0;
$percentage;


foreach($_POST as $value)
{

  switch($i)
  {
    case 0: echo "<p>Question 1: What is the name of the Angelic support character in Overwatch?</p>";
            break;

    case 1: echo "<p>Question 2: How much damage does every bullet of Soldier: 76 do at optimal range?</p>";
            break;

    case 2: echo "<p>Question 3: What videogame is D.va the professional of in Overwatch Lore?</p>";
            break;

    case 3: echo "<p>Question 4: What map in Overwatch was accidentaly based on a city in Italy?</p>";
            break;

    case 4: echo "<p>Question 5: How much currency does one get from a legendary chest?";
            break;

  }

  if($i==0)
  {
    echo "<p>You answered: $value <br>
            Correct answer: Mercy</p>";
  }
  else
  {
    echo"<p>You answered: $value <br>
            Correct answer: $answers[$i]</p>";
  }

  ++$i;

  if(in_array($value, $answers))
  {
    $score++;
  }
}

$percentage = ($score/5)*100;
echo "<p>Your scored: $score/5</p>";
echo "<p>Your percentage is: $percentage%</p>";

?>
