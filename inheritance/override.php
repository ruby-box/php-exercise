<?php
class ParentClass {
  // function __construct($param) {
  //   echo "<h1>{$param}</h1>";
  // }

  function callMethod($param) {
    echo "<h1>Parent {$param}</h1>";
  }
}

class ChildClass extends ParentClass {

  /*부모 클래스에 정의되 메소드를 자식 클래스에서 재정의 같은 메소드 명으로 정의해주면 됨*/
  function callMethod($param2) {
    /*상속받은 부모의 생성자를 호출*/
    parent::callMethod($param2);
    echo "<h1>Child {$param2}</h1>";
  }
  
}

$obj = new ChildClass();
$obj->callMethod("method");
?>