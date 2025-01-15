<?php

$count=0;
for($i =1;$i<=12;$i++){
    fscanf(STDIN, "%s", $str);
    if($i === strlen($str)){
        $count++;
    }
}

echo $count;