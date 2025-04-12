<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

    $category = Operations::getCategory();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <?php include "temp/head.php" ?>

    </head>

    <body data-fx-mode="light">
        <main class="wrapper sb-default">
            
			<?php include "temp/header.php" ?>
			
			<?php include "temp/sideheader.php" ?>

            <!-- main content -->
            <div class="fx-main-content">
                <div class="container-fluid pt-4 px-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    if (!empty($category)) {
                                                        foreach ($category as $cate) {
                                                ?>
                                                <tr scope="row" colspan="2">
                                                    <td><?= $cate['category']; ?></td>
                                                    <td>
                                                        <a href="editCate.php?edit_id=<?= $cate['id']; ?>">
                                                            <button type="button" class="btn btn-square btn-outline-info m-2"><i class="ri-pencil-line"></i></button>
                                                        </a>
                                                        <a href="deleteCate.php?delete_id=<?= $cate['id']; ?>">
                                                            <button type="button" class="btn btn-square btn-outline-danger m-2"><i class="ri-delete-bin-line"></i></button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php } } else { echo "<tr><td colspan='2'>Category Not Found</td></tr>"; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <?php include "temp/footer.php"; ?>
    </body>

</html>