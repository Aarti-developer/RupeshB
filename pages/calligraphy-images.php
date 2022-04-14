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
    <?php include_once "../components/nav.php"; ?>
    <main class="cimage-page page-padding">
        
        <section class="cal-imgsec">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="cal-img">

                            <div class="galleryItem">
                                <a href="../assets/media/images/img-1.png" data-fancybox="gallery" data-caption="Caption Images 1">
                                    <img src="../assets/media/images/img-1.png" alt="Image Gallery" />
                                </a>
                            </div>
                            <div class="galleryItem">
                                <a href="../assets/media/images/img-2.png" data-fancybox="gallery" data-caption="Caption Images 2">
                                    <img src="../assets/media/images/img-2.png" alt="Image Gallery" />
                                </a>
                            </div>
                            <div class="galleryItem">
                                <a href="../assets/media/images/r-1.png" data-fancybox="gallery" data-caption="Caption Images 3">
                                    <img src="../assets/media/images/r-1.png" alt="Image Gallery" />
                                </a>
                            </div>
                            <div class="galleryItem">
                                <a href="../assets/media/images/r-2.png" data-fancybox="gallery" data-caption="Caption Images 4">
                                    <img src="../assets/media/images/r-2.png" alt="Image Gallery" />
                                </a>
                            </div>
                            <div class="galleryItem">
                                <a href="../assets/media/images/r-3.png" data-fancybox="gallery" data-caption="Caption Images 5">
                                    <img src="../assets/media/images/r-3.png" alt="Image Gallery" />
                                </a>
                            </div>
                            <div class="galleryItem">
                                <a href="../assets/media/images/img-2.png" data-fancybox="gallery" data-caption="Caption Images 6">
                                    <img src="../assets/media/images/img-2.png" alt="Image Gallery" />
                                </a>
                            </div>

                            <div class="galleryItem">
                                <a href="../assets/media/images/img-1.png" data-fancybox="gallery" data-caption="Caption Images 1">
                                    <img src="../assets/media/images/img-1.png" alt="Image Gallery" />
                                </a>
                            </div>
                            <div class="galleryItem">
                                <a href="../assets/media/images/img-2.png" data-fancybox="gallery" data-caption="Caption Images 2">
                                    <img src="../assets/media/images/img-2.png" alt="Image Gallery" />
                                </a>
                            </div>
                            <div class="galleryItem">
                                <a href="../assets/media/images/r-1.png" data-fancybox="gallery" data-caption="Caption Images 3">
                                    <img src="../assets/media/images/r-1.png" alt="Image Gallery" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../components/footer.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
   <script>
        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "slideShow",
                "thumbs",
                "zoom",
                "fullScreen",
                "share",
                "close",
            ],
            loop: false,
            protect: true,
        });
   </script>
</body>

</html>