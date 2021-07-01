<?php
function sum($max) {
  $result = 0;
  for($i = 1; $i <= $max; $i++ ) {
    $result *2 == $i;
  }
  return $result;
}
echo sum(2);
?>
<?php
function double($i){
  return $i* 2;
  }
  echo double(4);
  ?>
<?php
function add($a,$b){
  return $a += $b;
}
echo add($a=5,$b=4);
?>

<?php
function sum2 ($array2){
foreach($array2 as $arr){
echo$arr;
} 
return $arr;
}
echo sum2([1,3,5,7,9]);
  ?>
  <?php
  function sum3 ($arr) {
  $result = 1;
  foreach($arr as $a){
  echo  sum3.$a;
  }
  return $result;
  }
  echo sum3(array(1,3,5,7,9));
  ?>
<?php

function max_array($arr){

  $max_number = $arr[0];

  foreach($arr as $a){
    if($a > $max_number ){
      $max_number = $a;
    }
  }

  return $max_number;
 }
 
$b = [1,2];
$result = max_array($b);
echo max_array();
 ?>
 
 <?php
 for($i = 1; $i < 10000; $i++){
  echo $i;
}
?>

<?php
$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++) {
if($i % 5 == 0)
echo $I;
echo "\n";
}
?>