<?php
//    echo '<pre />';
//    echo print_r($_POST);
    
    if (isset($_POST['btn'])) {
        $first_number   = $_POST['firstNumber'];
        $last_number    = $_POST['lastNumber'];

        //if ($_POST['btn'] == '+') {
        //    $calculation = $first_number + $last_number;
        //    echo 'Addition is : ' . $calculation;
        //} elseif ($_POST['btn'] == '-') {
        //    $calculation = $first_number - $last_number;
        //    echo 'Negation is : ' . $calculation;
        //} elseif ($_POST['btn'] == '*') {
        //    $calculation = $first_number * $last_number;
        //    echo 'Multiplication is : ' . $calculation;
        //} elseif ($_POST['btn'] == '/') {
        //    if ($last_number == 0) {
        //        echo 'Sorry we are not able to calculate something that are divided by ZERO';
        //    } else {
        //        $calculation = $first_number / $last_number;
        //        echo 'Division is : ' . $calculation;
        //    }
        //} else {
        //    $calculation = $first_number % $last_number;
        //    echo 'Modulation is : ' . $calculation;
        //}
        $data   =   $_POST['btn'];
        switch ($data) {
            case '+':
                $calculation = $first_number + $last_number;
                //echo 'Addition is : ' . $calculation;
                break;

            case '-':
                $calculation = $first_number - $last_number;
                //echo 'Negation is : ' . $calculation;
                break;

            case '*':
                $calculation = $first_number * $last_number;
                //echo 'Multiplication is : ' . $calculation;
                break;

            case '/':
                if ($last_number == 0) {
                    echo 'Sorry we are not able to calculate something that are divided by ZERO';
                } else {
                    $calculation = $first_number / $last_number;
                    //echo 'Division is : ' . $calculation;
                }
                break;

            case '%':
                $calculation = $first_number % $last_number;
                //echo 'Modulation is : ' . $calculation;
                break;

            default:
                echo 'Sorry something unusal happened';
                break;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form to send data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <style>
            .outputWindow{
                width: 500px;
                height: 50px;
                background-color: #242F40;
                color: #FAFAFA;
                margin: 50px auto;
                padding: 10px;
            }
            .outputWindow h3{
                text-align: center;
                //padding-top: 20px;
                padding-bottom: 5px;
                font-size: 22px;
                /*border-bottom: 4px dashed #FAFAFA;*/
            }
            td{
                padding: 10px;
            }
            .orange{
                color: #FAFF70;
                font-size: 16PX;
                font-weight: 700;
            }
        </style>

    </head>
    <body>
        <div class="container">    
            <div class="outputWindow">
                <h3>Calculator : </h3>
            </div>
            <form action="#" method="post">
                <table align="center">                
                    <tr class="outputWindow">
                        <td><label for="firstNumber">First Number : </label></td>
                        <td><input type="text" name="firstNumber" 
                                   id="firstNumber" 
                                   placeholder="<?php if (isset($_POST['firstNumber'])) {
                                           echo $_POST['firstNumber'];                                           
                                       }  else {
                                           echo 'Enter First Number';
                                       }?>"></td>
                    </tr>

                    <tr class="outputWindow">
                        <td><label for="lastNumber">Last Number : </label></td>
                        <td><input type="text" name="lastNumber" id="lastNumber" 
                                   placeholder="<?php if (isset($_POST['lastNumber'])) {
                                           echo $_POST['lastNumber'];                                           
                                       }  else {
                                           echo 'Enter Last Number';
                                       }?>"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="+" name="btn">
                            <input type="submit" value="-" name="btn">
                            <input type="submit" value="*" name="btn">
                            <input type="submit" value="/" name="btn">
                            <input type="submit" value="%" name="btn">
                        </td>
                    </tr>
                    
                    <tr>
                        <td></td>
                    </tr>
                    
                    <tr class="outputWindow orange">
                        <td><b>Results : </b></td>
                        <td>
                            <?php 
                                if (isset($calculation)){
                                    echo $calculation; 
                                }else{
                                    echo 'No Calculation done yet !';
                                }
                            ?>
                        </td>
                    </tr>
                </table>                         
            </form>
            
<!--            <div class="outputWindow">
                <h3>Calculator : </h3>
                
            </div>-->
        </div>
    </body>
</html>
