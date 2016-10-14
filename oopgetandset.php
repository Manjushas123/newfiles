 <?php

class Car
{
    private $model;
    public function setModel($model)
    {
        
        $allowedModels = array(
            "Mercedes benz",
            "BMW"
        );
        
        if (in_array($model, $allowedModels)) {
            $this->model = $model;
        } else {
            $this->model = "not in our list of models.";
        }
    }
    
    public function getModel()
    {
        return "The car model is  " . $this->model;
    }
}
$mercedes = new Car();
$mercedes->setModel("Mercedes benz");
echo $mercedes->getModel();

?> 
