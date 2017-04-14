<?php
/*현재 디렉토리 가져오기*/
echo getcwd()."<br/>";
chdir("../");
echo getcwd()."<br/>";

$dir = "./";
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);

mkdir("1/2/3/4", 6700, true);
?>
