<nav class="navbar navbar-fixed-top navbar-light bg-faded">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
        &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
        <a class="navbar-brand" href="#">My Shop</a>
        <ul class="nav navbar-nav pull-md-right">
            <li class="nav-item <?php if ($page_status === 'home'){echo 'active';} ?>">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if ($page_status === 'addNews'){echo 'active';} ?>">
                <a class="nav-link" href="addProduct.php">Add Product</a>
            </li>
        </ul>
    </div>
</nav>