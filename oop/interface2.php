<?php
class MyFileObject2 extends SplFileObject {
  function getContents() {
    $content = $this->fread($this->getSize());
    $this->rewind();
    return $content;
  }
}

$file = new MyFileObject2("data.txt");
var_dump($file->getContents());
var_dump($file->getContents());
?>