<?php
class MyFileObject {
  function isFile() {
    /*instance 변수를 사용하기 위해선 $this 키워드를 사용
    $this : 인스턴스화한 것을 가르킨다. */
    return is_file($this->filename);
  }
}
$file1 = new MyFileObject(); /*인스턴스 생성*/
/*$filename : 인스턴스의 변수*/
$file1->filename = 'data.txt';
var_dump($file1->isFile());

$file2 = new MyFileObject();
$file2->filename = 'data2.txt';
var_dump($file2->isFile());

/*
MyFileObject : Class
$file, $file2 : Instance
isFile : method
$this->filename : Instancevariable, Instance field, Instance property
객체지향 : 객체로 그루핑한 것
*/
?>
