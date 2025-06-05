<?php
require_once ("Interfaces/Billable.php");
class Reservation implements Billable {
    public int $id;
    public Room $room;
    public Customer $customer;
    public DateTime $startDate;
    public DateTime $endDate;
    public string $status;
    //status (string — pending, confirmed, canceled, completed)

    public function __construct(int $id, Room $room, Customer $customer, string $startDate, string $endDate) {
        $this->id = $id;
        $this->room = $room;
        $this->customer = $customer;
        $this->startDate = DateTime::createFromFormat('d/m/Y', $startDate);
        $this->endDate = DateTime::createFromFormat('d/m/Y', $endDate);
        $this->status = 'pending';
    }

    public function calculateAmount(): float
    {
        return $this->endDate->diff($this->startDate)->format("%a")*$this->room->pricePerNight;
    }
    public function cancel() : void {
        $this->status = "cancelled";
    }
    public function confirm() : void {
        $this->status = "confirmed";
    }
    public function getDurationInNights() : int {
        return $this->endDate->diff($this->startDate)->format("%a");
    }
}