<?php
spl_autoload_register(function($path){
  var_dump("path : {$path}");
  $path = $path. ".php";
  require_once $path;
});
?>