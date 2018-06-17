<?php
// Carlos Magno
$n1 = 95;
$n2 = 35;
$n3 = 80;
if($n1>$n2){
  if($n1>$n3){
    echo "$n1 > ";
    if($n2 > $n3){
      echo "$n2 > $n3";
    }else {
      echo "$n3 > $n2";
    }
  }
  if($n1<$n3){
    echo "$n3 > $n1 > $n2";
  }
}
if ($n1<$n2) {
  if($n2>$n3){
    echo "$n2 > ";
    if($n3<$n1){
      echo "$n3 > $n1";
    }else {
      echo "$n1 > $n3";
    }
  }
  if($n3>$n2){
    echo "$n3 > $n2 > $n1";
  }
}
 ?>
