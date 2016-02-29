<?php
 
//$data   =   array();
//$data[0]    =   10;
//$data[1]    =   20;
//$data[2]    =   30;
//$data[3]    =   40;
//$data[4]    =   50;
//
//echo $data;
//echo "$data[10]";
//
//echo '<hr>';
//echo "$data[1]";
//
//$data1  =   array(
//    1   =>  10,
//    2   =>  20,
//    'name'  =>  'Hasan Hafiz Pasha',
//    3   =>  30
//);
//
//var_dump($data);
//echo '<hr>';
//var_dump($data1);

//$datas  =   array(10,20,30,40,50);
//echo count($data3, 0);
//foreach ($datas as $data=>$value){
//    echo $data.' - '.$value;
//    echo '<br>';
//}
//var_dump($datas);
//echo '<hr>';
//var_export($datas);

//echo '<pre />';
//print_r($datas);

$cars=array(
    "Volvo"=>array("XC30","XC60","XC90"),
    "BMW"=>array("X3","X5","X7"),
    "Toyota"=>array("Highlander","lander")
); 

//echo '<pre />';
//print_r($cars);
//echo $cars['Toyota'][1];

foreach ($cars as $value=>$car){
    echo $value.' = ';
    //echo count($car);
    $myCount    =   count($car)-1;
    foreach ($car as $key => $singlrCar){
        echo $singlrCar.'';  
        echo '('.$key.'='.$myCount.')';        
        if(!($key == $myCount)){            
            echo ", ";
        }
    }
    echo '<br>';
}

//echo "Normal count: " . count($cars)."<br>";
//echo "Recursive count: " . count($cars,1);

//echo "Normal count: " . sizeof($cars)."<br>";
//echo "Recursive count: " . sizeof($cars,1);