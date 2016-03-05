<?php
   $time_start = microtime(true);
    //echo '<pre />';
    //print_r($_POST);

    if (isset($_POST['submit'])){
        $start_number   =   $_POST['start_number'];
        $end_number     =   $_POST['end_number'];
        $sum            =   0;

        for ($i=$start_number;$i<=$end_number;$i++){
            $sum= $i+$sum;            
            //$sum++;            
        }
        //$data=  $sum*($sum+1)/2;
        //echo $sum;
        //echo '<br>';
        //var_dump($data);
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo $time*100;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example 5 - ODD/EVEN test</title>
    <style>
        .mainContainer{
            width: 600px;
            margin: 0 auto;
            background-color: #cf5473;
        }
        td{
            padding: 10px;
        }
        label{
            width: 200px;
            color: #ffffff;
        }
        input[type=text]{
            width: 478px;
            padding: 5px;;
        }
        input[type=submit]{
            width: 478px;
            padding: 10px;
            background-color: #475C73;
            color: #ffffff;
        }
        p{
            color: #ffffff;
        }
        .resultBox{
            background-color: #475C73;
            padding: 10px;
        }
        .mainContainer>h3{
            padding-top: 15px;
        }
        h3{
            color: #ffffff;
            text-align: center;
            text-transform: uppercase;
        }

    </style>
</head>
<body>
    <div class="mainContainer">
        <h3>ODD / EVEN Testing : </h3>
        <form action="#" method="post">
            <table>
                <tr>
                    <td><label for="sNumber">Starting Number</label></td>
                    <td>
                        <input type="text" name="start_number" id="sNumber"
                               placeholder="<?php if (isset($_POST['start_number'])){echo $_POST['start_number'];}?>"
                        >
                    </td>
                </tr>

                <tr>
                    <td><label for="eNumber">Ending Number</label></td>
                    <td>
                        <input type="text" name="end_number" id="eNumber"
                               placeholder="<?php if (isset($_POST['end_number'])){echo $_POST['end_number'];}?>"
                        >
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit" name="submit">
                    </td>
                </tr>
            </table>
        </form>
        
        <div class="resultBox">
            <h3><u>Result :</u></h3>
            <p>
                <?php
                    if (isset($sum)){
                        echo 'Sum is : '.$sum;
                    }
                ?>
            </p>
        </div>
    </div>
</body>
</html>