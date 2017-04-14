<?php

/*
php 5.4 이전 버전에서는 아래와 같은 문법을 사용해야 한다. 따라서 하위 호환성을 위해서는 아래의 형식을 사용하는 것이 권장된다.
<?php
$member = array('egoing', 'k8805', 'sorialgi');
?>
*/
$class = array("a","b","c");
$class2 = ["a", "b", "c"];

echo $class[0];
echo "<br/>".$class2[0];

function array_load() {
  return ['A', 'B', 'C'];
}

//PHP 5.4 이후에 사용할 수 있는 문법.
echo array_load()[0];
$temp = array_load();
echo $temp[0]."<br/><br/>";


function get_members(){
  return ['yuna', 'ccc', 'bbb'];
}

$members = get_members();

#ucfirst : 첫번째 글자를 대문자로 변환
for($i = 0; $i < count($members); $i++){
  echo ucfirst($members[$i]).'<br/>';
}

/*배열 이용*/

/*
array_shift : 왼쪽첫번재부터 하나씩 제거
array_unshift : 왼쪽 첫번째에 삽입
array_pop : 맨 오른쪽에 제거
array_push : 맨 오른쪽에 삽입
array_splice : 
array_merge : 배열 합침
*/
array_push($members, 'ffff');
var_dump($members);
echo "<br/>";
$members = array_merge($members, ['eeee','wwww']);
var_dump($members);
echo "<br/>";

sort($members);
var_dump($members);



/*연관 배열(associative array)*/
echo "<br/>연관배열<br/><br/>";
# 방법1
$grades = array('yuna' => 10, 'yuna1' => 4, 'yuna2' =>80);

# 방법2
$grades2 = [];
$grades2['yuna'] = 10;
$grades2['yuna1'] = 20;
$grades2['yuna2'] = 30;
echo $grades['yuna']."<br/>";
echo $grades['yuna'];

foreach ($grades as $key => $value) {
  echo "key : {$key} value: {$value}<br/>";
}

?>
