
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
        return "<p>Time of day updated to: " . $this->timeOfDay . "</p>";
    }

    //Method to change frequency. 
    public function updateFrequency($newFrequency) {
        $this->frequency = $newFrequency;
        return "<p>Frequency updated to: " . $this->frequency . "</p>";
    }

    //Method to display summary of habit.
    public function displaySummary() {
        $status = $this->displayStatus();
        return "<p>" . $this->habitName . " | " . $this->category . " | " . $this->frequency . " | " . $this->timeOfDay .  " | " . $status . "</p>";
    }
}

$habit1 = new Habit("Meditate", "Health", "Daily", "Morning");
$habit1->isComplete = true;
echo $habit1->displaySummary(); 
//Expected Output: Meditate | Health | Daily | Morning | ✅

$habit2 = new Habit("Gym", "Health", "Daily", "Morning");
$habit2->isComplete = false;

echo $habit2->updateTimeOfDay("Afternoon");
//Expected output: Time of day updated to: Afternoon

echo $habit2->updateFrequency("M, W, F");
//Expected output: Frequency updated to: M, W, F

echo $habit2->displaySummary(); 
//Expected Output: Gym | Health | Afternoon | M,W,F | ❌


?>
