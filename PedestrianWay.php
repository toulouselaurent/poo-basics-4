<?php

require_once "HighWay.php";

final class PedestrianWay extends HighWay
{
    /**
    * @var array
    */
    private $currentVehicles;

    /**
    * @var integer
    */
    private $nbLane = 1;

    /**
    * @var integer
    */
    private $maxSpeed = 10;

    public function addVehicule($vehicle) 
    {
        $vehicles = $this->getCurrentVehicles();

        if ($vehicle instanceof Bike || $vehicule instanceof Skateboard){
            array_push($vehicles ,$vehicle);
            $this->setCurrentVehicles($vehicles);
        }
    }
    
}