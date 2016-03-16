<form action="insertNews.php" method="post">
    <fieldset class="form-group">
        <label for="news_title">Product Name</label>
        <input type="text" class="form-control" id="news_title" placeholder="Enter Product Name" name="name">
    </fieldset>

    <fieldset class="form-group">
        <label for="desc">Product Description</label>
        <textarea class="form-control" id="desc" rows="8" name="product_desc"></textarea>
    </fieldset>

    <fieldset class="form-group">
        <label for="price">Product Price</label>
        <input type="text" class="form-control" id="price" placeholder="Price - ex: 10" name="price">
    </fieldset>

    <button type="submit" class="btn btn-primary" name="submit" value="submit">Save Product</button>
</form>