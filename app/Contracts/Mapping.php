<?php

namespace App\Contracts;

interface Mapping
{
	public function calculateDistance($roadType, $roadLength);

	public function calculateNoOfRefuel();

	public function calculateTotalTime($roadType, $roadLength);
}
