<?php 
    $newsID =   $_GET['newsID'];
    
    include 'functions/db_connection.php';
    include 'functions/crud.php';
    $sql = update($newsID);
    $result = $conn->query($sql);
    $row    = $result->fetch_assoc()
?>


<form action="updateNews.php" method="post">
    <fieldset class="form-group">
        <label for="news_title">News Title</label>
        <input type="text" class="form-control" id="news_title" 
               value="<?php echo $row['news_title']; ?>" name="news_title">
    </fieldset>

    <fieldset class="form-group">
        <label for="reporter_name">Reporter</label>
        <input type="text" class="form-control" id="reporter_name" 
               value="<?php echo $row['news_reporter']; ?>" name="reporter_name">
    </fieldset>


    <fieldset class="form-group">
        <label for="desc">News Description</label>
        <textarea class="form-control" id="desc" rows="8" name="news_description"><?php echo $row['news_description']; ?></textarea>
    </fieldset>

    <div class="radio">
        <label>
            <input type="radio" name="news_publish_status" id="optionsRadios1" value="1" 
                <?php 
                    if ($row['news_status'] == 1){
                        echo ' checked';
                    }
                ?>
            >
            Publish
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="news_publish_status" id="optionsRadios2" value="0"
                <?php 
                    if ($row['news_status'] == 0){
                        echo ' checked';
                    }
                ?>
            >
            Unpublished
        </label>
    </div>
    <input type="hidden" name="news_id" value="<?php echo $newsID;?>">

    <button type="submit" class="btn btn-primary" name="submit" value="submit">Save News</button>
</form>