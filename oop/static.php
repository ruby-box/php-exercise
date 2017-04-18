<?php
class Person {
  /* static : 정적 변수 
  static 변수는 Person class 자체에 소속이 되는 것이다*/
  private static $count = 0;
  private $name;
  function __construct($name) {
    $this->name = $name;
    self::$count = self::$count + 1;
  }

  function enter() {
    echo "<h1>Enter ".$this->name. " " . self::$count . "th </h1>";
  }

/*클래스의 소속인 메소드. 따라서 클래스 인스턴스를 생성하지 않고서 사용할 수 있다.*/
  static function getCount() {
    return self::$count;
  }
}

$pp = new Person('yuna');
$pp->enter();

$pp1 = new Person('ruby');
$pp1->enter();

$pp2 = new Person('llezche');
$pp2->enter();

$pp3 = new Person('pipo');
$pp3->enter();

/*static 메소드 사용법*/
echo Person::getCount();
?>