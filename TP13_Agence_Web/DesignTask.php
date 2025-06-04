<?php

class DesignTask  extends Task{
    private string $toolUsed;

    public function __construct(int $id, string $title, Developer $assignedTo, string $toolUsed)
    {
        parent::__construct($id, $title, $assignedTo);
        $this->toolUsed = $toolUsed;
    }
}