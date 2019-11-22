<?php
namespace Nfq\Akademija;

Class BookingManager
{
    public static function bookRoom(Room $room, Reservation $reservation):void {
        foreach ( $room->getReservations() as $res )
        {

            if(!($res->getStartDate() < $reservation->getStartDate()&&$res->getEndDate() < $reservation->getEndDate())
            || !($res->getStartDate() > $reservation->getStartDate()&&$res->getEndDate() > $reservation->getEndDate()))
            {
                echo "Failed to book \n";
                return;
            }
        }
            $room->addReservation($reservation);
            echo 'Room <strong>'.$room->getNumber().'</strong> successfully booked for <strong>'.$reservation->getGuest()->getName().' '.$reservation->getGuest()->getSurname().'</strong> from <time>'.$reservation->getStartDate()->format('Y-m-d').'</time> to <time>'.$reservation->getEndDate()->format('Y-m-d').'</time>!'."\n";

    }


}
