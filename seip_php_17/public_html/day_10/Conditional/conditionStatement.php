<?php

$time_start = microtime(true);
$i  =   10;

if ($i==1) {
    echo 'i is equal to 1';
}
if ($i==2) {
    echo 'i is equal to 2';
}
if ($i==3) {
    echo 'i is equal to 3';
}
if ($i==4) {
    echo 'i is equal to 4';
}
if ($i==5) {
    echo 'i is equal to 5';
}
if ($i==6) {
    echo 'i is equal to 1';
}
if ($i==7) {
    echo 'i is equal to 2';
}
if ($i==8) {
    echo 'i is equal to 3';
}
if ($i==9) {
    echo 'i is equal to 4';
}
if ($i==10) {
    echo 'i is equal to 5';
}

echo '<br>';

$time_end = microtime(true);
$time = $time_end - $time_start;
echo $time;

