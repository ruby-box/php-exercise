<?php
//require_once __DIR__.'/Greeting/En/Hi.php';
/*composer를 통해서 autoload를 관리하면 더욱 편해진다.*/
require_once __DIR__.'/../library/vendor/autoload.php';
use Greeting\En\Hi;
new Hi();
?>