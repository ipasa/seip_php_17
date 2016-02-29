<?php
 
echo 'For Loop - ';
for ($i=1; $i<=10; $i++){
    echo $i;
}

echo '<br>';
echo '<hr>';

echo 'While Loop - ';
$j  =   1; 
while ($j<=10){
    echo $j;
    $j++;
}

echo '<br>';
echo '<hr>';

echo 'Do While Loop - ';
$i = 1;
do {
    echo $i;
    $i++;
} while ($i <= 10);
echo '<hr>';