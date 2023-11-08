<?php
class team {
    private $teamName;
    private $totalPoints;
    private $totalGoals;
    private $totalGames;

    
    public function __construct($teamName) {
        $this->teamName = $teamname;
        $this->teamPoints = 0;
        $this->teamGoals = 0;
        $this->teamGames = 0;
    }
    
    public function finalScore($homeScore, $opposingScore) {
        $this->totalGames++;
        
        if ($homeScore > $opposingScore) {
            $this->totalPoints += 3; //Home team won
        } elseif ($homeScore === $opposingScore) {
            $this->totalPoints += 1; // It's a draw
        }
        
        $this->totalGoals += $homeScore;
    }
    
    public function getTeamName() {
        return $this->TeamName;
    }
    public function getTotalPoints() {
        return $this->TotalPoints;
    }
    
    public function getTotalGames() {
        return $this->totalGames;
    }
    
}



    