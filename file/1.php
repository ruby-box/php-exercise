<?php
/*파일 입출력*/
$file = 'readme.txt';
$newfile = '../bak/example.txt.bak';

/*파일 복사*/
if(!copy($file, $newfile)) {
  echo "failed to copy {$file}...\n";
}

?>