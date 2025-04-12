<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

    $conn = Database::getConnect();
    $pro = Operations::getRProduct($conn);

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['category']) && isset($_POST['title']))
        {
            // die("hi");
            $getID = $_GET['edit_id'] ?? "";
            $cate = $_POST['category'] ?? "";
            $title = $_POST['title'] ?? "";
            $img = $_FILES['img'] ?? "";

            $error = User::updateRProducts($title, $img, $cate, $getID, $conn);
        }
    }
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
                <div class="container-fluid">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="rounded h-100 p-4">
                                <h6 class="mb-4">Products Uploads</h6>
                                <p class="<?= $error ? 'text-danger' : 'text-success' ?>"><?= $error ?></p>
                                <form method="POST" enctype="multipart/form-data">
                                    <select class="form-select mb-3" name="category">
                                        <option value="<?= $pro['category']; ?>">Select Category *</option>
                                        <?php
                                            $data = Operations::getProductChecker($conn);
                                            foreach ($data as $d) {
                                        ?>
                                        <option value="<?= $d['title']; ?>"><?= $d['title']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="mb-3">
                                        <!-- <label class="form-label">Product Title *</label> -->
                                        <input type="text" name="title" class="form-control" placeholder="Product Title *" value="<?= $pro['title']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <!-- <label for="formFile" class="form-label">Default file input example</label> -->
                                        <input class="form-control" type="file" name="img" id="formFile">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form End -->
            </div>

            <?php include "temp/footer.php"; ?>
        </main>
    </body>

</html>