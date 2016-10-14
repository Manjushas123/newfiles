<?php
class Car
{
    public $tank;
}
class Car
{
    
    public $tank;
    
    // Add gallons of fuel to the tank when we fill it.
    public function fill($float)
    {
        $this->tank += $float;
    }
    
    // Substract gallons of fuel from the tank as we ride the car.
    public function ride($float)
    {
        $miles   = $float;
        $gallons = $miles / 50;
        $this->tank -= $gallons;
    }
}

$tank = $car->fill(10)->ride(40)->tank;
class Car
{
    
    public $tank;
    
    // Add gallons of fuel to the tank when we fill it.
    public function fill($float)
    {
        $this->tank += $float;
        return $this;
    }
    
    // Substract gallons of fuel from the tank as we ride the car.
    public function ride($float)
    {
        $miles   = $float;
        $gallons = $miles / 50;
        $this->tank -= ($gallons);
        return $this;
    }
}
?> 
