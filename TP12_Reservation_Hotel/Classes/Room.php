<?php
require_once ("Reservation.php");
require_once ("Exceptions/ReservationConflictException.php");

class Room {
    public int $id;
    public string $number;
    public string $type;
    public float $pricePerNight;
    public array $listeReservations;

    public function __construct( int $id, string $number, string $type, float $pricePerNight)
    {
        $this->id = $id;
        $this->number = $number;
        $this->type = $type;
        $this->pricePerNight = $pricePerNight;
        $this->listeReservations = [];
    }

    public function addReservation(Reservation $newReservation) : void {
        $reservationPossible = true;
        foreach ($this->listeReservations as $reservation) {
            $existingStart = $reservation->startDate;
            $existingEnd = $reservation->endDate;

            if ($newReservation->startDate < $existingEnd && $newReservation->endDate > $existingStart) {
               $reservationPossible = false;
           }
        }
        if ($reservationPossible) {
            $this->listeReservations[] = $newReservation;
            $newReservation->confirm();
            echo "La reservation a bien été enregistrée <br>";
        } else {
            $newReservation->cancel();
            throw new ReservationConflictException();
        }
    }
    public function getReservation() : array {
        return $this->listeReservations;
    }

}