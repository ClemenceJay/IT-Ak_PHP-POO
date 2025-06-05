<?php

class TaskAlreadyCompletedException extends Exception {
    public function __construct(string $message = "Cette tâche est déjà terminée", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}