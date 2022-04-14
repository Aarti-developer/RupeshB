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
    <main class="index-page">
        <section class="index1-section">
            <div class="container">

                <div class="mySwiper">
                    <div class="main-wrapper swiper-wrapper">
                        <div class="main swiper-slide" id="beach">
                            <div class="left-side">
                                <div class="main-wrapper">
                                    <h1 class="main-title">Calligraphy</h1>
                                </div>
                                <div class="main-content">
                                    <div class="more-menu">
                                        Show More
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="-5" y1="12" x2="19" y2="12" />
                                            <line x1="15" y1="16" x2="19" y2="12" />
                                            <line x1="15" y1="8" x2="19" y2="12" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">
                                    <img class="bottle-bg" src="../assets/media/images/img-1.png" alt="">
                                    <!-- <img class="bottle-img" src="https://cdn.shopify.com/s/files/1/0689/1443/t/34/assets/bottle_beach.png?v=11784267851598469514" /> -->
                                </div>
                            </div>
                        </div>
                        <div class="main swiper-slide" id="graphic">
                            <div class="left-side">
                                <div class="main-wrapper">
                                    <h1 class="main-title">Graphic</h1>
                                </div>
                                <div class="main-content">
                                    <div class="more-menu">
                                        Show More
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="-5" y1="12" x2="19" y2="12" />
                                            <line x1="15" y1="16" x2="19" y2="12" />
                                            <line x1="15" y1="8" x2="19" y2="12" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">
                                    <img class="bottle-bg" src="../assets/media/images/img-2.png" alt="">
                                    <!-- <img class="bottle-img" src="https://cdn.shopify.com/s/files/1/0689/1443/t/34/assets/savanna_OK.png?v=4783820813181844557" /> -->
                                </div>
                            </div>
                        </div>
                        <div class="main swiper-slide" id="communication">
                            <div class="left-side">
                                <div class="main-wrapper">
                                    <h1 class="main-title">Communication</h1>
                                </div>
                                <div class="main-content">
                                    <div class="more-menu">
                                        Show More
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="-5" y1="12" x2="19" y2="12" />
                                            <line x1="15" y1="16" x2="19" y2="12" />
                                            <line x1="15" y1="8" x2="19" y2="12" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">

                                    <img class="bottle-bg" src="../assets/media/images/img-1.png" alt="">
                                    <!-- <img class="bottle-img" src="https://cdn.shopify.com/s/files/1/0689/1443/t/34/assets/Glacier_OK.png?v=7185877315400411030" /> -->
                                </div>
                            </div>
                        </div>
                        <div class="main swiper-slide" id="coral">
                            <div class="left-side">
                                <div class="main-wrapper">
                                    <h1 class="main-title">Coral</h1>
                                </div>
                                <div class="main-content">
                                    <div class="more-menu">
                                        Show More
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="-5" y1="12" x2="19" y2="12" />
                                            <line x1="15" y1="16" x2="19" y2="12" />
                                            <line x1="15" y1="8" x2="19" y2="12" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">
                                    <img class="bottle-bg" src="../assets/media/images/img-2.png" alt="">
                                    <!-- <img class="bottle-img" src="https://cdn.shopify.com/s/files/1/0689/1443/t/34/assets/Coral_OK.png?v=14596995446202437119" /> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-wrapper">
                    <div class="swiper-button swiper-prev-button">
                        <span>PREV</span>
                        <!-- <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg> -->
                    </div>
                    <div class="swiper-button swiper-next-button">
                        <!-- <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg> -->
                        <span>NEXT</span>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>


        <section class="index2-section py-4" id="About">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-10 col-sm-12">
                        <div class="index2-content">
                            <h1>About</h1>
                            <h5>LOPEFH HASUMTKA</h5>
                            <p>Hello, <br /> <br />
                                I Am Rupesh Basutkar,
                                Graduated From Art Schhool Mumbai- India                            
                            Calligrapher - Graphice Designer - Artist.</p>
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse m
                            </p>
                            <p>
                                lestie consequat, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper estie consequat, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../components/footer.php"; ?>
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-next-button",
                prevEl: ".swiper-prev-button"
            },
            effect: "fade",
            loop: "infinite",
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            }
        });

        // swiper.on('slideChange', function(sld) {
        //     document.body.setAttribute('data-sld', sld.realIndex);
        // })
    </script>
</body>

</html>