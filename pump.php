<?php
include("header.php");
?>
<!-- Page Title -->
<section class="page-title" style="background-image: url(assets/images/background/bg-26.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1><?= $_GET['data'] ?></h1>
                </div>
                <ul class="bread-crumb style-two">
                    <li><a href="index.php">Home </a></li>
                    <li class="active"><?= $_GET['data'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- shop-details -->
<section class="shop-details">
    <div class="auto-container">
        <div class="product-details-content">
            <?php
                $products = Operations::getProductPage($conn);
                if (!empty($products)) {
                    foreach ($products as $pro) {
            ?>
            <div class="row clearfix">
                <div class="col-lg-6">
                    <div class="products-carousel">
                        <div class="single-product-view">
                            <!-- <div class="swiper-container product-content wow fadeInUp" data-wow-delay="300ms">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"> -->
                                        <div class="image">
                                            <img src="assets/<?= $pro['img'] ?>" alt="">
                                        </div>
                                    <!-- </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 content-column">
                    <div class="product-details">
                        <div class="title-box">
                            <h3><?= $pro['title'] ?></h3>
                        </div>
                        <div class="text">
                            <p><?= $pro['dec'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } else { echo "<p>Product Not Found</p>"; } ?>
        </div>
    </div>
</section>
<!-- shop-details end -->
<!-- Related Products -->
<?php

    $related = Operations::getRProductChecker($conn);
    if (!empty($related)) {

?>
<section class="related-product">
    <div class="auto-container">
        <div class="sec-title mb-30">
            <h3>Related Products</h3>
        </div>
        <div class="row">
            <?php
                foreach ($related as $list) {
                    if ($list['category'] === $_GET['data']) {
            ?>
            <div class="col-lg-4 col-md-6 shop-block">
                <div class="inner-box">
                    <div class="image"><img src="assets/<?= $list['img'] ?>" alt=""></div>
                    <div class="content-upper">
                        <h4><?= $list['title'] ?></a></h4>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</section>
<?php
    }
include("footer.php");
?>