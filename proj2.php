 <?php
class Maths
{
    public $error;
    public $average;
    public function mathfunc()
    {
        $max = $_POST['max'];
        $min = $_POST['min'];
        
        if ($max < 10 || $min > 10) {
            $this->error = "Invalid Numbers";
            $code        = 1;
        } else {
            
            $this->average = ($max + $min) / 2;
            echo "<b>";
            echo "Average of the two numbers is " . $this->average;
            echo "</b>";
        }
    }
}

if (isset($_POST['sub'])) {
    $average = new Maths();
    $average->mathfunc();
    $errorMSG = $average->error;
}
require 'assessment2.php';
?> 
