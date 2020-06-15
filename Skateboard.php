<?php

require_once 'Vehicle.php';

  // Skateboard.php

  class Skateboard extends Vehicle
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
      protected $nbSeats = 0;
      /**
      * @var integer
      */
      protected $nbWheels = 4;


  }
