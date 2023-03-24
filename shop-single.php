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

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="./assets/style/common/slick.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/style/common/slick-theme.css">
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Header -->
    <?php
        include './layout/navlogout.php'
    ?>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Open Content -->
    <?php
    include './admin/connect.php';
//    $sql = "select * from tbl_product where id=14 ";
//    $id = $_GET['id'];



//    $result=mysqli_query($connect,$sql);
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sqlDetailProd = "SELECT * FROM tbl_product where id= $id";
        $resultDetailProd = mysqli_query($connect, $sqlDetailProd);
        $rowProDetail = mysqli_fetch_row($resultDetailProd);
    }

    ?>
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">

                        <img style="width:524px" class="card-img img-fluid" src="./img/<?php echo $rowProDetail[2];?>" alt="Card image cap"
                             id="product-detail">

                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-evenly">
                            <div class="row">

                                <div class="col-4">
                                    <a href="#">
                                        <img style="width: 400px;" class="card-img img-fluid" src="./img/<?php echo $rowProDetail[2];?>"
                                            alt="Product Image 7">
                                    </a>
                                </div>

<!--                                <div class="col-4">-->
<!--                                    <a href="#">-->
<!--                                        <img style="width: 128px;" class="card-img img-fluid" src="img/bookupdate/book-1.png"-->
<!--                                            alt="Product Image 8">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="col-4">-->
<!--                                    <a href="#">-->
<!--                                        <img style="width: 128px;" class="card-img img-fluid" src="img/bookupdate/book-1.png"-->
<!--                                            alt="Product Image 9">-->
<!--                                    </a>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card" style="height:670px;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h1 class="card-title-shop-single h2"><?php echo $rowProDetail[1]?></h1>
                            <p class="h3 py-2">$<?php echo $rowProDetail[6]?></p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Thể loại:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $rowProDetail[1]?></strong></p>
                                </li>
                            </ul>
<!--                            <ul class="list-inline">-->
<!--                                <li class="list-inline-item">-->
<!--                                    <h6>Nhà xuất bản:</h6>-->
<!--                                </li>-->
<!--                                <li class="list-inline-item">-->
<!--                                    <p class="text-muted"><strong>Trẻ</strong></p>-->
<!--                                </li>-->
<!--                            </ul>-->

                            <h6>Mô Tả:</h6>
                            <p><?php echo $rowProDetail[3] ?></p>
                            <h6 class="pb-3">Tác giả: <?php echo $rowProDetail[4] ?></h6>
                            <form action="" method="post">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity"
                                                    value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary"
                                                    id="var-value"><?php echo $rowProDetail[5] ?></span></li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit"
                                            value="buy">Đặt hàng</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit"
                                            value="addtocard">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Close Content -->

    <!-- Start Article -->
<!--    <section class="py-5">-->
<!--        <div class="container">-->
<!--            <div class="row text-left p-2 pb-3">-->
<!--                <h4>Related Products</h4>-->
<!--            </div>-->
<!---->
<!--           -->
<!--            <div id="carousel-related-product">-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">Red Clothing</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$20.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">White Shirt</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$25.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$45.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">Black Fashion</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$60.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$80.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$110.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$125.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$160.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$180.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$220.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$250.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.html" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
<!--                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">-->
<!--                                <li class="pt-2">-->
<!--                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>-->
<!--                                    <span-->
<!--                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="list-unstyled d-flex justify-content-center mb-1">-->
<!--                                <li>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-warning fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                    <i class="text-muted fa fa-star"></i>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <p class="text-center mb-0">$300.00</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!---->
<!--        </div>-->
<!--    </section>-->
    <!-- End Article -->

    <!-- Start Footer -->
    <?php
        include './layout/footer.php'
    ?>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>