<?php
namespace Nfq\Akademija;
class SingleRoom extends Room{

    private $type = "Standart";
    private $hasRestroom=true;
    private $hasBalcony =false;
    private $bedCount = 1;
    private $extras =["Tv","Air conditioner"];
    public function __construct($number, $price)
    {
        parent::__construct($number, $price,$this->type,$this->hasRestroom,$this->hasBalcony,$this->bedCount,$this->extras);
    }
}