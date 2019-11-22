<?php
namespace Nfq\Akademija;

class Guest{
    private $name;
    private $surname;

    public function __construct($name,$surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSurname(): string
    {
        return $this->surname;
    }
}
