<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    // Redirect if the user is already logged in
    if (Session::get('login_user'))
    {
        header('Location: welcome.php');
        exit;
    }

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'] ?? "";
            $password = $_POST['password'] ?? "";
            $error = User::login($username, $password);
        }
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Admin - Login</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon-five.png" />

        <!-- Icon CSS -->
        <link href="assets/css/vendor/materialdesignicons.min.css" rel="stylesheet" />
        <link href="assets/css/vendor/remixicon.css" rel="stylesheet" />

        <!-- Vendor CSS -->
        <link href="assets/css/vendor/datatables.bootstrap5.min.css" rel="stylesheet" />
        <link href="assets/css/vendor/responsive.datatables.min.css" rel="stylesheet" />
        <link href="assets/css/vendor/daterangepicker.css" rel="stylesheet" />
        <link href="assets/css/vendor/simplebar.css" rel="stylesheet" />
        <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/vendor/apexcharts.css" rel="stylesheet" />
        <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" />

        <!-- Main CSS -->
        <link id="mainCss" href="assets/css/style.css" rel="stylesheet" />
    </head>

    <body data-fx-mode="light">
        <main class="wrapper sb-default">
            <section class="auth-section-2" id="particles-js">
                <div class="fx-login-page">
                    <div class="content-detail">
                        <div class="main-info">
                            <div class="hero-container">
                                <!-- Login form -->
                                <form class="login-form" method="post">
                                    <div class="imgcontainer">
                                        <a href="index.php"><img src="../assets/images/logo-v5.png" alt="logo" class="logo" /></a>
                                    </div>
                                    <p class="<?= $error ? 'text-danger' : 'text-success' ?>"><?= $error ?></p>
                                    <div class="input-control">
                                        <input type="text" placeholder="Enter Username" name="username" required />
                                        <span class="password-field-show">
                                            <input type="password" placeholder="Enter Password" name="password" class="password-field" required />
                                            <span data-toggle=".password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        </span>
                                       <div class="login-btns">
                                            <button type="submit" name="submit">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Vendor Custom -->
        <script src="assets/js/vendor/jquery-3.6.4.min.js"></script>
        <script src="assets/js/vendor/simplebar.min.js"></script>
        <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/particles.min.js"></script>
        <script src="assets/js/vendor/app.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- Data Tables -->
        <script src="assets/js/vendor/jquery.datatables.min.js"></script>
        <script src="assets/js/vendor/datatables.bootstrap5.min.js"></script>
        <script src="assets/js/vendor/datatables.responsive.min.js"></script>
        <!-- Caleddar -->
        <script src="assets/js/vendor/jquery.simple-calendar.js"></script>
        <!-- Date Range Picker -->
        <script src="assets/js/vendor/moment.min.js"></script>
        <script src="assets/js/vendor/daterangepicker.js"></script>
        <script src="assets/js/vendor/date-range.js"></script>

        <!-- Main Custom -->
        <script src="assets/js/main.js"></script>
    </body>
</html>