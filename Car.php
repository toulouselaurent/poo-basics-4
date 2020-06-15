<?php
require_once "Vehicle.php";

class Car extends Vehicle
{
    /**
     * @var integer
    */
    protected $nbWheels;
    /**
     * @var integer
    */
    protected $currentSpeed;
    /**
     * @var string
     */
    protected $color;

    /**
     * @var integer
    */
    protected $nbSeats;
    /**
     * @var string
    */
    protected $energy;
    /**
     * @var integer
    */
    protected $energyLevel;
    /**
     * @var bool
    */
    private $hasParkBrake = false;

    public function setParkBrake(bool $hasParkBrake): bool
    {
        if ($this->hasParkBrake = $hasParkBrake){
            return $hasParkBrake;
        }else{
            return true;
        };
    }
    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function start()
    {
        if ($this->hasParkBrake === false) {
            $error = "Attention !!! Le frein à main est mis";
            throw new Exception($error);
        } 
    }   

}


