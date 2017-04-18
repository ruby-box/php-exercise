<?php
$file = new SplFileObject("data.txt");
/*read하는 cursor가 움직인 후 리턴.*/
var_dump($file->fread($file->getSize()));

/*다시 호출하면 cursor가 마지막 위치로 이동해있기 때문에 읽을 내용이 없음*/
var_dump($file->fread($file->getSize()));

$file->rewind();
var_dump($file->fread($file->getSize()));
?>