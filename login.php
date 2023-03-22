<?php
//session_start();
//if (isset($_SESSION["user"])) {
//    header("Location: index.php");
//}
//?>
<?php
//
//if (isset($_POST['submit'])) {
////    $name = mysqli_escape_string($connect, $_POST['username']);
//    $email =  $_POST['email'];
//    $pass = $_POST['password'];
//
//    $result = mysqli_query($connect,"SELECT * FROM tbl_account WHERE username = '$email' OR email = '$email'");
//    $row = mysqli_fetch_assoc($result);
//    if (mysqli_num_rows($result>0)){
//        if ($pass==$row['password']){
//            $_SESSION['login']=true;
//            $_SESSION['id']=$row['id'];
//        }
//        else{
//            echo "<script>alert(Người dùng hoặc Email chưa đăng kí)</script>";
//        }
//    }
//
//}
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="apple-touch-icon" href="./assets/uploads/apple-icon.png">
    <!-- them icon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/uploads/favicon.ico">

    <link rel="stylesheet" href="assets/style/common/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/style/common/normalize.css">
    <link rel="stylesheet" href="./assets/style/common/base.css">
    <link rel="stylesheet" href="./asset/style/common/reset.css">
    <link rel="stylesheet" href="./assets/style/custom.css">
    <link rel="stylesheet" href="./assets/style/login.css">


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

    <!-- Close Header -->
    <div class="bg-light">
        <div class="container ">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Đăng nhập</h5>
                      <?php
                      if (isset($_POST["submit"])) {
                          $email = $_POST["email"];
                          $password = $_POST["password"];
                          require_once "./database/connect.php";
                          $sql = "SELECT * FROM tbl_account WHERE email = '$email'";
                          $result = mysqli_query($connect, $sql);
                          $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                          if ($user) {
                              if (password_verify($password, $user["password"])) {
//                                  session_start();
//                                  $_SESSION["user"] = "yes";
                                  echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
//                                  header("Location: index.php");
                                  die();
                              }else{
                                  echo "<div class='alert alert-danger'>Password does not match</div>";
                              }
                          }else{
                              echo "<div class='alert alert-danger'>Email does not match</div>";
                          }
                      }
                      ?>

                    <form method="post" action="login.php">
                      <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Địa chỉ email</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Mật khẩu</label>
                      </div>
        
                      <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                        <label class="form-check-label" for="rememberPasswordCheck">
                          Nhớ mật khẩu
                        </label>
                      </div>
                      <div class="d-grid">
                        <button class="btn btn-success btn-login text-uppercase fw-bold" name="submit" type="submit">
                          Đăng nhập</button>
                      </div>
                      <a class="d-block text-center mt-2 small text-success" href="register.php">Không có tài khoản? Đăng kí </a>
                      <hr class="my-4">
                      <div class="d-grid mb-2">
                        <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                          <i class="fab fa-google me-2"></i> Sign in with Google
                        </button>
                      </div>
                      <div class="d-grid">
                        <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                          <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
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
        include './layout/footer.php';
    ?>
<!--    <footer class="bg-dark" id="tempaltemo_footer">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!---->
<!--                <div class="col-md-4 pt-5 ">-->
<!--                    <div class=" border-end border-light">-->
<!--                        <h2 class="h2 text-success  pb-3 logo">-->
<!--                            <div class="content">-->
<!--                                <img class="image_footer" src="./assets/uploads/apple-icon-footer.png" alt="">-->
<!--                            </div>-->
<!--                        </h2>-->
<!--                        <ul class="list-unstyled text-light footer-link-list">-->
<!--                            <li>-->
<!--                                <i class="fas fa-map-marker-alt fa-fw"></i>-->
<!--                                P214, Tòa nhà A17 Bách Khoa, 17 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <i class="fa fa-phone fa-fw"></i>-->
<!--                                <a class="text-decoration-none" href="tel:036 779 1116">036 779 1116</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <i class="fa fa-envelope fa-fw"></i>-->
<!--                                <a class="text-decoration-none"-->
<!--                                    href="mailto:tiemsachcuoingo@gmail.com">tiemsachcuoingo@gmail.com</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col-md-4 pt-5">-->
<!--                    <h2 class="h2 text-light pb-3">TÀI KHOẢN CỦA TÔI</h2>-->
<!--                    <ul class="list-unstyled text-light footer-link-list">-->
<!--                        <li><a class="text-decoration-none" href="#">Đăng nhập/Tạo mới tài khoản</a></li>-->
<!--                        <li><a class="text-decoration-none" href="#">Chi tiết tài khoản</a></li>-->
<!--                        <li><a class="text-decoration-none" href="#">Thay đổi địa chỉ khách hàng</a></li>-->
<!--                        <li><a class="text-decoration-none" href="#">Lịch sử mua hàng</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-4 pt-5">-->
<!--                    <h2 class="h2 text-light pb-3">Further Info</h2>-->
<!--                    <ul class="list-unstyled text-light footer-link-list">-->
<!--                        <li><a class="text-decoration-none" href="#">Trang chủ</a></li>-->
<!--                        <li><a class="text-decoration-none" href="#">Giới thiệu Bookly</a></li>-->
<!--                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>-->
<!--                        <li><a class="text-decoration-none" href="#">FAQs</a></li>-->
<!--                        <li><a class="text-decoration-none" href="#">Contact</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="row text-light mb-4">-->
<!--                <div class="col-12 mb-3">-->
<!--                    <div class="w-100 my-3 border-top border-light"></div>-->
<!--                </div>-->
<!--                <div class="col-auto me-auto">-->
<!--                    <ul class="list-inline text-left footer-icons">-->
<!--                        <li class="list-inline-item border border-light rounded-circle text-center">-->
<!--                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i-->
<!--                                    class="fab fa-facebook-f fa-lg fa-fw"></i></a>-->
<!--                        </li>-->
<!--                        <li class="list-inline-item border border-light rounded-circle text-center">-->
<!--                            <a class="text-light text-decoration-none" target="_blank"-->
<!--                                href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>-->
<!--                        </li>-->
<!--                        <li class="list-inline-item border border-light rounded-circle text-center">-->
<!--                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i-->
<!--                                    class="fab fa-twitter fa-lg fa-fw"></i></a>-->
<!--                        </li>-->
<!--                        <li class="list-inline-item border border-light rounded-circle text-center">-->
<!--                            <a class="text-light text-decoration-none" target="_blank"-->
<!--                                href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-auto">-->
<!--                    <label class="sr-only" for="subscribeEmail">Email address</label>-->
<!--                    <div class="input-group mb-2">-->
<!--                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail"-->
<!--                            placeholder="Email address">-->
<!--                        <div class="input-group-text btn-success text-light">Subscribe</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="w-100 bg-black py-3">-->
<!--            <div class="container">-->
<!--                <div class="row pt-2">-->
<!--                    <div class="col-12">-->
<!--                        <p class="text-left text-light">-->
<!--                            Copyright &copy; 2023 Tiệm Sách Cuối Ngõ <a rel="sponsored" href="/" target="_blank">| All-->
<!--                                Rights Reserved!</a>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </footer>-->
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>
  
</html>