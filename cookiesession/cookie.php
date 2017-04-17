<?php
/*cookie, session은 사용자의 상태를 저장하기 위해서 사용.
cookie는 사용자의 브라우저에 저장 -> 데이터를 유출할 수 있는 위험성을 가지고 있음.
session은 서버에 데이터를 저장*/
setcookie("codetime", "1234");
setcookie("cookie2", time(), time() + 60); /*time은 1초*/
?>