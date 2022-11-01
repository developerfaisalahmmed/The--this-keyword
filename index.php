<?php

// How to create classes and objects?

// Car is a class
class Car{
    // properties
    public $name = "Faisal Ahmmed";
    public $age = "25";
    public $comp;
    public $color = "beige";
    public $hasSunRoof = true;

    //method / function
        public function hello(){
            return "I am " . $this->name . " . I am " . $this->age . " years old. I have a compnay this name is " . $this->comp . ".";
        }
//

}

$bmw = new Car;

// echo $bmw->color;
// echo $bmw->color = 'blue';
$bmw->comp = "Faisal Soft";
echo $bmw->hello();

?>