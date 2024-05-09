<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">

    <!-- Title -->
    <title>Batman</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="assets/css/main.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/neptune.png" />

</head>

<body>
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="login.php">Login</a></p>

            <div class="auth-credentials m-b-xxl">
                <form action="registration_post.php" method="POST">

                    <label for="signUpUsername" class="form-label">Name</label>

                    <input type="text" class="form-control" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Name" name="name" value="<?= (isset($_SESSION['old_name'])) ? $_SESSION['old_name'] : '' ?>">

                        <?php if (isset($_SESSION['name_error'])) :
                        ?>
                            <p class="text-danger"><?= $_SESSION['name_error']; ?></p>
                        <?php
                        // unset($_SESSION['name_error']);
                        endif; ?>


                    <label for="signUpEmail" class="form-label">Email address</label>

                    <input type="email" class="form-control" placeholder="email_address" name="email_address" value="<?= (isset($_SESSION['old_email'])) ? $_SESSION['old_email'] : '' ?>">
                        <?php if (isset($_SESSION['email_error'])) :
                        ?>
                            <p class="text-danger"><?= $_SESSION['email_error']; ?></p>
                        <?php elseif(isset($_SESSION['duplicate_email_error'])):?>
                        <p class="text-danger"><?= $_SESSION['duplicate_email_error']; ?></p>
                        <?php
                        endif; ?>
                        

                    <label for="signUpPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password">
                    <!-- <div id="emailHelp" class="form-text">Password must be minimum 8 characters length*</div> -->
                    <?php if (isset($_SESSION['password_error'])) :
                    ?>
                        <p class="text-danger"><?= $_SESSION['password_error']; ?></p>
                    <?php
                    // unset($_SESSION['password_error']);
                    endif; ?>

                    <label for="signUpPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="confirm_password">
                    <?php if (isset($_SESSION['confirm_password_error'])) :
                    ?>
                        <p class="text-danger"><?= $_SESSION['confirm_password_error']; ?></p>
                    <?php
                    // unset($_SESSION['confirm_password_error']);
                    endif; ?>
            </div>

            <div class="auth-submit">
                <button class="btn btn-primary" type="submit">Registration</button>
            </div>
            </form>
            <div class="divider"></div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>

<?php
session_unset();
?>