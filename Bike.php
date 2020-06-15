<?php

require_once 'Vehicle.php';

  // Bike.php

  class Bike extends Vehicle
  {
    /**
     * @var string
     */
      protected $color;

      /**
      * @var integer
      */
      protected $currentSpeed;
      /**
      * @var integer
      */
      protected $nbSeats = 1;
      /**
      * @var integer
      */
      protected $nbWheels = 2;

  }
