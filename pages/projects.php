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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

</head>

<body>
    <style>
        .swiper {
            margin: 50px auto;
            width: auto;
            height: 230px;
            
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <?php include_once "../components/nav.php"; ?>
    <main class="projects-page page-padding">
        <!-- <section class="cimage-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="c-image-slider">
                            <h1 class="p-title py-3">Projects</h1>
                            <div class="cd-slider">
                                <ul>
                                    <li>
                                        <div class="image" style="background-image:url(../assets/media/images/img-1.png);"></div>
                                        <div class="content">
                                            <h2>Jackets Collection</h2>
                                            <a href="../pages/calligraphy-images.php">Calligraphy</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image" style="background-image:url(../assets/media/images/r-1.png);"></div>
                                        <div class="content">
                                            <h2>Accessories</h2>
                                            <a href="#">Graphics</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image" style="background-image:url(../assets/media/images/r-2.png);"></div>
                                        <div class="content">
                                            <h2>Winter Shoes</h2>
                                            <a href="#">Communication</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image" style="background-image:url(../assets/media/images/img-1.png);"></div>
                                        <div class="content">
                                            <h2>Winter Collection 2017</h2>
                                            <a href="#">Art Work</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image" style="background-image:url(../assets/media/images/img-2.png);"></div>
                                        <div class="content">
                                            <h2>Summer Collection</h2>
                                            <a href="#">View Gallery</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> -->
        <section class="project1-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="project1-content">
                            <div class="swiper mySwiper1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="project-slider-image">
                                            <img src="../assets/media/images/img-1.png" alt="">
                                            <h1><a href="../pages/calligraphy-images.php">Calligraphy</a> </h1>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-slider-image">
                                            <img src="../assets/media/images/img-2.png" alt="">
                                            <h1><a href="../pages/calligraphy-images.php">Calligraphy</a> </h1>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-slider-image">
                                            <img src="../assets/media/images/r-1.png" alt="">
                                            <h1><a href="../pages/calligraphy-images.php">Calligraphy</a> </h1>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-slider-image">
                                            <img src="../assets/media/images/r-2.png" alt="">
                                            <h1><a href="../pages/calligraphy-images.php">Calligraphy</a> </h1>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-slider-image">
                                            <img src="../assets/media/images/r-3.png" alt="">
                                            <h1><a href="../pages/calligraphy-images.php">Calligraphy</a> </h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swp_custom-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../components/footer.php"; ?>
    <!-- <script>
        (function() {

            function init(item) {
                var items = item.querySelectorAll('li'),
                    current = 0,
                    autoUpdate = true,
                    timeTrans = 4000;

                //create nav
                var nav = document.createElement('aside');
                nav.className = 'nav_arrows';

                //create button prev
                var prevbtn = document.createElement('button');
                prevbtn.className = 'prev';
                prevbtn.setAttribute('aria-label', 'Prev');

                //create button next
                var nextbtn = document.createElement('button');
                nextbtn.className = 'next';
                nextbtn.setAttribute('aria-label', 'Next');

                //create counter
                var counter = document.createElement('div');
                counter.className = 'counter';
                counter.innerHTML = "<span>1</span><span>" + items.length + "</span>";

                if (items.length > 1) {
                    nav.appendChild(prevbtn);
                    nav.appendChild(counter);
                    nav.appendChild(nextbtn);
                    item.appendChild(nav);
                }

                items[current].className = "current";
                if (items.length > 1) items[items.length - 1].className = "prev_slide";

                var navigate = function(dir) {
                    items[current].className = "";

                    if (dir === 'right') {
                        current = current < items.length - 1 ? current + 1 : 0;
                    } else {
                        current = current > 0 ? current - 1 : items.length - 1;
                    }

                    var nextCurrent = current < items.length - 1 ? current + 1 : 0,
                        prevCurrent = current > 0 ? current - 1 : items.length - 1;

                    items[current].className = "current";
                    items[prevCurrent].className = "prev_slide";
                    items[nextCurrent].className = "";

                    //update counter
                    counter.firstChild.textContent = current + 1;
                }

                item.addEventListener('mouseenter', function() {
                    autoUpdate = false;
                });

                item.addEventListener('mouseleave', function() {
                    autoUpdate = true;
                });

                setInterval(function() {
                    if (autoUpdate) navigate('right');
                }, timeTrans);

                prevbtn.addEventListener('click', function() {
                    navigate('left');
                });

                nextbtn.addEventListener('click', function() {
                    navigate('right');
                });

                //keyboard navigation
                document.addEventListener('keydown', function(ev) {
                    var keyCode = ev.keyCode || ev.which;
                    switch (keyCode) {
                        case 37:
                            navigate('left');
                            break;
                        case 39:
                            navigate('right');
                            break;
                    }
                });

                // swipe navigation
                // from http://stackoverflow.com/a/23230280
                item.addEventListener('touchstart', handleTouchStart, false);
                item.addEventListener('touchmove', handleTouchMove, false);
                var xDown = null;
                var yDown = null;

                function handleTouchStart(evt) {
                    xDown = evt.touches[0].clientX;
                    yDown = evt.touches[0].clientY;
                };

                function handleTouchMove(evt) {
                    if (!xDown || !yDown) {
                        return;
                    }

                    var xUp = evt.touches[0].clientX;
                    var yUp = evt.touches[0].clientY;

                    var xDiff = xDown - xUp;
                    var yDiff = yDown - yUp;

                    if (Math.abs(xDiff) > Math.abs(yDiff)) {
                        /*most significant*/
                        if (xDiff > 0) {
                            /* left swipe */
                            navigate('right');
                        } else {
                            navigate('left');
                        }
                    }
                    /* reset values */
                    xDown = null;
                    yDown = null;
                };


            }

            [].slice.call(document.querySelectorAll('.cd-slider')).forEach(function(item) {
                init(item);
            });

        })();
    </script> -->
    <script>
        var swiper = new Swiper(".mySwiper1", {
            grabCursor: true,
            effect: "creative",
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: [0, 0, -400],
                },
                next: {
                    translate: ["100%", 0, 0],
                },
            },
        });
    </script>
</body>

</html>