<?php

namespace App\Lib;

interface Mapping
{
	public function calculateDistance();

	public function calculateNoOfRefuel();

	public function calculateTotalTime();
}
