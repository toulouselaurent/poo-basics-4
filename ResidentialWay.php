<?php

require_once "HighWay.php";

final class ResidentialWay extends HighWay
{
    /**
    * @var array
    */
    private $currentVehicles;

    /**
    * @var integer
    */
    private $nbLane = 2;

    /**
    * @var integer
    */
    private $maxSpeed = 50;

    public function addVehicule($vehicle) 
    {
        $vehicles = $this->getCurrentVehicles();

        array_push($vehicles ,$vehicle);
        $this->setCurrentVehicles($vehicles);

    }

}