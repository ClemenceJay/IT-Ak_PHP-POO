<?php
require_once ("Exceptions/TaskAlreadyCompletedException.php");

abstract class Task {
    private int $id;
    private string $title;
    private Developer $assignedTo;
    public bool $isCompleted = false;

    public function __construct( int $id, string $title, Developer $assignedTo)
    {
        $this->id = $id;
        $this->title = $title;
        $this->assignedTo = $assignedTo;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function completeTask(){
        if($this->isCompleted){
            throw new TaskAlreadyCompletedException();
        }
        echo "<br> La tache ".$this->title." est terminée.<br>";
        $this->isCompleted = true;
    }
}