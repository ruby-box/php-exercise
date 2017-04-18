<h1>Function Style</h1>
<?php
/*어떤 array를 활용할지 변수를 인자로 넘겨줘야 하는 불편함이 있었음.*/
$data = array('a', 'b', 'c');
array_push($data, 'd');

foreach($data as $item) {
  echo $item.'<br />';
}

var_dump(count($data));
?>

<h1>Object Style</h1>
<?php
/*배열을 지정해놓고 매소드를 호출하기만 하면되서 간단해짐*/
$odata = new ArrayObject(array('a', 'b', 'c'));
$odata->append('d');
foreach($odata as $item) {
  echo $item.'<br />';
}

var_dump($data == $odata);

var_dump($odata->count());
?>