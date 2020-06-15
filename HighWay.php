<?php

abstract class HighWay
{
    /**
    * @var array
    */
    private $currentVehicles = [];

    /**
    * @var integer
    */
    private $nbLane;

    /**
    * @var integer
    */
    private $maxSpeed;

    abstract public function addVehicule($vehicle);
   
    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setnbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getnbLane(): int
    {
        return $this->nbLane;
    }

    public function setmaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getmaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}