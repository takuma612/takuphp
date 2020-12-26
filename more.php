<?php

//課題です//
#(1)
$name = "takuma";
if ($name == "takuma") {
  echo "私は あなたの名前 です";}
else {
  echo "あなたの名前ではありません";
}

#(2)
for($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
  echo $total;
  
#(3)
$fruits = array("apple","orange","cherry","banana"."grape");
 foreach ($fruits as $fruit){
   echo $fruit;
   echo "\n";
 }
 
 #(4)
 /* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = 0; $i <= 100; $i++){
  if($i % 5 == 0){
    echo $i;
  }
}

//参考資料//
/*
$height　= 160;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";}
else {
  echo "ご乗車になれます。";
}

$height = 230;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";}
else if ($height >= 200 ){
  echo "200cm 以上の方はご乗車できません。";}
else{
  echo "ご乗車になれます。";
}

$weekday = "Monday";
switch ($weekday){
  case "Monday":
    echo "可燃ごみの日です。";
    break;
  case (Tuesday):
    echo "資源ごみの日です。";
    break;
  default:
  echo "回収はありません。";
  break;
}

$a = 3;
$b = 3;
$c = "3";
var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b);
var_dump($a < $b);
var_dump($a <= $b);
var_dump($a >= $b);
var_dump($a === $b);
var_dump($a !== $b);

for ($i = 0; $i < 10; $i++){
  echo $i; 
}

$total = 0;
echo $total;

for($i = 0; $i <= 100; $i++){
  $total += $i;
}
  echo $total;
  
$fruits = array("apple", "orange", "lemon");
 echo count($fruits);
 
for ($i = 0; $i < count($fruits); $i++) { 
  echo "要素は" . $fruits[$i];
  echo "\n";
}

$fruits = array("apple", "orange", "lemon");
foreach ($fruits as $fruit){
  echo "要素は" . $fruits;
  echo "\n";
}
*/

