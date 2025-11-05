<?php
class Team {

    private $teamName;
    private $totalPoints;
    private $totalGoals;
    private $totalGames;


public function __construct($name) {
    $this->teamName = $name;
    $this->totalPoints = 0;
    $this->totalGoals = 0;
    $this->totalGames = 0;
}

public function finalScore($parm1, $parm2) {
    $this->totalGoals += $parm1;
    $this->totalGames += 1;
    if ($parm1 > $parm2) {
        $this->totalPoints += 3;
    }
    elseif ($parm1 == $parm2) {
        $this->totalPoints += 1;
    }
    
}

}
?>