<?php

abstract class Task {
    private int $id;
    public string $title;
    private Developer $assignedTo;
    public bool $isCompleted = false;

    public function __construct( int $id, string $title, Developer $assignedTo)
    {
        $this->id = $id;
        $this->title = $title;
        $this->assignedTo = $assignedTo;
    }

    public function completeTask(){
        if($this->isCompleted){
            throw new Exception("Cette tâche est déjà terminée");
        }
        echo "<br> La tache ".$this->title." est terminée.<br>";
        $this->isCompleted = true;
    }
}