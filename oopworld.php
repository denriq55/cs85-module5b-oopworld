<?php
//create Habit class
class Habit {
    public $habitName;
    public $category;
    public $timeOfDay;
    public $frequency;
    public $isComplete;

    //Set up habit data
    public function __construct($habitName, $category, $frequency, $timeOfDay) {
        $this->habitName = $habitName;
        $this->category = $category;
        $this->frequency = $frequency;
        $this->timeOfDay = $timeOfDay;
        $this->isComplete = false; 
    }

    //Method to display status
    public function displayStatus() {
        if (!$this->isComplete) {
            return "❌";
        } else {
            return "✅";
        }
    }

    //Method to change time of day. 
    //Possible values: any, morning, afternoon, night
    public function updateTimeOfDay($newTime) {
        $this->timeOfDay = $newTime;
        return "Time of day updated to: " . $this->timeOfDay;
    }

    //Method to change frequency. 
    public function updateFrequency($newFrequency) {
        $this->frequency = $newFrequency;
        return "Frequency updated to: " . $this->frequency;
    }

    //Method to display summary of habit.
    public function displaySummary() {
        $status = $this->displayStatus();
        return $this->habitName . "|" . $this->category . "|" . $this->frequency . "|" . $this->timeOfDay .  "|" . $status;
    }
}


?>
