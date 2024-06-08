<?php
session_start();

//move to index.php if account is not admin 
if ($_SESSION['role'] < 1) {
    header('location:.');
}

/* Connection Declaration - Start */
require_once './config/database.php';
spl_autoload_register(function ($className) {
    require_once "./app/models/$className.php";
});
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quản lý giao diện - P3 Pet Shop</title>

  <!-- Fav Icon Link Start -->
  <link rel="shortcut icon" href="./public/img/logo/P3.png" type="image/x-icon">
  <!-- Fav Icon Link End -->

  <!-- Google Font Link Start -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Google Font Link End -->

  <!-- Font Awesome Link Start -->
  <link rel="stylesheet" href="./public/fonts/font-awesome/css/all.min.css">
  <!-- Font Awesome Link End -->

  <!-- Bootstrap Link Start -->
  <link rel="stylesheet" href="./public/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap Link Start -->

  <!-- Style Link Start -->
  <link rel="stylesheet" href="./public/css/style.css">
  <link rel="stylesheet" href="./public/css/style-admin.css">
  <!-- Style Link End -->
</head>

<body>
    <!-- Sidebar Section Start -->
    <section class="admin-sidebar">
        <a class="logo" href="."><img class="logo-img" src="./public/img/logo/P3.png" alt="P3 Logo"><span class="logo-text">P3<p class="logo-mini-text">Pet Shop</p></span></a>
        <ul class="admin-side-bar-list">
            <?php if ($_SESSION['role'] == 2) {
            ?>
                <li class="admin-side-bar-item"><a class="admin-side-bar-link active" href="admin_manage_interface.php"><i class="fa-solid fa-wand-magic-sparkles"></i> Quản lý giao diện</a></li>
            <?php
            } ?>
            <li class="admin-side-bar-item"><a class="admin-side-bar-link" href="admin_manage_account.php"><i class="fa-solid fa-users-gear"></i> Quản lý tài khoản</a></li>
            <li class="admin-side-bar-item"><a class="admin-side-bar-link" href="admin_manage_category.php"><i class="fa-regular fa-folder-open"></i> Quản lý danh mục</a></li>
            <li class="admin-side-bar-item"><a class="admin-side-bar-link" href="admin_manage_pet.php"><i class="fa-solid fa-shield-cat"></i> Quản lý thú cưng</a></li>
            <li class="admin-side-bar-item"><a class="admin-side-bar-link" href="admin_manage_order.php"><i class="fa-solid fa-box-open"></i> Quản lý đơn hàng</a></li>
        </ul>
    </section>
    <!-- Sidebar Section End -->

    <!-- Header Section Start -->
    <section class="admin-content">
        <header class="header">
            <nav class="nav-bar">
                <ul class="nav-list">
                    <li class="nav-item">
                    </li>
                </ul>
            </nav>
            <div class="icon-bar">
                <ul class="icon-list">
                    <li class="icon-item"><a class="icon-link" href="account.php"><i class="fa-solid fa-user"></i></a>
                        <ul class="account-functions-list">
                            <?php
                            if (isset($_SESSION['username'])) {
                            ?>
                                <li class="account-functions-item"><a class="account-functions-link" href="account.php"><i class="fa-solid fa-user-tie"></i> <?php echo $_SESSION['username'] ?></a></li>
                                <li class="account-functions-item"><a class="account-functions-link" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</a></li>
                            <?php
                            } else {
                            ?>
                                <li class="account-functions-item"><a class="account-functions-link" href="login.php"><i class="fa-solid fa-right-to-bracket"></i> Đăng nhập</a></li>
                                <li class="account-functions-item"><a class="account-functions-link" href="register.php"><i class="fa-solid fa-user-plus"></i> Đăng ký</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <!-- Header Section End -->
    </section>
</body>

</html>