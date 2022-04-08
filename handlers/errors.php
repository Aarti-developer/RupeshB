<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title><?php echo "ERROR " . $_SERVER["REDIRECT_STATUS"]; ?></title>
    <style>
        .wrap{
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="wrap container d-flex flex-column justify-content-center align-items-center">
        <?php if ($_SERVER["REDIRECT_STATUS"] == 404) { ?>
            <img class="w-50" src="/assets/errors/404-error.svg" alt="">
        <?php } ?>
        <a class="btn btn-primary mt-5" href="/">Return Home</a>
    </div>