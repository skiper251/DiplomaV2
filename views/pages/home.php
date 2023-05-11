<?php
use App\services\Page;

if (!$_SESSION["user"]){
    App\services\Router::redirect('/');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/asssets/css/bootstrap.min.css">
</head>
<body>
<main class="h-100">
    <div class="container-fluid text-center min-vh-100">
        <div class="row">
            <div class="col-1 border">
                <?php
                page::part('navbar');
                ?>
            </div>
            <div class="col border">
                <table class="table">
                    <?php
                    page::part('home_Page_Content');
                    ?>
                </table>
                <h1>Hollo Bootstrap</h1>
            </div>

        </div>

    </div>
    <?php
    page::part('footer');
    ?>
</main>
</body>
</html>