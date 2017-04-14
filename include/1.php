<?php
include 'function.php';
include_once 'function2.php';
include_once 'function2.php';
echo welcome();

/*
include로 외부의 모듈을 추가할 수 있다.
include와 require의 기능은 거의 유사.

include는 파일을 읽어올 수 없는 경우 warning을 띄움. (주의)
require 는 fatal 에러 발생 (치명적). 강제력이 더욱 강함.

include_once() : include를 2번 반복적으로 했을 경우, 한번만 수행?
require_once() : 여러번 반복적으로 했을 때 한번만 수행.
*/
?>