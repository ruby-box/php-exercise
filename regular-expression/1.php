<?php
/*
정규표현식 참고
http://ult-tex.net/info/perl/
*/
preg_match('/(?:(?:et|te)(st))/', 'this is etst haha', $match);
print_r($match);


/*
/i는 대소문자를 가리지 않는다.

m은 멀티라인

$는 경계를 지정.
*/
if(preg_match("/php/i", "PHP is the web scripting langualge of choice.")) {
  echo "A match was found.";
}else {
  echo "A match was not found";
}

/*
preg_match

\b는 경계 (ex) /bweb/b 는 순수 web을 검색
*/
if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice")) {
  echo "<br/>A match was found.";
}else {
  echo "<br/>A match was not found";
}

$subject = 'coding everybody https://opentutorials.org xxxxx@gmail.com /course/62/5141';
# 구분자는 /대신 ~로 대체 가능.
preg_match('/https:\/\//', $subject, $match);
preg_match('~https://~', $subject, $match);
/*
* \w는 문자를 의미
* ()는 캡쳐링 - 괄호로 묶은 구간은 독립된 데이터로 추출할 수 있음. 역참초라고도 얘기함.
 * 배열의 0번째는 전체 패턴
 * 1번째 : 1번째 괄호
 * 2번째 : 2번째 괄호
*/
preg_match('~(https://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match);
var_dump($match);
echo "<br/>홈페이지 : ".$match[1]."<br/>";
echo "이메일 : ".$match[2];

/*
- ?:는 터너링에서 변수안에 n번째 배열로 들어가지 않는다
- ?는 없거나 있거나, 있으면 1개만 등장
- ^가 대괄호 밖에 있을땐 시작점을 의미. 대괄호 안에서는 (!)부정을 의미  (ex) [^/]는 '/'가 아닌것 모든것
*/
preg_match('@^(?:http://)?([^/]+)@i', "http://www.php.net/index.html", $matches);
print_r($matches);
$host = $matches[1];

/*
[^.] : .이 아닌 모든 문자
[^.]+ : .이 아닌 모든 문자가 1개이상
$가 붙어있으면 뒤에서부터 생각해봐야 한다.
*/
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is : {$matches[0]}\n";

/*검색 2/3까지의 내용*/
?>
