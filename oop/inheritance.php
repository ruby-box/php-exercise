<?php
/*
중복된 코드를 제거할 수 있고
재사용성을 높일 수 있고 
가독성을 높일 수 있습니다.
*/
class Animal {
  function run() {
    print('running...<br/>');
  }
  
  function breathe() {
    print("breathing...<br/>");
  }
}

class Human extends Animal{
  function think() {
    print("thinking...<br/>");
  }

  function talk() {
    print("talking...<br/>");
  }
}

$ani = new Animal();
$ani->run();
$ani->breathe();

$human = new Human();
$human->run();
$human->think();
?>