<?php
    //echo '<pre>';
    //print_r($_POST);
    //echo '</pre>';
    if (isset($_POST['btn'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_seip_php17";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);  
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $name   =   $_POST['student_name'];
        $email  =   $_POST['student_email'];
        $phone  =   $_POST['student_phone'];

        $sql = "INSERT INTO tbl_student (student_name, student_email, student_phone)"
                . "VALUES ('$name', '$email', '$phone')";
        if ($conn->query($sql) === TRUE) {
?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            New record created successfully
        </div>
<?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3>Student Information</h3>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form role="form" action="#" method="post">
                    <div class="form-group">
                        <label for="name">Student Name:</label>
                        <input type="text" class="form-control" id="name" name="student_name" placeholder="Hasan Hafiz Pasha">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="student_email" placeholder="pasha@gmail.com">
                    </div>                                               

                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="number" class="form-control" id="phone" name="student_phone" placeholder="+8801737104224">
                    </div>

                    <button type="submit" class="btn btn-default" name="btn" value="submit">Save Student</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>