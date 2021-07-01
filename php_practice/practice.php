<?php
$name = 'satoshi' ;
if($name = 'satoshi' ) {
echo "私は理志です";
} else {"理志ではありません";
}
?>
<?php
$total = 1;
echo $total;
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
return $i = 10000;
echo $total;
?>
<?php
$fruits = array("apple", "orange", "kiwi", "grape", "melon");
foreach($fruits as $fruit){
  echo "要素は" . $fruit;
  echo "\n";
}
?>
<?php
$start = 1;
$end = 100;
for($i = $start; $i <= $end;) {
if($i % 5 == 0)
echo $i;
}
?>


<?php
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1, $array2, $array3);
 print_r($array);
?>
<?php
$time = mktime(6);
var_dump(date('Y年m月d日h時i分s秒', $time));
print('<br/>');

 $time = mktime(11, 11, 11);
 var_dump(date('Y年m月d日h時i分s秒', $time));
 print('<br/>');

 $time = mktime(10, 14, 10, 7, 2);
 var_dump(date('Y年m月d日h時i分s秒', $time));
 print('<br/>');


 $time = mktime(0, 0, 0, 1, 1, 2021);
 var_dump(date('Y年m月d日h時i分s秒', $time));
 print('<br/>');
?>
<?php
date_default_timezone_set('Asia?Tokyo');
echo'p', date('Y/m/d H:i:s'), '</p>';
?>


 <?php
 for($i = 1; $i < 10000; $i++){
  echo $i;
}
?>