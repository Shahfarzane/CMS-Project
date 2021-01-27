<?php include "includes/admin_header.php"; ?>
<div id="wrapper">
    <?php include "includes/admin_navigation.php" ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="c4ol-lg-12">
                    <h1 class="page-header">
                        Welcome to admin
                        <small>

                        </small>
                    </h1>
                    <div class="col-xs-6">
                        <?php


insert_categories();

                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="form-group" for="cat-title">Category Name</label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>


                        <?php

                        if (isset($_GET['edit'])) {

                            $cat_id = $_GET['edit'];
                            include "includes/update_categories.php";
                        }
                        ?>
                    </div>
                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
findAllCategories();


                                ?>




                                <?php

                                delete_categories();


                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                </div>
                <div class="row">
                </div>

            </div>

        </div>

        <?php include "includes/admin_footer.php" ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://js.pusher.com/4.1/pusher.min.js"></script>