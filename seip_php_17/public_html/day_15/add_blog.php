<?php
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

        $title          =   $_POST['blog_title'];
        $author         =   $_POST['author_name'];
        $description    =   $_POST['blog_description'];
        $status         =   $_POST['Publish_status'];

        $sql = "INSERT INTO tbl_blog (blog_title, blog_author, blog_desc, blog_status)"
                . "VALUES ('$title', '$author', '$description', $status)";
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
    <title>Blog Insert</title>
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
                <h3>Blog Insert Page</h3>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form role="form" action="#" method="post">
                    <div class="form-group">
                        <label for="title">Blog title:</label>
                        <input type="text" class="form-control" id="title" name="blog_title" placeholder="Title Here">
                    </div>

                    <div class="form-group">
                        <label for="author">Author Name:</label>
                        <input type="text" class="form-control" id="author" name="author_name" placeholder="Author Name Here">
                    </div>                                               

                    <div class="form-group">
                        <label for="desc">Blog Description: </label>
                        <textarea class="form-control" rows="5" id="desc" name="blog_description"></textarea>
                    </div>
                    
                    <div class="radio">
                        <label><input type="radio" name="Publish_status" value="1" checked>Published</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="Publish_status" value="0">Unpublished</label>
                    </div>

                    <button type="submit" class="btn btn-default" name="btn" value="submit">Save Student</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>