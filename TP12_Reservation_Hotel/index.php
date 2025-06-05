<?php
require_once ("Classes/Room.php");
require_once ("Classes/Reservation.php");
require_once ("Classes/Customer.php");

//Chambres
$chambre1 = new Room(1,001,"Simple", 65);
$chambre2 = new Room(2,002,"Simple", 65);
$chambre3 = new Room(3,101,"Double", 85);
$chambre4 = new Room(4,201,"Suite", 110);
$chambre5 = new Room(5,102,"Double", 85);

//Customers
$client1 = new Customer(1, 'Dupont', 'dupont@gmail.com');
$client2 = new Customer(2, 'Martin', 'martin@gmail.com');
$client3 = new Customer(3, 'Riviere', 'riviere@gmail.com');


//Reservation
$reservation1 = new Reservation(1, $chambre1, $client1, '04/06/2025', '09/06/2025');
$reservation2 = new Reservation(2, $chambre3, $client2, '12/06/2025', '16/06/2025');
$reservation3 = new Reservation(3, $chambre4, $client3, '20/06/2025', '30/06/2025');
$reservation4 = new Reservation(4, $chambre1, $client2, '07/06/2025', '12/06/2025');
$reservation5 = new Reservation(5, $chambre3, $client2, '09/11/2025', '15/11/2025');


$chambre1->addReservation($reservation1);
$chambre3->addReservation($reservation2);
$chambre4->addReservation($reservation3);
//$chambre1->addReservation($reservation4);
$chambre3->addReservation($reservation5);

$client2->addReservation($reservation2);
$client2->addReservation($reservation5);

//Calcul du chiffre d'affaires total pour le mois en cours
$startMonth = new DateTime('first day of this month');
$endMonth = new DateTime('last day of this month');
$interval = new DateInterval('P1D');

$listeChambres = [$chambre1, $chambre2, $chambre3, $chambre4, $chambre5];
$totalMois = 0;
$totalJours = 0;
foreach ($listeChambres as $chambre) {
    $nombreJourReserve = 0;
    foreach ($chambre->listeReservations as $reservation) {
        $period = new DatePeriod($reservation->startDate, $interval, $reservation->endDate);
        foreach ($period as $date) {
            if ($date >= $startMonth && $date <= $endMonth) {
                $nombreJourReserve++;
            }
        }
    }
    $totalJours += $nombreJourReserve;
    $totalMois += $nombreJourReserve*$chambre->pricePerNight;
}

echo "<br> Nombre de jours réservés : ".$totalJours." - Total pour le mois : ".$totalMois."€ <br>";


//lister chambre disponible sur une période donnée
$startPeriode = DateTime::createFromFormat('d/m/Y', '01/06/2025');
$endPeriode = DateTime::createFromFormat('d/m/Y', '12/06/2025');
$chambresReservees = [];

foreach ($listeChambres as $chambre) {
    foreach ($chambre->listeReservations as $reservation) {
        $existingStart = $reservation->startDate;
        $existingEnd = $reservation->endDate;

        if ($startPeriode < $existingEnd && $endPeriode > $existingStart) {
            $chambreReservees[] = $chambre->id;
            break;
        }
    }
}

echo "Les chambres suivantes sont réservées sur cette période : " . implode(" / ", $chambreReservees) . "<br>";




