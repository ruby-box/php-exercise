<?php
//require_once ("./greeting.php");
/*동적으로 클래스를 로딩할 수 있는 방법*/
function autoloader($path){
  var_dump("path : {$path}");
  $path = $path. ".php";
  require_once $path;
}
spl_autoload_register('autoloader');

new Hi();
new Bye();
?>