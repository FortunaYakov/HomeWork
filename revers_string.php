<?php
function unstring($a){
  $b='';
  $a_array=str_split($a);
  $len_a=count($a_array);
  for ($i=$len_a-1; $i>=0 ; $i--)
  {
      $b.=$a_array[$i];
  }
  return $b;
}

$my_string='qwerty';

  echo unstring($my_string);

 ?>
