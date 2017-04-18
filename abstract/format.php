<?php
/*상속받았을 때, 무조건 내용을 구현해야하는 부분이 있으면 
abstract 로 매소드를 선언한다.
그리고 하나 이상의 abstract 매소드가 선언되어 있으면
클래스 앞에도 무조건 abstract가 붙게 된다*/
abstract class ParentClass {
  public function a() {
    echo "A";
  }
  public abstract function b() ;
}

class ChildClass extends ParentClass {
  public function b() {
    echo "b";
  }
}

$obj = new ChildClass();
$obj->b();
?>