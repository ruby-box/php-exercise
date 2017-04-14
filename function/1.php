<?php

numbering();
# script 태그 내부의 내용을 한줄씩 읽기 전부터 선언적 함수부터 읽기때문에 정상적으로 돌아간다. 
function numbering(){
  $i = 0;
  while ($i < 10) {
    echo $i;
    $i += 1;
  }
}
numbering();
numbering();

function get_number1(){
  return '123';
}
echo get_number1();

function get_argument($arg) {
  return $arg;
}

# 인자에 대한 기본 값을 정의할 수 있다.
function get_arguments($ar1 = 0, $ar2 = 0) {
  return $ar1 + $ar2;
}


print "<br/>".get_argument(2);
print "<br/>".get_arguments(10, 20);
print "<br/>".get_arguments();

/*
전역변수를 사용하는 방법은 2가지가 있다.
1. global 선언
2. $GLOBALS 배열 활용
*/
$test = 100;
function test($test) {
  //global $test;
  
  $test = $test * 2;
  
  echo "<br/>GLOBALS['test'] = ".$GLOBALS['test'];
  echo "<br/>function = ".$test."<br/>";
  return $test;
}

echo test(1);
echo $test;

?>
