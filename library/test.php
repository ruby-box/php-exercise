<?php
require 'vendor/autoload.php';
$parser = new \cebe\markdown\Markdown();
echo $parser->parse("##Hello World");

echo $parser->parse($_POST['text']);
?>
