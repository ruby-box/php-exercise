<?php
interface ContractInterface {
  public function promiseMethod(array $param);
}

interface ContractInterface2 {
  public function promiseMethod2(array $param);
} 

class ConcreateClass implements ContractInterface, ContractInterface2 {
  public function promiseMethod(array $param){
    return 1;
  }

  public function promiseMethod2(array $param){
    return 1;
  }
}

$obj = new ConcreateClass();
$obj->promiseMethod(array(1,3));
?>