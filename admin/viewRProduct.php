<?php
    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user')) {
        header("Location: index.php");
        exit;
    }

    $conn = Database::getConnect();
    $products = Operations::getRProductChecker($conn);
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
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    if (!empty($products)) {
                                                        foreach ($products as $pro) {
                                                ?>
                                                            <tr scope="row">
                                                                <td><?= $pro['category']; ?></td>
                                                                <td><img src="<?= $pro['img']; ?>" style="width: 4rem;" alt="Image Not Found"></td>
                                                                <td><?= $pro['title']; ?></td>
                                                                <td>
                                                                    <a href="editRProduct.php?edit_id=<?= $pro['id']; ?>">
                                                                        <button type="button" class="btn btn-square btn-outline-info m-2"><i class="ri-pencil-line"></i></button>
                                                                    </a>
                                                                    <a href="deleteRPro.php?delete_id=<?= $pro['id']; ?>">
                                                                        <button type="button" class="btn btn-square btn-outline-danger m-2"><i class="ri-delete-bin-line"></i></button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                <?php
                                                        }
                                                    } else {
                                                        echo "<tr><td colspan='4'>Products Not Found</td></tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form End -->
            </div>

        </main>

        <?php include "temp/footer.php"; ?>
    </body>

</html>