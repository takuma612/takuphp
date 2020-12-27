<?php

#(1)
$number = 100;
function times($number) {
  $result = $number * 2;
  return $result;
}

echo times($number);

#(2)
$a = 100; $b = 200;
function f($a, $b){
  $result = $a + $b;
  return $result;
}
echo f($a, $b);

#(3)
$arr = array(1, 3, 5 ,7, 9);
function n($arr){
  $result = 1;
  foreach($arr as $ar){
    $result *= $ar; 
   }
    return $result;
   }
  echo n($arr);
  
 #(4)
   function max_array($arr){
     $max_number = $arr[0];
     foreach($arr as $a){
       if ($max_number < $a){
         $max_number = $a;
       }
     }
       return $max_number;
     }
     echo max_array(array(1, 3, 5 ,7, 9));
     
  #(5)
   #strip_tags 文字列から HTML および PHP タグを取り除く
    $str = "<h1>abc</h1>"."<p>abc</p>";
    echo strip_tags($str);
     #<p>を残す
    echo strip_tags($str, "<p>");
     
     #array_push 一つ以上の要素を配列の最後に追加する 
    $stack = array("orange", "banana");
    array_push($stack, "apple", "cherry");
    print_r($stack);
    
     #array_merge 第２引数以降に配列を指定することで複数の配列を同時に連結することができる
    $n1 = array(100, 150, 200, 225);
    $n2 = array(50, 75, 125, 175);
    $date = array_merge($n1, $n2);
    print_r($date);
    
     #time 現在の Unix タイムスタンプを返す
    echo time(); //現在日時のUNIXタイムスタンプ

    //UNIXタイムスタンプから日付を取得
    $timestamp = time()."/n";
    
    #mktime 日付を Unix のタイムスタンプとして取得する
    date_default_timezone_set("UTC");
    echo "December 27 , 2020 is on a " . date("l", mktime(0, 0, 0, 12, 27, 2020));
    echo date("M-D-Y", mktime(0, 0, 0, 12, 30, 2020));
    
    #date ローカルの日付/時刻を書式化する
    date_default_timezone_set('UTC');
    echo date("l");
    echo date("d");
    
/* 参考資料    
function sum($max) {
  $result = 0;
  
  for ($i = 1; $i <= $max; $i++) {

    $result += $i;
}
    return $result;
}

echo sum(100);

$string = "ABCDEF";
echo strlen($string);

$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);

$array = array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);

arsort($array);
print_r($array);
*/