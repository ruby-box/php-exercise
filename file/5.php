<html>
  <head>
    <meta charset="utf-8"/>
  </head>
<body>
  <?php
  echo var_dump($_FILES);
  ini_set("display_errors", "1");
  
  $nowdir = getcwd();
  $uploaddir = 'C:\Bitnami\wampstack-5.6.30-2\apache2\htdocs\file\\';
  /*basename 을 추가한 이유는 보안상의 이유로 파일명을 더 확실하게 체크해주기 위해서 사용*/
  $uploadfile = $uploaddir.basename($_FILES['userupload']['name']);
  echo '<pre>';
  if(move_uploaded_file($_FILES['userupload']['tmp_name'], $uploadfile)) {
    echo "파일이 유효함. 업로드 성공\n";
  }else{
    print "파일 업로드 공격의 가능성이 있습니다.\n";
  }

  echo '자세한 디버깅 정보입니다 : ';
  print_r ($_FILES);
  print "</pre>";
  ?>
  <img src="file/<?=$_FILES['userfile']['name']?>" />

</body>
</html>

