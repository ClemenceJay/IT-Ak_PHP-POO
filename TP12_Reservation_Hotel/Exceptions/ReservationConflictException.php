<?php

class ReservationConflictException extends Exception {
    public function __construct(string $message = "La reservation n'est pas possible à ces dates", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}