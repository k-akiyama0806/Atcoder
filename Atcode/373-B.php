<?php
fscanf(STDIN, "%s", $str);
$abc = range('A', 'Z');
$count = 0;
for($i=0;$i<25;$i++){
    $start_posi = strpos($str, $abc[$i]);
    $goal_posi = strrpos($str, $abc[$i+1]);
    $diff = abs($start_posi - $goal_posi);
    $count += $diff;
}
echo $count;