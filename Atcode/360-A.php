<?php
fscanf(STDIN, "%s", $str);

if($str[0] ==='R'|| $str[2] ==='M'){
    echo "Yes";
    exit;
}else{
    echo "No";
    exit;
}
