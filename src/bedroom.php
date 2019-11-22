<?php
namespace Nfq\Akademija;
class Bedroom extends Room{
    private $type = "Gold";
    private $hasRestroom=true;
    private $hasBalcony =true;
    private $bedCount = 2;
    private $extras =["Tv","Air conditioner", "Refrigerator", "Mini bar","Bathtub"];

    public function __construct($number, $price)
    {
        parent::__construct($number, $price,$this->type,$this->hasRestroom,$this->hasBalcony,$this->bedCount,$this->extras);
    }
}