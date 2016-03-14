<!DOCTYPE html>
<html lang="en">

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="css/style.css">

<body>
<?php    
    include 'functions/db_connection.php';
    include 'functions/crud.php';
?>

<!-- Top Navigation -->
<div class="codrops-top clearfix">
        <a class="codrops-icon codrops-icon-prev" href="#">
            <span>News Paper</span>
        </a>
        <span class="right">
            <a class="codrops-icon codrops-icon-drop" href="index.php">
                <span>Home</span>
            </a>
            <a class="codrops-icon codrops-icon-drop" href="addNews.php">
                <span>Add Article</span>
            </a>
        </span>
</div>
<div class="container mar-top-50">
    <?php if (isset($_GET['message'])){ ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Success</strong> You successfully insert the news.
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <hr>
            <h3 class="text-md-center">Welcome to the news Section</h3>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-hover">

                <thead class="thead-inverse">
                    <tr>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-3">Category Title</th>
                        <th class="col-md-4">Category Detail's</th>
                        <th class="col-md-2">Category Status</th>
                        <th class="col-md-2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $sql    =   index();
                        $result = $conn->query($sql);
                        //var_dump($result);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row" class="col-md-1"><?php echo $row["id"]; ?></th>
                        <td class="col-md-3"><?php echo $row["catagory_name"]; ?></td>
                        <td class="col-md-4 description"><?php echo $row["catagory_desc"]; ?></td>
                        <td class="col-md-2 description">
                            <?php if ($row["status"] == 1){
                                echo 'Published';
                            }  else {
                                echo 'Unpublished';
                            }
                            ?>
                        </td>
                        <td class="col-md-2 action">
                            <a href="#">Edit</a> |
                            <a href="#">Delete</a>
                        </td>
                    </tr>

                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <footer class="blog-footer">
        <p class="text-md-center">&copy; Hasan Hafiz Pasha</p>
    </footer>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>