<?php
$file = './readme.txt';
echo file_get_contents($file);

$writefile = './writeme.txt';
file_put_contents($writefile, 'coding everybody');

$homepage = file_get_contents('http://php.net/manual/kr/language.namespaces.rationale.php');
echo $homepage;
file_put_contents('./php.html', $homepage);
?>