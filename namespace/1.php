<?php
# http://www.php.net/manual/kr/language.namespaces.php 참조

require_once 'en.php';
require_once 'ko.php';
require_once '../include/function.php';

echo language\ko\welcome();
echo language\en\welcome();
echo include2\welcome();

#welcome();
#welcome();
?>