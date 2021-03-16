<?php

  class StaticExample{
    const CONSTANT = 4;
    static public $num = 1;
    public static function Name(){
      echo "Im static func" . "<br>";
      echo self::$num;
    }
  }

  echo StaticExample::$num . "<br>";
  StaticExample::Name() . "<br>";
  echo "This is constant" . StaticExample::CONSTANT;
 ?>
