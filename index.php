<?php
namespace Nfq\Akademija;

require 'vendor/autoload.php';
$room = new SingleRoom(1408, 99.9);
$guest = new Guest('Vardenis', 'Pavardenis');
$startDate = new \DateTime('2019-04-20');
$endDate = new \DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);

//$reservation2 = new Reservation($startDate, $endDate, $guest);

BookingManager::bookRoom($room,$reservation);
//BookingManager::bookRoom($room,$reservation2);

//echo $room;
