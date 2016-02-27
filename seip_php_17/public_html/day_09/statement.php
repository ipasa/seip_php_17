<?php
//IF statement
//if(TRUE){
//    echo 'Hello World';
//};

//if-else
//if (3<2){
//    echo 'This is a false statement';
//}
//else{
//    echo 'This is a true statement';
//}

//IF-ElseIF statement
//if (3>10){
//    echo '3>1';
//}
//elseif(4>1){
//    echo '4>1';
//}
//else {
//    echo 'None';
//}


$age_innerLimit    =   18;
$age_outerLimit    =   61;

//if ($age_innerLimit>=18){
//    if ($age_outerLimit<=60){
//        echo 'You are permitted to enter this sie';
//    }
//}
// else {
//    echo 'You are not permitted to enter this sie';
//}

//if($age_innerLimit>=18 && $age_outerLimit<=60){
//    echo 'You are permitted to enter this site';
//}
//elseif($age_innerLimit>=18 || $age_outerLimit<=60){
//    echo 'Your age inner limit is = '
//            .$age_innerLimit.' '
//            .'<br>Your age Outer limit is = '
//            .$age_outerLimit;
//}
//else{
//    echo 'You are Not permitted to enter this site';
//}

switch ($age_innerLimit) {
    case 18:
        echo 'Age 18'.'<br>';
        
    case $age_innerLimit>=18:
        echo 'Age is grater then 18';    
        
    default:
        break;
}





























