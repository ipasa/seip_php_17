<?php 
    $proID =   $_GET['proID'];
    
    include 'functions/db_connection.php';
    include 'functions/crud.php';
    $sql = update($proID);
    $result = $conn->query($sql);
    $row    = $result->fetch_assoc()
?>


<form action="updateNews.php" method="post">
  
    <fieldset class="form-group">
        <label for="news_title">Product Name</label>
        <input type="text" class="form-control" id="news_title" 
               placeholder="Enter News Title" name="name"
               value="<?php echo $row['name']; ?>"
        >
    </fieldset>

    <fieldset class="form-group">
        <label for="desc">Product Description</label>
        <textarea class="form-control" id="desc" rows="8" name="product_desc"><?php echo $row['product_desc']; ?></textarea>
    </fieldset>

    <fieldset class="form-group">
        <label for="price">Product Price</label>
        <input type="text" class="form-control" id="price" 
               placeholder="Price - ex: 10" name="price"
               value="<?php echo $row['price']; ?>"
        >
    </fieldset>
    <input type="hidden" name="id" value="<?php echo $proID;?>">

    <button type="submit" class="btn btn-primary" name="submit" value="submit">Update Product</button>
</form>