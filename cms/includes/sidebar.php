<div class="col-md-4">

<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form action="search.php" method="post">
        <div class="input-group">
            <input name="search" type="text" class="form-control">
            <span class="input-group-btn">
                <button name="submit_search" class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
    </form>
    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <?php
        $query = "SELECT * FROM categories LIMIT 8";
        $selectCategoriesSidebar= mysqli_query($connection, $query);
        $num_rows = mysqli_num_rows($selectCategoriesSidebar);
        // echo $available_category;
        $count = 0;
    ?>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <?php 
                    while ($count < $num_rows/2) {
                        $row = mysqli_fetch_assoc($selectCategoriesSidebar);
                        $cat_title = $row['cat_title'];
                        echo "<li><a href='#'>$cat_title</a></li>";
                        $count ++;
                    }
                ?>
            </ul>
        </div>
        
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <?php 
                    while ($row = mysqli_fetch_assoc($selectCategoriesSidebar)) {
                        $cat_title = $row['cat_title'];
                        echo "<li><a href='#'>$cat_title</a></li>";
                        $count ++;
                    }
                ?>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<?php include "widget.php" ?>

</div>