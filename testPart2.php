<?php
include 'Team.php';

$tigers = new Team("Tigers");

$tigers->finalScore(3,1);
$tigers->finalScore(5,2);
$tigers->finalScore(1,1);
$tigers->finalScore(4,0);
$tigers->finalScore(2,2);

echo "Goal average is " . $tigers->getGoalAverage();

?>