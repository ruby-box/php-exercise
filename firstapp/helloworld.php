<html>
<body>
echo "HEllo";
<?php
/*변수타입*/
echo var_dump(4);
//echo Hello World;

/*문자열 붙이기*/
echo "Hello world"."6"."</br>";

$a = 1;
echo $a + 1;
echo "</br>";

//$a = 3;
print $a + 1 ;

echo "</br>";


/*변수 사용*/
$first = "coding";
echo $first."dddd";

$var1 = 100+10;
echo "<br/>";

$var1 = $var1/10;
echo $var1;
echo "<br/>";

$var1 = $var1 -10;
echo $var1;
echo "<br/>";

$var1 = $var1*10;
echo $var1;
echo "<br/>";

/*상수정의*/
echo "<br/><br/>상수정의<br/>";
define('title', 'PHP Tutorial');
echo title;

define('java', 'java Tutorial');
echo java;

/*변수타입 변환하기*/
echo "<br/><br/>변수타입 변환하기<br/>";

$var2 = 100.1;
echo gettype($var2);
settype($var2, 'integer');
echo $var2.'<br/>';
echo gettype($a);

/*변수고급*/
/*
is_ array
is_ bool
is_ callable
is_ double
is_ float
is_ int
is_ integer
is_ long
is_ null
is_ numeric
is_ object
is_ real

is_ resource
is_ scalar
is_ string
*/
echo "<br/><br/>변수고급.. 대단해... 포인터같아<br/>";
$title3 = 'subject';
$$title3 = 'PHPtutorial';
$$$title3 = 'JAVA';

echo $subject."<br/>".$PHPtutorial;

/*배열*/
$arr1 = 100;
echo $arr1;

$arr1 = "test";
echo $arr1;

$arr1 = array(1,2,3);
print_r($arr1);
//echo $arr1.;

        #print_r : 값만 표기
        #var_dump : 속성값까지 표기


/*비교연산자*/
echo "1==2 : ";
var_dump(1==2); # false
echo '<br/>';

echo "1==1 : ";
var_dump(1==1); # true
echo '<br/>';

echo "'one' == 'two' : ";
var_dump('one'=='two'); # false
echo '<br/>';

echo "'one'=='one' : ";
var_dump('one'=='one'); # true
echo '<br/>';

# ==  :  양쪽의 형변환의 결과를 비교
# === :  양쪽의 데이터 형식까지 정확하게 동일하게 비교
echo "1 === '1' : ";
var_dump(1 === '1'); # false
echo "<br/>1 == '1' : ";
var_dump(1 == '1'); #true

?>
</body>
</html>
