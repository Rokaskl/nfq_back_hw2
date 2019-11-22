<?php
namespace Nfq\Akademija;
abstract class Room implements ReservableInterface {
    private $number;
    private $price;
    private $reservations;
    private $type;
    private $hasRestroom;
    private $hasBalcony;
    private $bedCount;
    private $extras;



    public function __construct( $number, $price,$type,$hasRestroom,$hasBalcony,$bedCount,$extras){
        $this->number = $number;
        $this->price = $price;
        $this->reservations = array();
        $this->extras = $extras;
        $this->type =$type;
        $this->hasBalcony = $hasBalcony;
        $this->hasRestroom = $hasRestroom;
        $this->bedCount=$bedCount;


    }
    public function getNumber(): int
    {
        return $this->number;
    }
    public function getPrice(): double
    {
        return $this->price;
    }
    public function setNumber(int $_number): void
    {
        $this->number = $_number;
    }
    public function setPrice(double $_price): void
    {
        $this->price = $_price;
    }

    /**
     * @return array
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }



    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getHasRestroom()
    {
        return $this->hasRestroom;
    }

    /**
     * @param mixed $hasRestroom
     */
    public function setHasRestroom($hasRestroom): void
    {
        $this->hasRestroom = $hasRestroom;
    }

    /**
     * @return mixed
     */
    public function getHasBalcony()
    {
        return $this->hasBalcony;
    }

    /**
     * @param mixed $hasBalcony
     */
    public function setHasBalcony($hasBalcony): void
    {
        $this->hasBalcony = $hasBalcony;
    }

    /**
     * @return mixed
     */
    public function getBedCount()
    {
        return $this->bedCount;
    }

    /**
     * @param mixed $bedCount
     */
    public function setBedCount($bedCount): void
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return mixed
     */
    public function getExtras() :array
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras): void
    {
        $this->extras = $extras;
    }

    public function addReservation(Reservation $reservation): void
    {
        array_push($this->reservations,$reservation);
    }
    public function getReservation($id)
    {
        if($this->reservations[id])
        {
            return $this->reservations[id];
        }
        else return null;
    }
    public function removeReservation($reservation): bool
    {
        if( in_array($reservation,$this->reservations))
        {
            $this->reservations = array_diff($this->reservations, $reservation);
            return true;
        }
        else return false;

    }
    public function __toString()
    {
        $returnValue = "Room has ".$this->getBedCount()." bed(s). It is ".$this->getType(). " room type. ";
        if($this->getHasRestroom())
        {
            $returnValue = $returnValue."It has restroom. ";
        }
        else
        {
            $returnValue = $returnValue."It doesn't have restroom. ";
        }
        if($this->getHasBalcony())
        {
            $returnValue = $returnValue."It has balcony. ";
        }
        else
        {
            $returnValue = $returnValue."It doesn't have balcony. ";
        }
        foreach ($this->getExtras() as $extra)
        {
            $returnValue = $returnValue."Room has ".$extra.". ";
        }
        return $returnValue;
    }

}