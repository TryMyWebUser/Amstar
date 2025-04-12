<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
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
                    <!-- Page title & breadcrumb -->
                    <div class="fx-page-title">
                        <div class="fx-breadcrumb">
                            <h5>Welcome, Admin.</h5>
                            <p>Here's what's happening with your store today.</p>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "temp/footer.php" ?>

        </main>
    </body>
</html>