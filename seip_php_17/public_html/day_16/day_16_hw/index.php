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
                        <th class="col-md-3">News Title</th>
                        <th class="col-md-8">News Detail's</th>
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
                        <td class="col-md-3"><?php echo $row["news_title"]; ?></td>
                        <td class="col-md-8"><?php echo $row["news_description"]; ?></td>
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