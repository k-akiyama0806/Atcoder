<?php
fscanf(STDIN, "%s %s", $str, $target);

for ($i = 1; $i < strlen($str); $i++) {
    $str_array = str_split($str, $i);
    for ($t = 0; $t < $i; $t++) {
        $split_txt = '';
        foreach ($str_array as  $value) {
            if (strlen($value) > $t) {
                $split_txt .= $value[$t];
            }
        }
        if ($split_txt === $target) {
            echo "Yes";
            exit;
        }
    }
}
echo "No";
