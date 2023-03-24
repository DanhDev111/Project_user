<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bookly End Of Alley</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../assets/uploads/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/uploads/favicon.ico">

    <link rel="stylesheet" href="../assets/style/common/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/style/common/normalize.css">
    <link rel="stylesheet" href="../assets/style/common/base.css">
    <link rel="stylesheet" href="./asset/style/common/reset.css">
    <link rel="stylesheet" href="../assets/style/custom.css">
    <link rel="stylesheet" href="../assets/style/shop-cart.css">


    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="../assets/font/fontawesome-pro-5.13.0-web/css/all.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="../assets/style/common/slick.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/style/common/slick-theme.css">
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
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
      <section class="h-100 h-custom">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
      
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="h5">Shopping Bag</th>
                      <th scope="col">Format</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <div class="d-flex align-items-center">
                          <img src="../img/book1.jpg" class="img-fluid rounded-3"
                               style="width: 120px;" alt="Book">
                          <div class="flex-column ms-4">
                            <p class="mb-2">Thinking, Fast and Slow</p>
                            <p class="mb-0">Daniel Kahneman</p>
                          </div>
                        </div>
                      </th>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">Digital</p>
                      </td>
                      <td class="align-middle">
                        <div class="d-flex flex-row">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>
      
                          <input id="form1" min="0" name="quantity" value="1" type="number"
                            class="form-control form-control-sm" style="width: 50px;" />
      
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </td>
                      <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;">$9.99</p>
                      </td>
                      <td class="align-middle">
                        
                            <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                         
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0">
                        <div class="d-flex align-items-center">
                          <img src="../img/book1.jpg" class="img-fluid rounded-3"
                               style="width: 120px;" alt="Book">
                          <div class="flex-column ms-4">
                            <p class="mb-2">Homo Deus: A Brief History of Tomorrow</p>
                            <p class="mb-0">Yuval Noah Harari</p>
                          </div>
                        </div>
                      </th>
                      <td class="align-middle border-bottom-0">
                        <p class="mb-0" style="font-weight: 500;">Paperback</p>
                      </td>
                      <td class="align-middle border-bottom-0">
                        <div class="d-flex flex-row">
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                          </button>
      
                          <input id="form1" min="0" name="quantity" value="1" type="number"
                            class="form-control form-control-sm" style="width: 50px;" />
      
                          <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </td>
                      <td class="align-middle border-bottom-0">
                        <p class="mb-0" style="font-weight: 500;">$13.50</p>
                      </td>
                      <td class="align-middle">
                        
                        <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                     
                  </td>
                    </tr>
                  </tbody>
                </table>
              </div>
      
              <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                <div class="card-body p-4">
      
                  <div class="row">
                      <div class="d-flex justify-content-between" style="font-weight: 500;">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2">$23.49</p>
                      </div>
      

      
                      <hr class="my-4">
      
                      <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                        <p class="mb-2">Total (tax included)</p>
                        <p class="mb-2">$26.48</p>
                      </div>
      
                      <button type="button" class="btn btn-primary btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <span>Checkout</span>
                          <span>$26.48</span>
                        </div>
                      </button>
      

                  </div>
      
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
<!--            -->
<!--            <div id="carousel-related-product">-->
<!---->
<!--                <div class="p-2 pb-3">-->
<!--                    <div class="product-wap card rounded-0">-->
<!--                        <div class="card rounded-0">-->
<!--                            <img style="width: 304px;height: 405px;" class="card-img rounded-0 img-fluid" src="img/bookupdate/book-10.png">-->
<!--                            <div-->
<!--                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">-->
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">Red Clothing</a>-->
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
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">White Shirt</a>-->
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
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
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
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">Black Fashion</a>-->
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
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
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
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
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
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
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
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
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
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
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
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
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
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
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
<!--                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i-->
<!--                                                class="far fa-heart"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="far fa-eye"></i></a></li>-->
<!--                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i-->
<!--                                                class="fas fa-cart-plus"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <a href="shop-single.php" class="cart-title h3 text-decoration-none">Oupidatat non</a>-->
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
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5 ">
                    <div class=" border-end border-light">
                        <h2 class="h2 text-success  pb-3 logo">
                            <div class="content">
                                <img class="image_footer" src="../assets/uploads/apple-icon-footer.png" alt="">
                            </div>
                        </h2>
                        <ul class="list-unstyled text-light footer-link-list">
                            <li>
                                <i class="fas fa-map-marker-alt fa-fw"></i>
                                P214, Tòa nhà A17 Bách Khoa, 17 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội
                            </li>
                            <li>
                                <i class="fa fa-phone fa-fw"></i>
                                <a class="text-decoration-none" href="tel:036 779 1116">036 779 1116</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope fa-fw"></i>
                                <a class="text-decoration-none"
                                    href="mailto:tiemsachcuoingo@gmail.com">tiemsachcuoingo@gmail.com</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light pb-3">TÀI KHOẢN CỦA TÔI</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Đăng nhập/Tạo mới tài khoản</a></li>
                        <li><a class="text-decoration-none" href="#">Chi tiết tài khoản</a></li>
                        <li><a class="text-decoration-none" href="#">Thay đổi địa chỉ khách hàng</a></li>
                        <li><a class="text-decoration-none" href="#">Lịch sử mua hàng</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light pb-3">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Trang chủ</a></li>
                        <li><a class="text-decoration-none" href="#">Giới thiệu Bookly</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                    class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-white border-light" id="subscribeEmail"
                            placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 Tiệm Sách Cuối Ngõ <a rel="sponsored" href="/" target="_blank">| All
                                Rights Reserved!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="../assets/js/jquery-1.11.0.min.js"></script>
    <script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="../assets/js/slick.min.js"></script>
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