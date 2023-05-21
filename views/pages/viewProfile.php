<?php
use App\services\Page;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/asssets/css/bootstrap.min.css">
</head>
<body>
<main class="h-100">
    <div class="container-fluid text-center min-vh-100">
        <div class="row">
            <div class="col-1 border w-auto">
                <?php
                page::part('navbar');
                ?>
            </div>
            <div class="col border">
                <?php
                page::part('viewProfile_Page_Content');
                ?>
            </div>
        </div>
    </div>
    <?php
    page::part('footer');
    ?>
</main>
</body>
</html>