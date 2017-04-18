<?php
class ParentClass {
  public $_public = '<h1>public</h1>';
  protected $_protected = '<h1>protected</h1>';
  private $_private = '<h1>private</h1>';
  function callPrivate() {
    echo $this->_private;
  }
}

class ChildClass extends ParentClass {
  function callPublic() {
    echo $this->_public;
  }
  

  function callProtected() {
    echo $this->_protected;
  }

/*
private : 부모에서만 접근할 수 있음. 자식은 접근이 불가능하다
public : 자식에서도 접근 가능
protected : 자식에서도 접근 가능
*/
  // function callPrivate() {
  //   echo $this->_private;
  // }
}

$obj = new ChildClass();
/*자식클래스에겐 public과 private 변수가 존재하지 않기 때문에
부모 클래스에게서 변수를 찾게 된다*/
echo $obj->_public;
/*protected, private : 직접적인 접근을 막음*/
//echo $obj->_protected;
//echo $obj->_private;


echo $obj->callPublic();
echo $obj->callProtected();
echo $obj->callPrivate();
?>