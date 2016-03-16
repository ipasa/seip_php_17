<?php
    $page_status    =   'home';
    //Including header file
    include '_include/header.php';

    //Including Navigation File
    include '_include/navigation.php';

    include 'functions/db_connection.php';
    include 'functions/crud.php';
?>

<div class="container mar-top-50">
    <?php if (isset($_GET['message'])){ ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>
                        <?php echo $_GET['message'];?> !
                    </strong> 
                    You successfully <?php echo $_GET['message'];?> the news.
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <hr>
            <h3 class="text-md-center">Welcome to the Product Section</h3>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-hover">

                <thead class="thead-inverse">
                    <tr>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-2">Product Name</th>
                        <th class="col-md-5">Product Description</th>
                        <th class="col-md-2">Price</th>
                        <th class="col-md-2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $sql    =   index();
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row" class="col-md-1"><?php echo $row["id"]; ?></th>
                        <td class="col-md-2"><?php echo $row["name"]; ?></td>
                        <td class="col-md-5 description"><?php echo $row["product_desc"]; ?></td>
                        <td class="col-md-2 description"><?php echo $row["price"]; ?></td>
                        <th class="col-md-2 action">
                            <a href="editNews.php?proID=<?php echo $row["id"]; ?>">Edit</a> |
                            <a href="deleteNews.php?proID=<?php echo $row["id"]; ?>">Delete</a>
                        </th>
                    </tr>

                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
    //Including footer file
    include '_include/footer.php';
?>