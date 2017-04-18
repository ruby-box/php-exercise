<?php
/*상속을 원하지 않는 경우에 final을 사용한다.*/
class ParentClass {
  function aa() {
    echo "parent";
  }

  final function bb() {
    echo "parent B";
  }
}

class ChildClass extends ParentClass {
  function aa() {
    echo "child";
  }
}

$obj = new ChildClass();
$obj->aa();
?>