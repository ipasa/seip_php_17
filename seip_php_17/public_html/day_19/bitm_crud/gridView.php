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
        <div class="row">

        </div>
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
                <h3 class="text-md-center">Welcome to the news Section</h3>
                <hr>
            </div>
        </div>

        <div class="row">
            <?php
            $sql    =   index();
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>

            <div class="col-md-3">
                <div class="card">

                    <img class="card-img-top img-fluid"
                         src="<?php echo $row["news_image_link"];?>"
                         alt="Card image cap"
                    >

                    <div class="card-block">
                        <h4 class="card-title"><?php echo $row["news_title"]; ?></h4>
                        <p class="card-text"><?php echo mb_substr($row["news_description"], 0, 40) ?></p>
                        <a href="#" class="btn btn-primary">Show Full News</a>
                    </div>
                </div>
            </div>

            <?php }} ?>
        </div>
    </div>


<?php
//Including footer file
include '_include/footer.php';
?>