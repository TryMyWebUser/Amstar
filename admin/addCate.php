<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['category']))
        {
            $cate = $_POST['category'] ?? "";
            $error = User::setCategory($cate);
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
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-7">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Category Uploads</h4>
                                    <form method="POST">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Category?</label>
                                            <input type="text" class="form-control" name="category" required>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "temp/footer.php"; ?>
        </main>
    </body>

</html>