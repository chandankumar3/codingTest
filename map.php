<?php
ini_set("display_errors",1);

use App\Controllers\MappingController;
require realpath("vendor/autoload.php");

$shortopts  = "";
$shortopts .= "r:";  // Required value
$shortopts .= "l"; // Optional value

$longopts  = array(
    "road_type:",     // Required value
    "road_length:",    // Optional value
);
$options = getopt($shortopts, $longopts);


if(empty($options['road_type']) || empty($options['road_length'])){
   echo "missing required value:road type(--road_type) or road length(--road_length)";exit;

}


$test= new MappingController();
$test->calculateDistance($options['road_type'],$options['road_length']);
