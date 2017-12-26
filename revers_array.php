<?php
function unarray(array $a)
{
  $b=[];
  $len_a=count($a);
  for ($i=$len_a-1; $i>=0 ; $i--)
  {
      $b[]=$a[$i];
  }
  return $b;
}

$my_array=[1,2,3,4,5,6,7,8,9,0,'a','b','c','d'];

$echo_array=unarray($my_array);
foreach ($echo_array as $value) {
  echo $value.' ';
}
 ?>
