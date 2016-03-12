<?php 
    $status =   'viewStudent';
    include './function/db_connection.php';
    include './function/crud_function.php';
    $conn       = db_connection();

    $sql    = allStudent();
    $result = $conn->query($sql);    
    //var_dump($result);   
?>
        
        <?php include './_include/header.php';?>
        <?php include './_include/menu.php';?>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3 class="text-center">View Student Info : </h3>                    
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                            ?>
                            
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["address"]; ?></td>
                            </tr>
                            
                            <?php } ?>
                            
                        </tbody>
                    </table>
                    
                    <?php 
                        } else {
                            echo "0 results";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </body>
</html>

<?php $conn->close(); ?>