<?php
    $page_status    =   'addNews';
    //Including header file
    include '_include/header.php';

    //Including Navigation File
    include '_include/navigation.php';
?>

<div class="container mar-top-50">
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <hr>
            <h3 class="text-md-center">Adding your Product into the database</h3>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php
                //Including FORM file
                include '_include/form.php';
            ?>
        </div>
    </div>
</div>


<?php
//Including footer file
include '_include/footer.php';
?>