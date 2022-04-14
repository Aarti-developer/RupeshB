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
    <?php include_once "../components/nav-two.php"; ?>
    <main class="contact-page page-padding">
        <section class="contact1-section ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-content text-center text-white">
                            <img src="../assets/media/images/Asset1.svg" alt="Logo">
                            <h2 class="contact-title">Contact</h2>
                            <a href="email:basutkarrupesh@gmail.com" target="_blank">basutkarrupesh@gmail.com</a>
                            <div class="number"><i class="fas fa-phone"></i> <a href="tel:+919029179842" target="_blank"> &nbsp;&nbsp;97688 13235</a></div>
                            <p>Available on Whatsapp</p>
                            <a href="#" target="_blank"><i class="whatsapp fab fa-whatsapp"></i></a>
                            <div class="contact1-links">
                                <h2>Follow On</h2>
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>