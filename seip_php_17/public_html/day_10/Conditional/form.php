<?php 
//    echo '<pre>';
//    print_r($_POST);
//    echo '</pre>';
    
//    if (isset($_POST['firstName'])) {
//        $first_name =   $_POST['firstName'];
//    }
//    if (isset($_POST['lastName'])) {
//        $last_name  =   $_POST['lastName'];
//    }
//    if(isset($_POST['firstName'])){
//        echo $first_name." ".$last_name;
//    }
    
    if (isset($_POST['btn'])) {
      $first_name =   $_POST['firstName'];  
      $last_name  =   $_POST['lastName'];
      echo $first_name." ".$last_name;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form to send data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <div class="container">
            <h3>Submit Form : </h3>
            <ul>
                <form action="#" method="post">
                    <table align="center">
                        <tr>
                            <td><label for="firstName">First Name : </label></td>
                            <td><input type="text" name="firstName" id="firstName"></td>
                        </tr>
                        <tr>
                            <td><label for="lastName">Last Name : </label></td>
                            <td><input type="text" name="lastName" id="lastName"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Submit your form" name="btn"></td>
                        </tr>
                    </table>                         
                </form>
            </ul>
        </div>
    </body>
</html>
