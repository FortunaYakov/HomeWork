<?php
function isPangram($a){
  $abc=['a'=>false,'b'=>false,'c'=>false,'d'=>false,'e'=>false,'f'=>false,'g'=>false,'h'=>false,
  'i'=>false,'j'=>false,'k'=>false,'l'=>false,'m'=>false,'n'=>false,'o'=>false,'p'=>false,'q'=>false,
  'r'=>false,'s'=>false,'t'=>false,'u'=>false,'v'=>false,'w'=>false,'x'=>false,'y'=>false,'z'=>false];
  $a_array=str_split($a);
  $len_a=count($a_array);
  for ($i=$len_a-1; $i>=0 ; $i--)
  {
      $abc[$a_array[$i]]=true;
  }
  foreach ($abc as $value) {
    if(!$value) return 'NOT_Pangram';
  }
  return 'IT IS Pangram';
}

$my_string='The quick brown fox jumps over the lazy dog';
echo $my_string.' - '.isPangram($my_string);
 ?>
