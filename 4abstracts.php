<?php
  abstract class Fly{
    protected $name;
    public function flying(){
      echo "Object {$this->name} is flying" . "<br>";
    }


    abstract public function lift_off(); // реализация будет доступной во всех конкретных дочерних классах, но подробности этой реализации
    //остаются неопределенными.
  }

class Plane extends Fly{
  public function lift_off(){
    echo "lifting off" . "<br>";
  }
}


$airbus = new Plane();
$airbus->lift_off();


//////////////////////////////////////////////////////////////////////////////////////////
//С помощью интерфейса можно только определить функциональность, но не реализовать ее
/////////////////////////////////////////////////////////////////////////////////////
interface Repairing{
  public function check(): void;
}


class Yak implements Repairing{
    public function check() : void{
      echo "everything is fine" . "<br>";
    }
}

$yak = new Yak();
$yak->check();


//first extends then implements
class Boing extends Fly implements Repairing{
    public function check() : void{
      echo "everything is fine" . "<br>";
    }

    public function lift_off(){
      echo "lifting off" . "<br>";
    }
}


$boing727 = new Boing();
$boing727->check();
$boing727->lift_off();





////////////////////////
//traits
///////////////////////





 ?>
