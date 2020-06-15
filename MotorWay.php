<?php

require_once "HighWay.php";

final class MotorWay extends HighWay
{
    /**
    * @var array
    */
    private $currentVehicles;

    /**
    * @var integer
    */
    private $nbLane = 4;

    /**
    * @var integer
    */
    private $maxSpeed = 130;
    
    public function addVehicule($vehicle) 
    {
        $vehicles = $this->getCurrentVehicles();

        if ($vehicle instanceof Car){
            array_push($vehicles ,$vehicle);
            $this->setCurrentVehicles($vehicles);
        }
    }

}