<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

?>
<!DOCTYPE html>
<html lang="vi" class="no-js">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Shop  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

</head>
<body class="">

<!-- Add your site or application content here -->
<!-- header area start -->
<header>
    <div class="top-link">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-3 col-sm-9 hidden-xs">
                    <div class="site-option">
                        <ul>
                            <li class="currency"><a href="#">USD <i class="fa fa-angle-down"></i> </a>
                                <ul class="sub-site-option">
                                    <li><a href="#">Eur</a></li>
                                    <li><a href="#">Usd</a></li>
                                </ul>
                            </li>
                            <li class="language"><a href="#">English <i class="fa fa-angle-down"></i> </a>
                                <ul class="sub-site-option">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">English2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="call-support">
                        <p>Call support free: <span> (800) 123 456 789</span></p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="dashboard">
                        <div class="account-menu">
                            <ul>
                                <li class="search">
                                    <a href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <ul class="search">
                                        <li>
                                            <form action="#">
                                                <input type="text">
                                                <button type="submit"> <i class="fa fa-search"></i> </button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <ul>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="wishlist.html">my wishlist</a></li>
                                        <li><a href="cart.html">my cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="#">Log in</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-menu">
                            <ul>
                                <li><a href="#"> <img src="img/icon-cart.png" alt=""> <span>2</span> </a>
                                    <div class="cart-info">
                                        <ul>
                                            <li>
                                                <div class="cart-img">
                                                    <img src="img/cart/1.png" alt="">
                                                </div>
                                                <div class="cart-details">
                                                    <a href="#">Fusce aliquam</a>
                                                    <p>1 x $174.00</p>
                                                </div>
                                                <div class="btn-edit"></div>
                                                <div class="btn-remove"></div>
                                            </li>
                                            <li>
                                                <div class="cart-img">
                                                    <img src="img/cart/2.png" alt="">
                                                </div>
                                                <div class="cart-details">
                                                    <a href="#">Fusce aliquam</a>
                                                    <p>1 x $777.00</p>
                                                </div>
                                                <div class="btn-edit"></div>
                                                <div class="btn-remove"></div>
                                            </li>
                                        </ul>
                                        <h3>Subtotal: <span> $951.00</span></h3>
                                        <a href="checkout.html" class="checkout">checkout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mainmenu-area home2 product-items">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="index">Home</a>

                                </li>
                                <li class="mega-women"><a href="index">Women</a>
                                    <div class="mega-menu women">
                                        <div class="part-1">
                                                    <span>
                                                        <a href="#">Dresses</a>
                                                        <a href="#">Cocktail</a>
                                                        <a href="#">Day</a>
                                                        <a href="#">Evening</a>
                                                        <a href="#">Sports</a>
                                                    </span>
                                            <span>
                                                        <a href="#">shoes</a>
                                                        <a href="#">Sports</a>
                                                        <a href="#">run</a>
                                                        <a href="#">sandals</a>
                                                        <a href="#">Books</a>
                                                    </span>
                                            <span>
                                                        <a href="#">Handbags</a>
                                                        <a href="#">Blazers</a>
                                                        <a href="#">table</a>
                                                        <a href="#">coats</a>
                                                        <a href="#">kids</a>
                                                    </span>
                                            <span>
                                                        <a href="#">Clothing</a>
                                                        <a href="#">T-shirts</a>
                                                        <a href="#">coats</a>
                                                        <a href="#">Jackets</a>
                                                        <a href="#">jeans</a>
                                                    </span>
                                        </div>
                                        <div class="part-2">
                                            <a href="#">
                                                <img src="img/banner/menu-banner.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="mega-men"><a href="shop.html">Men</a>
                                    <div class="mega-menu men">
                                                <span>
                                                    <a href="#">Bags</a>
                                                    <a href="#">Bootees  Bags</a>
                                                    <a href="#">Blazers</a>
                                                </span>
                                        <span>
                                                    <a href="#">Clothing</a>
                                                    <a href="#">coats</a>
                                                    <a href="#">T-shirts</a>
                                                </span>
                                        <span>
                                                    <a href="#">Lingerie</a>
                                                    <a href="#">Bands</a>
                                                    <a href="#">Furniture</a>
                                                </span>
                                    </div>
                                </li>
                                <li class="mega-footwear"><a href="shop.html">Thể loại</a>
                                    <div class="mega-menu footwear">
                                                <span>
                                                    <a href="#">Danh mục</a>
                                                    <?php foreach ($data as $key=>$value){?>
                                                        <a href="search?name=<?=$value?>"><?=$value?></a>

                                                    <?php }?>
                                                </span>
                                        <span>
                                                    <a href="#">Khác</a>
                                                    <a href="#"></a>
                                                </span>
                                    </div>
                                </li>
                                <li class="mega-jewellery"><a href="shop.html">Jewellery</a>
                                    <div class="mega-menu jewellery">
                                                <span>
                                                    <a href="#">Rings</a>
                                                </span>
                                    </div>
                                </li>
                                <li><a href="shop.html">accessories</a></li>
                                <li><a href="#">Pages</a>
                                    <div class="sub-menu pages">
                                                <span>
                                                    <a href="about-us.html">About us</a>
                                                </span>
                                        <span>
                                                    <a href="blog.html">Blog</a>
                                                </span>
                                        <span>
                                                    <a href="blog-details.html">Blog Details</a>
                                                </span>
                                        <span>
                                                    <a href="cart.html">Cart</a>
                                                </span>
                                        <span>
                                                    <a href="checkout.html">Checkout</a>
                                                </span>
                                        <span>
                                                    <a href="contact.html">Contact</a>
                                                </span>
                                        <span>
                                                    <a href="my-account.html">My account</a>
                                                </span>
                                        <span>
                                                    <a href="shop.html">Shop</a>
                                                </span>
                                        <span>
                                                    <a href="shop-list.html">Shop list</a>
                                                </span>
                                        <span>
                                                    <a href="single-product.html">Single Shop</a>
                                                </span>
                                        <span>
                                                    <a href="login.html">Login page</a>
                                                </span>
                                        <span>
                                                    <a href="register.html">Ragister page</a>
                                                </span>
                                        <span>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </span>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mobile-menu">
                        <nav>
                            <ul>
                                <li><a href="index">Home</a>

                                </li>
                                <li><a href="index">Women</a>
                                    <ul>
                                        <li><a href="#">Dresses</a>
                                            <ul>
                                                <li><a href="#">Coctail</a></li>
                                                <li><a href="#">day</a></li>
                                                <li><a href="#">evening</a></li>
                                                <li><a href="#">sports</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">shoes</a>
                                            <ul>
                                                <li><a href="#">Sports</a></li>
                                                <li><a href="#">run</a></li>
                                                <li><a href="#">sandals</a></li>
                                                <li><a href="#">boots</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">handbags</a>
                                            <ul>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">table</a></li>
                                                <li><a href="#">coats</a></li>
                                                <li><a href="#">kids</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">clothing</a>
                                            <ul>
                                                <li><a href="#">T-shirts</a></li>
                                                <li><a href="#">coats</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">jeans</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Men</a>
                                    <ul>
                                        <li><a href="#">Bags</a>
                                            <ul>
                                                <li><a href="#">Bootees bag</a></li>
                                                <li><a href="#">Blazers</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">clothing</a>
                                            <ul>
                                                <li><a href="#">coats</a></li>
                                                <li><a href="#">T-shirts</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Lingerie</a>
                                            <ul>
                                                <li><a href="#">Bands</a></li>
                                                <li><a href="#">Furniture</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Foorwear</a>
                                    <ul>
                                        <li><a href="#">footwear men</a>
                                            <ul>
                                                <li><a href="#">gifts</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">footwear women</a>
                                            <ul>
                                                <li><a href="#">boots</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Jewellery</a>
                                    <ul>
                                        <li><a href="#">Rings</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Accessories</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about-us.html">About us</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="my-account.html">My account</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-list.html">Shop list</a></li>
                                        <li><a href="single-product.html">Single Shop</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="login.html">login page</a></li>
                                        <li><a href="register.html">register page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
<!-- product items banner start -->
<div class="product-banner">
    <img src="img/product/banner.jpg" alt="">
</div>
<!-- product items banner end -->
<!-- product main items area start -->
<div class="product-main-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="location">
                    <ul>
                        <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                        <li><strong> shop</strong></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="product-sidebar">
                    <div class="sidebar-title">
                        <h2>Shopping Options</h2>
                    </div>
                    <div class="single-sidebar">
                        <div class="single-sidebar-title">
                            <h3>Category</h3>
                        </div>
                        <div class="single-sidebar-content">
                            <ul>
                                <li><a href="#">Dresses (4)</a></li>
                                <li><a href="#">shoes (6)</a></li>
                                <li><a href="#">Handbags (1)</a></li>
                                <li><a href="#">Clothing (3)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <div class="single-sidebar-title">
                            <h3>Color</h3>
                        </div>
                        <div class="single-sidebar-content">
                            <ul>
                                <li><a href="#">Black (2)</a></li>
                                <li><a href="#">Blue (2)</a></li>
                                <li><a href="#">Green (4)</a></li>
                                <li><a href="#">Grey (2)</a></li>
                                <li><a href="#">Red (2)</a></li>
                                <li><a href="#">White (2)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <div class="single-sidebar-title">
                            <h3>Manufacturer</h3>
                        </div>
                        <div class="single-sidebar-content">
                            <ul>
                                <li><a href="#">Calvin Klein (2)</a></li>
                                <li><a href="#">Diesel (2)</a></li>
                                <li><a href="#">option value (1)</a></li>
                                <li><a href="#">Polo (2)</a></li>
                                <li><a href="#">store view (4)</a></li>
                                <li><a href="#">Tommy Hilfiger (2)</a></li>
                                <li><a href="#">will be used (1)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar price">
                        <div class="single-sidebar-title">
                            <h3>Price</h3>
                        </div>
                        <div class="single-sidebar-content">
                            <div class="price-range">
                                <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                    </div>
                                </div>
                                <button type="submit"> <span>search</span> </button>
                            </div>
                        </div>
                    </div>
                    <div class="banner-left">
                        <a href="#">
                            <img src="img/product/banner_left.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="product-bar">
                    <ul class="product-navigation" role="tablist">
                        <li role="presentation" class="active gird">

                            <a href="#gird" aria-controls="gird" role="tab" data-toggle="tab">
                                        <span>
                                            <img class="primary" src="img/product/grid-primary.png" alt="">
                                            <img class="secondary" src="img/product/grid-secondary.png" alt="">
                                        </span>
                                Gird
                            </a>
                        </li>
                        <li role="presentation" class="list">
                            <a href="#list" aria-controls="list" role="tab" data-toggle="tab">
                                        <span>
                                            <img class="primary" src="img/product/list-primary.png" alt="">
                                            <img class="secondary" src="img/product/list-secondary.png" alt="">
                                        </span>
                                List
                            </a>
                        </li>
                    </ul>
                    <div class="sort-by">
                        <label>Sort By</label>
                        <select name="sort" >
                            <option value="#" selected >Position</option>
                            <option value="#">Name</option>
                            <option value="#">Price</option>
                        </select>
                        <a href="#" title="Set Descending Direction">
                            <img src="img/product/i_asc_arrow.gif" alt="">
                        </a>
                    </div>
                    <div class="limit-product">
                        <label>Show</label>
                        <select name="show">
                            <option value="#" selected>9</option>
                            <option value="#">12</option>
                            <option value="#">24</option>
                            <option value="#">36</option>
                        </select>
                        per page
                    </div>
                </div>
                <div class="row">
                    <div class="product-content">
                        <div class="tab-content">
                            <div role="tabpanel" class=" home2" id="gird">


                                <!--                                    item start -->
                                <?php
                                foreach ($product as $key=>$values){

                                    ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="single-product">
                                            <div class="level-pro-new">
                                                <span>new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="single-product?id=<?=$values['id'] ?>">
                                                    <img src="<?=$values['Link']?>" alt="" class="primary-img">
                                                    <img src="<?=$values['Link']?>" alt="" class="secondary-img">
                                                </a>
                                            </div>
                                            <div class="actions">
                                                <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                <ul class="add-to-link">
                                                    <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-price">
                                                <div class="product-name">
                                                    <a href="single-product?id=<?=$values['id'] ?>" title="Fusce aliquam"><?=$values['name']?></a>
                                                </div>
                                                <div class="price-rating">
                                                    <span>$170.00</span>
                                                    <div class="ratings">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>

                                <!--                                    item end-->

                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="toolbar-bottom">
                            <ul>
                                <li><span>Pages:</span></li>
                                <li class="current"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"> <img src="img/product/pager_arrow_right.gif" alt=""> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product main items area end -->

<!-- footer top area start -->
<div class="footer-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="footer-contact">
                    <img src="img/logo-white.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    <ul class="address">
                        <li>
                            <span class="fa fa-fax"></span>
                            (800) 123 456 789
                        </li>
                        <li>
                            <span class="fa fa-phone"></span>
                            (800) 123 456 789
                        </li>
                        <li>
                            <span class="fa fa-envelope-o"></span>
                            admin@bootexperts.com
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 hidden-sm">
                <div class="footer-tweets">
                    <div class="footer-title">
                        <h3>Latest tweets</h3>
                    </div>
                    <div class="twitter-feed">
                        <div class="twitter-article">
                            <div class="twitter-img">
                                <a href="#">
                                    <img src="img/twitter/twitter-1.png" alt="">
                                </a>
                            </div>
                            <div class="twitter-text">
                                <p>Raboda Fashion #Magento #Theme comes up with pure white and grey, which great show your products. Check it: </p>
                                <a href="#">https://t.co/iu0OYBwti8</a>
                                <div class="twitter-time">
                                    <a href="#">16h</a>
                                </div>
                            </div>
                        </div>
                        <div class="twitter-article">
                            <div class="twitter-img">
                                <a href="#">
                                    <img src="img/twitter/twitter-1.png" alt="">
                                </a>
                            </div>
                            <div class="twitter-text">
                                <p>Raboda Fashion #Magento #Theme comes up with pure white and grey, which great show your products. Check it: </p>
                                <a href="#">https://t.co/iu0OYBwti8</a>
                                <div class="twitter-time">
                                    <a href="#">16h</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="footer-support">
                    <div class="footer-title">
                        <h3>Our support</h3>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Your Account</a></li>
                            <li><a href="#">Advanced Search</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="footer-info">
                    <div class="footer-title">
                        <h3>Our information</h3>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer top area end -->
<!-- footer area start -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="footer-copyright">
                    <p>Copyright &copy; 2016 <a href="#"> Bootexperts</a>. All Rights Reserved</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="payment-icon">
                    <img src="img/payment.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="scrollUp"><i class="fa fa fa-arrow-up"></i></a>
</footer>
<!-- footer area end -->
<!-- quickview product start -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" src="img/product/quick-view.jpg">
                            </div>
                        </div>

                        <div class="product-info">
                            <h1>Diam quis cursus</h1>
                            <div class="price-box">
                                <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                            </div>
                            <a href="shop.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                            </div>
                            <div class="share-post">
                                <div class="share-title">
                                    <h3>share this product</h3>
                                </div>
                                <div class="share-social">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-pinterest"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>


