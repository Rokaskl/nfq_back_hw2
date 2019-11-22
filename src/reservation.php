<?php
namespace Nfq\Akademija;

use Cassandra\Date;

class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;



    public function __construct($startDate, $endDate, $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }
    /**
     * @return mixed
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * @param mixed $guest
     */
    public function setGuest($guest): void
    {
        $this->guest = $guest;
    }
    /**
     * @return mixed
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

}