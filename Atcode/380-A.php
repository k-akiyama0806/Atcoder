<?php
fscanf(STDIN, "%s", $str);
$count_1 = substr_count($str, '1');
$count_2 = substr_count($str, '2');
$count_3 = substr_count($str, '3');
if($count_1 == 1 && $count_2 == 2 && $count_3 == 3){
    echo "Yes";
}else{
    echo "No";
}