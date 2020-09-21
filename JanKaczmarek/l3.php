<?php
$pow=2**10;
echo $pow;  
$x = 0b01010;
echo "<br>"+$x+"<br>";
$z=1;
$y=1;
if($y===$z)
{
    echo "jest";
}else{
    echo "nie jest";
}
$z=1;
$y=10;
//operatory rzutowania
$test1='kamienie';
$test2=0;
$x = 1+0;
$y=1.0;
echo PHP_INT_SIZE,'<hr>';
echo @gettype($y);
echo is_null($x);
?>