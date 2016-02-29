<?php

$time_start = microtime(true);
$i  =   20;
$j  =   25;

if ($i==1) {
    echo 'i is equal to 1';
}
else if ($i<$j) {
    echo 'i is less then J';
}
else if ($i==$j) {
    echo 'i is equal to J';
}
else if ($i>$j) {
    echo 'i is equal to 4';
}
else if ($i==5) {
    echo 'i is equal to 5';
}
else if ($i==6) {
    echo 'i is equal to 1';
}
else if ($i==7) {
    echo 'i is equal to 2';
}
else if ($i==8) {
    echo 'i is equal to 3';
}
else if ($i==9) {
    echo 'i is equal to 4';
}
else  {
    echo 'i is equal to 5';
}

echo '<br>';

$time_end = microtime(true);
$time = $time_end - $time_start;
echo $time;

