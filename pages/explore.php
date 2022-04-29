<!DOCTYPE html>
<html lang="en">
<?php include_once "../api/_config.php"; ?>

<head>

    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "../components/head.php";
    $meta["title"] = "Rupesh Basutkar"; ?>
    <meta property="og:title" content="<?php echo $meta["title"]; ?>">
    <meta property="og:image" content="">
    <title><?php echo $meta["title"]; ?></title>
    <meta property="og:description" content="">
    <meta property="twitter:title" content="Rupesh Basutkar">
    <meta property="twitter:description" content="">

</head>

<body>
    <?php include_once "../components/nav.php"; ?>
    <main class="explore-page page-padding">
        <!-- <div class="social_link">
            <ul>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
            </ul>
        </div> -->

        <section class="explore1-sec">
            <div class="container">
            <div class="row">
                        <div class="col-12">
                            <div class="explore1-content text-center">
                                 <!-- <h1>Explore</h1> -->
                                 <p>Photography</p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <section class="index1-section">
            <div class="container">
                   
                <div class="mySwiper">
                    <div class="main-wrapper swiper-wrapper">
                        <div class="main swiper-slide">
                            <div class="left-side">
                                <div class="main-wrapper">
                                    <a href="../pages/meghalaya-blog-details.php" class="main-title1">Meghalaya</a>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">
                                    <img class="bottle-bg" src="../assets/media/images/img-1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="main swiper-slide">
                            <div class="left-side">
                                <div class="main-wrapper">
                                <a href="../pages/meghalaya-blog-details.php" class="main-title1">Aasam</a>

                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">
                                    <img class="bottle-bg" src="../assets/media/images/img-2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="main swiper-slide">
                            <div class="left-side">
                                <div class="main-wrapper">
                                <a href="../pages/meghalaya-blog-details.php" class="main-title1">Communication</a>

                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">

                                    <img class="bottle-bg" src="../assets/media/images/img-1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="main swiper-slide">
                            <div class="left-side">
                                <div class="main-wrapper">
                                <a href="../pages/meghalaya-blog-details.php" class="main-title1">Coral</a>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">
                                    <img class="bottle-bg" src="../assets/media/images/img-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-wrapper">
                    <div class="swiper-button swiper-prev-button">
                        <span>PREV <i class="fas fa-long-arrow-alt-down"></i></span>
                    </div>
                    <div class="swiper-button swiper-next-button">
                        
                        <span> <i class="fas fa-long-arrow-alt-up"></i> NEXT </span>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--  -->
        <section class="travel-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="travel-link">
                            <ul>
                                <li><a href="#" > Ladhak </a></li>
                                <li><a href="#" > Arunachal </a></li>
                                <li><a href="#" > Aasam </a></li>
                                <li><a href="../pages/meghalaya-blog-details.php" > Meghalaya </a></li>
                                <li><a href="#" > Himachal </a></li>
                                <li><a href="#" > Rajasthan </a></li>
                                <li><a href="#" > Maharashtra </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include_once "../components/footer.php"; ?>
    
</body>

</html>