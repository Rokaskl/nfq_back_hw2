<?php
namespace Nfq\Akademija;

Interface ReservableInterface
{
function addReservation(Reservation $reservation);

function removeReservation(Reservation $reservation);

}
