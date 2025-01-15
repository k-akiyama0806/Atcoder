<?php

fscanf(STDIN, "%d %d %d", $N, $M);
// 目標値
$goal = array_map('intval', explode(' ', trim(fgets(STDIN))));

$total =[];

for ($i = 0; $i < $M; $i++) {
    $total []= 0;
}

for($col = 0; $col < $N; $col++) {
    $rowdata = array_map('intval', explode(' ', trim(fgets(STDIN))));
    for($row = 0; $row < $M; $row++) {
       $total[$row] += $rowdata[$row];
    }
}

for($i = 0; $i < $M; $i++) {
    if($total[$i] < $goal[$i]) {
        echo "No";
        exit;
    }
}
echo "Yes";