<?php
class MyFileObject {
  private $filename;  /*외부에서 데이터를 변경하는 것이 불가능*/
  //public $filename; /*외부에서 데이터 접근 가능*/

  function __construct($fname){
    $this->filename = $fname;
    if(!file_exists($this->filename)) {
      // 프로그램 종료
      die('There is no file'.$this->filename);
    }
  }

  function isFile() {
    /*instance 변수를 사용하기 위해선 $this 키워드를 사용
    $this : 인스턴스화한 것을 가르킨다. */
    return is_file($this->filename);
  }
  
  function getFilename() {
    return $this->filename;
  }
}

$file1 = new MyFileObject('data.txt');
// $file1 = new MyFileObject();
// $file1->filename = 'data.txt'; 
/* 객체를 만드는 시점에서 파일이 있는지 없는지 체크해서 없을 경우에 다음 명령문이 수행이 되지 않도록 한다.*/
var_dump($file1->isFile());

//var_dump($file1->filename);
/*접근제어자를 사용하지 않을 경우에 filename을 임의로 수정이 가능해진다. 
private 을 설정하면 직접적으로 instance 변수를 수정할 수 없다. */
?>
