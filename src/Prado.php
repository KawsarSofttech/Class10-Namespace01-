<?php
namespace App;
include 'Car.php';
use App\Car;

class Prado{
	// dependency injection
	public $car;
	public function __construct()
	{
		$this->car = new Car();
	}

	public function getData()
	{
		echo $this->car->engine();
	}
}

?>