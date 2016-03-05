<?php
    if (isset($_POST['submit'])){
        $start_number   =   $_POST['start_number'];        
        
        //echo $start_number;
        //echo '<br>';
        $stringWordCount    =   str_word_count($start_number);
        
        $str    =   $start_number;
        $str    =   preg_replace("/[^A-Za-z,?]/","",$str);
        $stringCharacterCount    =   strlen($str);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example 9 - String Manipulation</title>
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
        <h3>String Manipulation : </h3>
        <form action="#" method="post">
            <table>
                <tr>
                    <td><label for="sNumber">Input String</label></td>
                    <td>
                        <input type="text" name="start_number" id="sNumber"
                               placeholder="<?php if (isset($_POST['start_number'])){echo $_POST['start_number'];}?>"
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
                    if (isset($_POST['start_number'])){
                        echo 'Number of Word : '.$stringWordCount;
                        echo '<br>';
                        echo 'Number of Character : '.$stringCharacterCount;
                    }                    
                ?>
            </p>
        </div>
    </div>
</body>
</html>