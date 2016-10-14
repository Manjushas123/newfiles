<?php
class Car
{
    
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;
    
    public function hello()
    {
        return "Beep I am a <i>" . $this->comp . "</i>, and I am <i>" . $this->color;
    }
}
$bmw             = new Car();
$mercedes        = new Car();
$bmw->color      = 'blue';
$bmw->comp       = "BMW";
$mercedes->comp  = "Mercedes Benz";
$mercedes->color = 'yellow';
echo $mercedes->hello();
?> 
