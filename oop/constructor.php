<?php
class MyFileObject {
  /* 생성자*/
  /* ****
  인스턴스가 생성될때 필수적인 데이터를 인자를 통해 전달받을 수 있음.
  인스턴스가 생성될때 필수적인 일을 초기화할 수 있다.
  ***** */
  function __construct($fname){
    $this->filename = $fname;
  }

  function isFile() {
    /*instance 변수를 사용하기 위해선 $this 키워드를 사용
    $this : 인스턴스화한 것을 가르킨다. */
    return is_file($this->filename);
  }
}
$file1 = new MyFileObject('data.txt'); /*인스턴스 생성*/
var_dump($file1->isFile());

/*
MyFileObject : Class
$file, $file2 : Instance
isFile : method
$this->filename : Instancevariable, Instance field, Instance property
객체지향 : 객체로 그루핑한 것
*/
?>
