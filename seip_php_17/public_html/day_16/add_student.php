<?php 
    $status =   'addStudent';
    include './_include/header.php';
?>
<?php include './_include/menu.php';?>

    <div class="container">
        <?php if(isset($_GET['message'])){ ?>
        <div class="row">
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Success!</strong> Insert Success Fully Occurs.
            </div>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3>Add Student Page: </h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="form_action.php" method="post">
                    <div class="form-group">
                        <label for="student_name">Name:</label>
                        <input type="text" class="form-control" id="student_name" name="student_name" required="">
                    </div>
                    <div class="form-group">
                        <label for="student_email">Email:</label>
                        <input type="email" class="form-control" id="student_email" name="student_email" required="">
                    </div>
                    <div class="form-group">
                        <label for="student_phone">Phone:</label>
                        <input type="number" class="form-control" id="student_phone" name="student_phone" required="">
                    </div>
                    <div class="form-group">
                        <label for="student_address">Address:</label>
                        <textarea class="form-control" rows="5" id="student_address" name="student_address"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success" name="submit" value="submit">Save Student</button>
                </form>
            </div>
        </div>

    </div>

</body>
</html>