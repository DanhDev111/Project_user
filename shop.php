<?php
include 'admin/connect.php';
$sql = "select * from tbl_product";
$result=mysqli_query($connect,$sql);
$search='';
if (isset($_POST['search'])){
    $search=$_POST['search'];
}
$sql_search="select * from tbl_product where product_name like '%$search%'";
$products = mysqli_query($connect,$sql_search);


if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page =1;
}

//$sqlCount = "SELECT COUNT(*) AS count_record FROM tbl_product WHERE product_name LIKE '%$search%'";
//$counts = mysqli_query($connect, $sqlCount);

$record_per_page = 6;

$start = ($page - 1) * $record_per_page;

$sql = "SELECT * FROM tbl_product WHERE product_name LIKE '%$search%' LIMIT $start, $record_per_page";
$result=mysqli_query($connect,$sql);
//$sqlCount="SELECT count(*) FROM tbl_product";
//
//$arrayCount = mysqli_query($connect,$sqlCount);
//$resultNumber = mysqli_fetch_array($arrayCount);
//$countRecord = $resultNumber['count(*)'];
//
//$recordOnepage =2;
//$sotrang=ceil($countRecord/$recordOnepage);
//$mysqli =new mysqli('localhost','root','','testingsystem')
//// Trang bắt đầu
//$start = 0;
//// Giới hạn
//$rows_per_page = 4;
//
//$ketqua = mysqli_query($mysqli,"select * from tbl_product limit 0,4");
//$sohang = $sql->num_rows;
//$pages=ceil($sohang / 4);
//if (isset($_GET['page-nr'])){
//    $_GET['page-nr'] - 1;
//    $start = $pages * 4;
//}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bookly End Of Alley</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="./assets/uploads/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/uploads/favicon.ico">
    <link rel="stylesheet" href="assets/style/common/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/style/common/normalize.css">
    <link rel="stylesheet" href="./assets/style/common/base.css">
    <link rel="stylesheet" href="./asset/style/common/reset.css">
    <link rel="stylesheet" href="./assets/style/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="assets/font/fontawesome-pro-5.13.0-web/css/all.min.css">

    <!--

TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <?php
        include './layout/navlogout.php'
    ?>
    <!-- Header -->

    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="h2 pb-4">Danh Mục</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between cart-title h3 text-decoration-none" href="#">
                            Tâm Lý - Kỹ Năng Sống
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between cart-title h3 text-decoration-none" href="#">
                            Văn Học
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between cart-title h3 text-decoration-none" href="#">
                            Nuôi Dạy Con
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between cart-title h3 text-decoration-none" href="#">
                            Sách Thiếu Nhi
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between cart-title h3 text-decoration-none" href="#">
                            Tiểu Sử - Hồi Kí
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between cart-title h3 text-decoration-none" href="#">
                            Sách Giáo Khoa - Tham Khảo
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between cart-title h3 text-decoration-none" href="#">
                            Sách Học Ngoại Ngữ
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row flex-row-reverse">
                    <div class="col-md-6 pb-4">
                        <div class="d-flex flex-row-reverse">
                            <form style="margin-right: 0 !important;" action="" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" >
                                <input type="text" name="search"  class="form-control" placeholder="Search..." aria-label="Search">

                            </form>

                        </div>
                    </div>
                </div>
                <?php
                $pr_query= "select * from tbl_product";
                $pr_result=mysqli_query($connect,$pr_query);
                $total_records = mysqli_num_rows($pr_result);

                $total_pages=ceil($total_records/$record_per_page);

                ?>
                <div class="row">
                    <?php  while($product = mysqli_fetch_array($result) ){?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="./img/<?php echo $product['img'];?>">
                                <?php

                                ?>
                                <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="btn btn-success text-white" href="shop-single.php?id=<?php echo $product['id'];?>">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php?id=<?php echo $product['id'];?>"><i
                                                        class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php?id=<?php echo $product['id'];?>"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="?detail=shop-single&id=<?php echo $product['id'] ?>;" class="cart-title h3 text-decoration-none"><?php echo $product['product_name']; ?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span
                                                class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                                class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                                class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                                class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                                class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$<?php echo $product['price']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>

                </div>
                <div class="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <?php
                        for ($counter=1;$counter<=$total_pages;$counter++){
                            ?>
                            <li class="page-item ">
                                <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="?page=<?php echo $counter ?>"
                                   tabindex="-1"><?php echo $counter?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->
    <!-- Start Footer -->
    <?php
        include './layout/footer.php'
    ?>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>