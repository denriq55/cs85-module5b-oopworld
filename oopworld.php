<?php
//create Habit class
class Habit {
    public $habitName;
    public $category;
    public $timeOfDay;
    public $frequency;
    public $isComplete;

    //Set up habit data
    public function __construct($habitName, $category, $timeOfDay, $frequency) {
        $this->habitName = $habitName;
        $this->category = $category;
        $this->timeOfDay = $timeOfDay;
        $this->frequency = $frequency;
        $this->isComplete = false; 
    }

}
?>