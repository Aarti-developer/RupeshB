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
    <main class="witness-page">
        <section class="witness-section">
            <div class="witness-images">
                <div class="witness-img_items-1"></div>
                <div class="witness-img_items-2"></div>
                <div class="witness-img_items-3"></div>
                <!-- <img src="../assets/media/images/r-1.png" alt="Nature images"> -->
                <!-- <img src="../assets/media/images/r-2.png" alt="Nature images"> -->
                <!-- <img src="../assets/media/images/r-3.png" alt="Nature images"> -->
            </div>
        </section>
    </main>
    <?php include_once "../components/footer.php"; ?>
</body>

</html>