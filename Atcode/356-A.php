<?php
fscanf(STDIN, "%d %d %d", $n, $l, $r);


$array = [];
for ($i = 1; $i <= $n; $i++) {
    if ($i == $l) {
        for ($v = $r; $v >= $l; $v--) {
            $array[] = $v;
        }
        $i = $r;
    } else {
        $array[] = $i;
    }
}

$result = implode(" ", $array);

echo  $result;
