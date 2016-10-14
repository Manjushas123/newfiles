<?php
class Car
{
    private $model;
    public function getCarModel()
    {
        return ' The car model is: ' . $this->model;
    }
}

//We pass the value of the variable once we create the object
$car1 = new Car('mercedes');
echo $car1->getCarModel();
?> 
 
