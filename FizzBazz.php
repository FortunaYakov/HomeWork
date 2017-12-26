<?php
    $my_numbers=[];
    for($i = 1; $i <= 100; $i++){
        $my_numbers[]+=$i ;
    }
    foreach($my_numbers as $value){
        if($value % 15 == 0){
            echo "fizzBazz</br>";
        }elseif($value % 5 == 0){
            echo "bazz | ";
        }elseif($value % 3 == 0){
            echo "fizz | ";
        }else{
            echo $value.' | ';
        }
    }
