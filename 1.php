<?php
class Machine{

  protected $name;
  protected $date;
  protected $price;

  public function __construct  ($name , $date, $price){
    $this->name = $name;
    $this->date = $date;
    $this->price = $price;
  }
  public function get_info(){
    return "Name: {$this->name} Date: {$this->date}  Price: {$this->price}" . "<br>";
  }
}

class Car extends Machine{
  protected $type;
  protected $engine;
  public function __construct($name , $date, $price , $type , $engine){
    parent::__construct($name , $date, $price);
    $this->type = $type;
    $this->engine = $engine;
  }

  function get_info(){
    return parent::get_info() . "Type: {$this->type}  Engine: {$this->engine}" . "<br>";
  }

  function get_type(){
    echo "Type: {$this->type} " . "<br>";
  }

}





$machine = new Machine("Belaz" , 1999 , "100K$");
$machine->get_info();

$car = new Car("BMW" , 2021 , "40K$" , "car" , "V4");
echo $car->get_info();

 ?>
