<?php
namespace Nfq\Akademija;
class Apartment extends Room{
    private $type = "Diamond";
    private $hasRestroom=true;
    private $hasBalcony =true;
    private $bedCount = 4;
    private $extras =["Tv","Air conditioner","Refrigerator","Kithen box","Mini bar","Bathtub","Free Wi-fi"];

    public function __construct($number, $price)
    {
        parent::__construct($number, $price,$this->type,$this->hasRestroom,$this->hasBalcony,$this->bedCount,$this->extras);
    }

}