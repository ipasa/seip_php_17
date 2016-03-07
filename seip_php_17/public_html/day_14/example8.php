<?php
    if (isset($_POST['submit'])){
        $start_number   =   $_POST['start_number']; 
        
        function randomNumber($length) {
            $result     = '';
            $dataArray  = array('a','m','c','$','b','f','h','q','6','.');

            for ($i = 0; $i < $length; $i++) {
                $rNumber    =   mt_rand(0, 9);
                $result .= $dataArray[$rNumber];
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
                    <td><label for="sNumber">Enter Password Length</label></td>
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
                        if (isset($_POST['start_number'])){
                            if ($_POST['start_number'] == 0) {
                                echo 'Sorry No Number Inputed';
                            } else {
                                echo 'The generated random password is - ' . randomNumber($start_number);
                            }
                        }
                    ?>
                </strong>
            </p>
        </div>
    </div>
</body>
</html>