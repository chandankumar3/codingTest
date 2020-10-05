<?php
ini_set("display_errors",1);

use App\Controllers\MappingController;
require realpath("vendor/autoload.php");

$options = getopt("road_type",['road_type','road_length']);
var_dump($options);

$test= new MappingController();
$test->calculateDistance();
