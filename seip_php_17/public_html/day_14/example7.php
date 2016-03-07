<?php
    if (isset($_POST['submit'])){
        $start_number   =   $_POST['start_number']; 
        $end_number     =   $_POST['end_number']; 
        $result =   0;
        
        function calculateSum($start_number, $end_number) {
            for ($i=$start_number;$i<=$end_number;$i+=2){
                $result =   $i+$start_number;
            }
            return $result;
        }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example 8 - Password Creation</title>
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
        input[type=number]{
            width: 478px;
            padding: 5px;;
        }
        input[type=submit]{
            width: 492px;
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
        <h3>Password Manipulation : </h3>
        <form action="#" method="post">
            <table>
                <tr>
                    <td><label for="sNumber">Enter Start number</label></td>
                    <td>
                        <input type="number" name="start_number" id="sNumber"
                               placeholder="<?php 
                                if (isset($_POST['start_number'])){
                                   echo $_POST['start_number'];
                                }
                               ?>"
                        >
                    </td>
                </tr>
                
                <tr>
                    <td><label for="eNumber">Enter End Number</label></td>
                    <td>
                        <input type="number" name="end_number" id="eNumber"
                               placeholder="<?php 
                                if (isset($_POST['end_number'])){
                                   echo $_POST['end_number'];
                                }
                               ?>"
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
                <strong>
                    <?php
                        if(isset($_POST['submit'])){
                            if ($start_number%2 == 0) {
                                echo 'The Summetion is = '.calculateSum($start_number, $end_number);
                            }  else {
                                $start_number=  $start_number+1;
                                echo 'The Summetion is = '.calculateSum($start_number, $end_number);
                            }
                        }
                    ?>
                </strong>
            </p>
        </div>
    </div>
</body>
</html>