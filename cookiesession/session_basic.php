<?php
session_save_path("./session");

/*세션을 사용하기 바로 초입부분에 사용해야함.*/
session_start();
$_SESSION['title'] = "생활코딩";
?>