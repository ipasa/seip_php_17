<form action="insertNews.php" method="post">
    <fieldset class="form-group">
        <label for="news_title">News Title</label>
        <input type="text" class="form-control" id="news_title" placeholder="Enter News Title" name="news_title">
    </fieldset>

    <fieldset class="form-group">
        <label for="reporter_name">Reporter</label>
        <input type="text" class="form-control" id="reporter_name" placeholder="Reporter Name" name="reporter_name">
    </fieldset>


    <fieldset class="form-group">
        <label for="desc">News Description</label>
        <textarea class="form-control" id="desc" rows="8" name="news_description"></textarea>
    </fieldset>

    <div class="radio">
        <label>
            <input type="radio" name="news_publish_status" id="optionsRadios1" value="1" checked>
            Publish
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="news_publish_status" id="optionsRadios2" value="0">
            Unpublished
        </label>
    </div>

    <button type="submit" class="btn btn-primary" name="submit" value="submit">Save News</button>
</form>