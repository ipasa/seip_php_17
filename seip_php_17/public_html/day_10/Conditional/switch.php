<?php

//$i  =   101;
//
//switch ($i) {
//    case 10:
//        echo 'I is equal to 10';
//        break;
//    case $i>=10:
//        echo 'I is equal to 10';
//        break;
//    default:
//        echo 'I is not equal to 10';
//        break;
//}


$color  =   'red';
switch ($color) {
    case 'yellow':
        echo 'The color is not match';
        break;
    case 'green':
        echo 'The color is not match';
        break;
    case 'red':
        echo 'The color is match & the color is Red';
        break;
    case 'white':
        echo 'The color is not match';
        break;
    default:
        echo 'No color matches';
        break;
}