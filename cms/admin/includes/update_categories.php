                    <form action="" method="post">
                        <div class="form-group">
                            <label for="cat_title">Edit Category</label>
                            <?php
                                if(isset($_GET['edit'])){
                                    $cat_id = $_GET['edit'];
                                    $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
                                    $select_categories_id = mysqli_query($connection, $query);

                                    while($row = mysqli_fetch_assoc($select_categories_id)) {
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                ?>
                                   <input type="text" name="cat_title" class="form-control" value="<?php if(isset($cat_title)){echo $cat_title;} ?>">
                                <?php } // CLOSING WHILE LOOP ?>
                                <?php } else {
                                    echo "<input type='text' name='cat_title' class='form-control'>";
                                } ?>
                                
                                <?php
                                // UPDATE CATEGORY
                                if(isset($_POST['cat_submit_edit'])) {
                                    $the_cat_title = $_POST['cat_title'];
                                    $query = "UPDATE categories SET cat_title = '$the_cat_title' WHERE cat_id = $cat_id";
                                    $update_query = mysqli_query($connection, $query);
                                        if (!$update_query) {
                                            die("QUERY FAILED" . mysqli_error($connection));
                                        }
                                    }
                                ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="cat_submit_edit" value="Update Category" class="btn btn-primary">
                        </div>
                    </form>