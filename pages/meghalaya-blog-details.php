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
    <main class="blog-page page-padding">
        <section class="blog1-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog1-content">
                            <h4 class="blog-title">Blog </h4> <p>Traveller</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog2-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog2-content">
                            <h2>Meghalaya </h2>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog3-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog3-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam fugiat consequatur rerum reprehenderit quod at deleniti, expedita natus, delectus totam inventore, dolores quae itaque ex quam perferendis ullam eaque animi ut adipisci! Id iusto enim esse ipsam commodi asperiores magni eius quia voluptatem, optio libero ipsa nemo, omnis repellat odit voluptatibus, velit quaerat! Aperiam iste optio pariatur maiores. Obcaecati maxime possimus, eos sunt temporibus voluptas dolore cumque id perferendis accusantium distinctio sapiente est impedit, autem fugiat vel dolorum quo dignissimos?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../components/footer.php"; ?>
</body>

</html>