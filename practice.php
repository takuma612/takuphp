<?php
echo 'hello php!';

#(1)
$a = 3;
$b = 7;
echo $a + $b;

#(2)
$array_month=["January", "February" , "March" , "April", "May" ,"June","July", "August" , "September" , "October" ,"November", "December" ];
echo $array_month[7]; 

#(3)
$hello = "Hello,";
$name = "takuma";
$world = "'s World!";
echo $hello.$name.$world;

#(4)
$school = "tech";
$school .= "boost";
echo $school;

#バグ修正
$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
  ];
  echo $calendar["December"];