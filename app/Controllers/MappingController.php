<?php

namespace App\Controllers;

use App\Lib\Mapping;

class MappingController implements Mapping{
  protected $roadType;
  protected $roadLength;
  protected $garageToUrban=20;
  protected $garageToRural=50;
  protected $speedFactorUrban=.75;
  protected $speedFactorRural=1.15;
  protected $rangeFactorUrban=.75;
  protected $rangeFactorRural=1;

  public  function __construct(){
       
  }

  public function calculateDistance($roadType, $roadLength){
  	  $speed=70*.75;
  	  $fuelCapacity=200;
  	  $rangeUrban=.75;

  	  while(true){

  	  }
  }

  public function calculateNoOfRefuel(){

  }

  public function calculateTotalTime($roadType, $roadLength){

  }
}