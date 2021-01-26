<form action="" method="post">
                            <div class="form-group">
                                <label class="form-group" for="cat-title">Update Category</label>
                                <?php


                                if (isset($_GET['edit'])) {

                                    $cat_id_toUpdate = $_GET['edit'];


                                    $query = "SELECT * FROM categories WHERE cat_id = $cat_id_toUpdate ";
                                    $select_categories_id = mysqli_query($connection, $query);

                                    while ($row = mysqli_fetch_assoc($select_categories_id)) {
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title']

                                ?>

                                        <input value="<?php if (isset($cat_title)) {
                                                            echo $cat_title;
                                                        } ?>" class="form-control" type="text" name="cat_title">

                                <?php }
                                } ?>


                                <?php
                                
                                if (isset($_POST['update_category'])) {

                                    $title_to_update = $_POST['cat_title'];
                                    $query = "UPDATE categories SET cat_title = '{$title_to_update}' WHERE cat_id = {$cat_id} " ;
                                    $update_query = mysqli_query($connection, $query);
                                    if(!$update_query){
                                        die("query failed" . mysqli_error($connection));
                                    }
                                    header("Location: categories.php");
                                }

                                
                                ?>






                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="update_category" value="Update">
                            </div>
                        </form>