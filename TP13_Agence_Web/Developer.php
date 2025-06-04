<?php

class Developer {
    private int $id;
    private string $name;
    private array $skills;
    private array $assignedTasks = [];
    public function __construct(int $id, string $name, array $skills) {
        $this->id = $id;
        $this->name = $name;
        $this->skills = $skills;
    }
    public function assignTask(Task $task): void {
        $this->assignedTasks[] = $task;
    }
    public function getWorkload() : int {
        $workload = 0;
        foreach($this->assignedTasks as $task){
            if($task->isCompleted === false){
                $workload ++;
            }
        }
        return $workload;
    }

    public function getName() : string {
        return $this->name;
    }
}