<?php
fscanf(STDIN, "%s", $str);
$count=0;
$array=[];
for($i = 1;$i<strlen($str);$i++){
    if($str[$i] ==='|'){
        $array[]=$count;
        $count=0;
        continue;
    }
    $count++;
}

$result = implode(" ", $array);

echo $result;