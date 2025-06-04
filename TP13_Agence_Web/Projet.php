<?php
class Projet {
    private int $id;
    private string $nom;
    private string $clientName;
    private DateTime $startDate;
    private ?DateTime $endDate = null;
    public array $tasks;

    public function __construct(int $id, string $nom, string $clientName) {
        $this->id = $id;
        $this->nom = $nom;
        $this->clientName = $clientName;
        $this->startDate = new DateTime();
    }

    public function addTask(Task $task) {
        $this->tasks[] = $task;
    }

    public function getProgress(): float {
        $terminatedTasks = 0;
        foreach ($this->tasks as $task) {
            if ($task->isCompleted) {
                $terminatedTasks++;
            }
        }
        $progress = $terminatedTasks / count($this->tasks);
        if ($progress == 1) {
            echo "<br>Le projet est terminé !<br>";
            $this->completeProjet();
        }
        return $progress*100;
    }

    private function completeProjet(): void {
        $this->endDate = new DateTime();
    }
}