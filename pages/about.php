<!DOCTYPE html>
<html lang="en">
<?php include_once "../api/_config.php"; ?>

<head>

    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "../components/head.php";
    // $meta["title"] = "Rupesh Basutkar"; 
    ?>
    <meta property="og:title" content="<?php echo $meta["title"]; ?>">
    <meta property="og:image" content="">
    <title><?php echo $meta["title"]; ?></title>
    <meta property="og:description" content="">
    <!-- <meta property="twitter:title" content="Rupesh Basutkar"> -->
    <meta property="twitter:description" content="">

</head>

<body>
    <?php include_once "../components/nav-two.php"; ?>
    <main class="about-page">
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
</body>

</html>