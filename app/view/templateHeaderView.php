<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book library</title>
    <link rel="stylesheet" href="/3lvl/public/css/bootstrap.min.css">
    <script src="/3lvl/public/js/jquery.js"></script>
    <script src="/3lvl/public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/3lvl/public/css/style.css">


</head>
<body>
<header class="header">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/3lvl">
            <img src="/3lvl/public/img/Paomedia-Small-N-Flat-Book.ico" width="30" height="30"
                 class="d-inline-block align-top"
                 alt="">
            Book library
        </a>
        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
            <div class="main-menu">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input id="search" type="text" placeholder="Find the book" class="form-control">
                            <script>
                                $("#search").bind("keypress", function (e) {
                                    if (e.keyCode == 13) {
                                        e.preventDefault();
                                        alert("Ще не зробив");
                                    }

                                })
                            </script>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <a class="navbar-brand" href="/3lvl/admin?page=1">
            <button class="btn font-monospace text-primary">Admin page</button>
        </a>
    </nav>

</header>


<?php include 'app/view/' . $content_view; ?>


</body>
</html>