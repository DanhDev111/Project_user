<?php
//session_start();
//if (isset($_SESSION["user"])) {
//    header("Location: index.php");
//}
//?>
<?php
//$connect = mysqli_connect('localhost','root','','ban_hang');
//if (isset($_POST['submit'])){
//    $username = mysqli_escape_string($connect,$_POST['username']);
//    $email= mysqli_escape_string($connect,$_POST['email']);
//    $pass = md5($_POST['password']);
//    $cpass= md5($_POST['cpassword']);
//    $select = " SELECT * FROM tbl_account WHERE email = '$email' OR username='$username'";
//    $result = mysqli_query($connect, $select);
//    if (mysqli_num_rows($result)>0){
//        echo "<script>alert(Tên người dùng hoặc Email đã tồn tại)</script>";
////        $error[] = 'user already exist!';
//    }else{
//        if ($cpass != $pass){
//            echo "<script>alert(Mật khẩu không khớp)</script>";
//
//        }else{
//            $insert= "Insert into tbl_account (username,email,password) values ('$username','$email','$pass')";
//            mysqli_query($connect,$insert);
//            header('Location:login.php');
//        }
//
//    };
//}
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="apple-touch-icon" href="./assets/uploads/apple-icon.png">
    <!-- them icon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/uploads/favicon.ico">

    <link rel="stylesheet" href="assets/style/common/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/style/common/normalize.css">
    <link rel="stylesheet" href="./assets/style/common/base.css">
    <link rel="stylesheet" href="./asset/style/common/reset.css">
    <link rel="stylesheet" href="./assets/style/custom.css">
    <link rel="stylesheet" href="./assets/style/register.css">


    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="assets/font/fontawesome-pro-5.13.0-web/css/all.min.css">
</head>
<body>
  <!-- Start Top Nav -->
  <!-- <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
      <div class="container text-light">
          <div class="w-100 d-flex justify-content-between">
              <div>
                  <i class="fa fa-envelope mx-2"></i>
                  <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                  <i class="fa fa-phone mx-2"></i>
                  <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
              </div>
              <div>
                  <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
              </div>
          </div>
      </div>
  </nav> -->
  <!-- Close Top Nav -->


  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light shadow">
      <div class="container d-flex justify-content-between align-items-center">

          <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
              <div class="content">
                  <h3 class="fw-bold">Bookly</h3>
                  <p class="">End Of Alley</p>
              </div>
          </a>

          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
              data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
              id="templatemo_main_nav">
              <div class="flex-fill">
                  <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="index.php">Trang chủ</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="about.html">Về chúng tôi</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="shop.php">Cửa hàng</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="contact.html">Liên hệ</a>
                      </li>
                  </ul>
              </div>
              <div class="navbar align-self-center d-flex">
                  <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                      <div class="input-group">
                          <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                          <div class="input-group-text">
                              <i class="fa fa-fw fa-search"></i>
                          </div>
                      </div>
                  </div>
                  <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal"
                      data-bs-target="#templatemo_search">
                      <i class="fa fa-fw fa-search text-dark mr-2"></i>
                  </a>
                  <a class="nav-icon position-relative text-decoration-none" href="shop-cart.php">
                      <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                      <!-- <span
                          class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                  </a> -->
                  </a>
                      <!-- Thêm đăng nhập đăng kí -->
                      <div class="">
                          <a href="register.php" class="btn btn-outline-success me-2">Đăng kí</a>
                          <a href="login.php" class="btn btn-success text-white">Đăng nhập</a>
                      </div>
                      <!-- Kết thúc đăng nhập đăng kí -->
                      <!-- Người dùng  -->
                      <!-- <div class="flex-shrink-0 dropdown">
                          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                  class="rounded-circle">
                          </a>
                          <ul class="dropdown-menu text-small shadow">
                              <li><a class="dropdown-item" href="#">New project...</a></li>
                              <li><a class="dropdown-item" href="#">Settings</a></li>
                              <li><a class="dropdown-item" href="#">Profile</a></li>
                              <li>
                                  <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Sign out</a></li>
                          </ul>
                      </div> -->
                      <!-- Kết thúc người dùng -->
              </div>
          </div>

      </div>
  </nav>
<!--  --><?php
//  include 'navbar.php';
//  ?>
  <!-- Close Header -->
<div class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Đăng kí </h5>
              <?php
              if (isset($_POST["submit"])) {
                  $userName = $_POST["username"];
                  $email = $_POST["email"];
                  $password = $_POST["password"];
                  $passwordRepeat = $_POST["repeat_password"];

                  $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                  $errors = array();

                  if (empty($userName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
                      array_push($errors,"All fields are required");
                  }
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      array_push($errors, "Email is not valid");
                  }
                  if (strlen($password)<8) {
                      array_push($errors,"Password must be at least 8 charactes long");
                  }
                  if ($password!==$passwordRepeat) {
                      array_push($errors,"Password does not match");
                  }
                  require_once "connect.php";
                  $sql = "SELECT * FROM tbl_account WHERE email = '$email'";
                  $result = mysqli_query($connect, $sql);
                  $rowCount = mysqli_num_rows($result);
                  if ($rowCount>0) {
                      array_push($errors,"Email already exists!");
                  }
                  if (count($errors)>0) {
                      foreach ($errors as  $error) {
                          echo "<div class='alert alert-danger'>$error</div>";
                      }
                  }else{

                      $sql = "INSERT INTO tbl_account (username, email, password) VALUES ( ?, ?, ? )";
                      $stmt = mysqli_stmt_init($connect);
                      $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                      if ($prepareStmt) {
                          mysqli_stmt_bind_param($stmt,"sss",$userName, $email, $passwordHash);
                          mysqli_stmt_execute($stmt);
                          echo "<div class='alert alert-success'>Bạn đã đăng kí thành công .</div>";
                      }else{
                          die("Something went wrong");
                      }
                  }


              }
              ?>
            <form method="post" >
                <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus>
                <label for="floatingInputUsername">Tên người dùng</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Địa chỉ email</label>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Mật khẩu</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" name="repeat_password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                <label for="floatingPasswordConfirm">Nhập lại mật khẩu</label>
              </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-success btn-login fw-bold text-uppercase" name="submit" type="submit">Đăng ký</button>
              </div>

              <a class="d-block text-center mt-2 small text-success" href="login.php">Có 1 tài khoản? Đăng nhập</a>

              <hr class="my-4">

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-google me-2"></i> Sign up with Google
                </button>
              </div>

              <div class="d-grid">
                <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  


  <!-- Start Footer -->
    <?php
    include './layout/footer.php'
    ?>
<!--  <footer class="bg-dark" id="tempaltemo_footer">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!---->
<!--            <div class="col-md-4 pt-5 ">-->
<!--                <div class=" border-end border-light">-->
<!--                    <h2 class="h2 text-success  pb-3 logo">-->
<!--                        <div class="content">-->
<!--                            <img class="image_footer" src="./assets/uploads/apple-icon-footer.png" alt="">-->
<!--                        </div>-->
<!--                    </h2>-->
<!--                    <ul class="list-unstyled text-light footer-link-list">-->
<!--                        <li>-->
<!--                            <i class="fas fa-map-marker-alt fa-fw"></i>-->
<!--                            P214, Tòa nhà A17 Bách Khoa, 17 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <i class="fa fa-phone fa-fw"></i>-->
<!--                            <a class="text-decoration-none" href="tel:036 779 1116">036 779 1116</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <i class="fa fa-envelope fa-fw"></i>-->
<!--                            <a class="text-decoration-none"-->
<!--                                href="mailto:tiemsachcuoingo@gmail.com">tiemsachcuoingo@gmail.com</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="col-md-4 pt-5">-->
<!--                <h2 class="h2 text-light pb-3">TÀI KHOẢN CỦA TÔI</h2>-->
<!--                <ul class="list-unstyled text-light footer-link-list">-->
<!--                    <li><a class="text-decoration-none" href="#">Đăng nhập/Tạo mới tài khoản</a></li>-->
<!--                    <li><a class="text-decoration-none" href="#">Chi tiết tài khoản</a></li>-->
<!--                    <li><a class="text-decoration-none" href="#">Thay đổi địa chỉ khách hàng</a></li>-->
<!--                    <li><a class="text-decoration-none" href="#">Lịch sử mua hàng</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-4 pt-5">-->
<!--                <h2 class="h2 text-light pb-3">Further Info</h2>-->
<!--                <ul class="list-unstyled text-light footer-link-list">-->
<!--                    <li><a class="text-decoration-none" href="#">Trang chủ</a></li>-->
<!--                    <li><a class="text-decoration-none" href="#">Giới thiệu Bookly</a></li>-->
<!--                    <li><a class="text-decoration-none" href="#">Shop Locations</a></li>-->
<!--                    <li><a class="text-decoration-none" href="#">FAQs</a></li>-->
<!--                    <li><a class="text-decoration-none" href="#">Contact</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="row text-light mb-4">-->
<!--            <div class="col-12 mb-3">-->
<!--                <div class="w-100 my-3 border-top border-light"></div>-->
<!--            </div>-->
<!--            <div class="col-auto me-auto">-->
<!--                <ul class="list-inline text-left footer-icons">-->
<!--                    <li class="list-inline-item border border-light rounded-circle text-center">-->
<!--                        <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i-->
<!--                                class="fab fa-facebook-f fa-lg fa-fw"></i></a>-->
<!--                    </li>-->
<!--                    <li class="list-inline-item border border-light rounded-circle text-center">-->
<!--                        <a class="text-light text-decoration-none" target="_blank"-->
<!--                            href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>-->
<!--                    </li>-->
<!--                    <li class="list-inline-item border border-light rounded-circle text-center">-->
<!--                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i-->
<!--                                class="fab fa-twitter fa-lg fa-fw"></i></a>-->
<!--                    </li>-->
<!--                    <li class="list-inline-item border border-light rounded-circle text-center">-->
<!--                        <a class="text-light text-decoration-none" target="_blank"-->
<!--                            href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-auto">-->
<!--                <label class="sr-only" for="subscribeEmail">Email address</label>-->
<!--                <div class="input-group mb-2">-->
<!--                    <input type="text" class="form-control bg-dark border-light" id="subscribeEmail"-->
<!--                        placeholder="Email address">-->
<!--                    <div class="input-group-text btn-success text-light">Subscribe</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="w-100 bg-black py-3">-->
<!--        <div class="container">-->
<!--            <div class="row pt-2">-->
<!--                <div class="col-12">-->
<!--                    <p class="text-left text-light">-->
<!--                        Copyright &copy; 2023 Tiệm Sách Cuối Ngõ <a rel="sponsored" href="/" target="_blank">| All-->
<!--                            Rights Reserved!</a>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</footer>-->
  <!-- End Footer -->

  <!-- Start Script -->
  <script src="assets/js/jquery-1.11.0.min.js"></script>
  <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <!-- End Script -->
</body>

  
</html>