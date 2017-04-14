<?php
echo $_POST['id'];

if($_POST['id'] === '123'){
    echo '123 hello';
    if($_POST['password'] == '1'){
        echo '<br/>true';
    }else{
        echo '<br/>wrong';
    }
}else if($_POST['id'] === '1234'){
    echo '1234 hi';
}else{
    echo 'bye';
}

echo '<br/><br/>';

if($_POST['id'] === '123' and $_POST['password'] == '1'){
    echo '<br/>true';
}else{
    echo '<br/>false';
}

# php type comparison 으로 인해서 형식의 자동 변환이 일어난다.
# http://php.net/manual/en/types.comparisons.php 참고
/*
gettype()
empty() 
is_null()
isset()
boolean
*/
echo "1 and true : ";
echo 1 and true;
echo "<br/>1 and 1 : ";
echo 1 and 1;
echo "<br/>true and true : ";
echo true and true;

echo "<br/>1 === true : ";
echo var_dump(1 === true);
echo "<br/>1 === 1 : ";
echo var_dump(1 === 1);
echo "<br/>true === true : ";
echo var_dump(true === true);

?>