<?php
class Person {
  /*외부로부터 데이터를 은닉해야할 경우에 get과 set 함수를 이용해서 
  오염되는 것을 막는다.*/
  private $name;

  public function sayHi() {
    print("Hi, I'm {$this->name}.");
  }

  public function setName($_name) {
    $this->ifEmptyDie($_name);

    $this->name = $_name;
  }

  public function getName() {
    return $this->name;
  }

  private function ifEmptyDie($value) {
    if(empty($value)) {
      die('I need name');
    }
  }
}

$yuna = new Person();
$yuna->setName('yuna');
$yuna->sayHi();
print($yuna->getName());
?>