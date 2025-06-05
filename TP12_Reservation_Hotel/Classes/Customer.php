<?php
require_once ("Reservation.php");
class Customer
{
    public int $id;
    public string $nom;
    public string $email;
    public array $reservations;

    public function __construct(int $id, string $nom, string $email) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->reservations = [];
    }

    public function addReservation(Reservation $reservation) : void {
        $this->reservations[] = $reservation;
    }
    public function getReservationHistory() : array {
        return $this->reservations;
    }
 }