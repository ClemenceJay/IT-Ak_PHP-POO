<?php
 require_once ("Task.php");
 require_once ("Billable.php");

 class DevelopmentTask extends Task implements Billable{
     private float $estimatedHours;
     public function __construct(int $id, string $title, Developer $assignedTo, float $estimatedHours)
     {
         parent::__construct($id, $title, $assignedTo);
         $this->estimatedHours = $estimatedHours;
     }

     public function completeTask()
     {
         parent::completeTask();
         echo "Le cout estimé est de ".$this->calculateCost()."€. <br>";
     }

     public function calculateCost(): float
     {
         return $this->estimatedHours*50;
     }
 }