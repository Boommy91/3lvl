<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="./file/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="./file/jquery.js"></script>

</head>
<body>
<header class="header">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="./img/Paomedia-Small-N-Flat-Book.ico" width="30" height="30" class="d-inline-block align-top"
                 alt="">
            Book library
        </a>
        <a class="navbar-brand" href="index.php">
            <button class="btn font-monospace text-primary">Exit</button>
        </a>
    </nav>

</header>

<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <div class="book-list">
                <h3> Books list</h3>
                <table class="table table-striped">
                    <thead class="bg-gradient" style="background-color: lightseagreen; font-weight: bold">
                    <tr>
                        <td>Name of book</td>
                        <td>Authors</td>
                        <td>Year</td>
                        <td>Delete</td>
                        <td>Click</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $db = require __DIR__ . '/controller/connect.php';
                    $data = $db->query('SELECT * FROM city')->fetchAll(PDO::FETCH_ASSOC);
                    $total = count($data);
                    $perPage = 10;
                    $countOfPages = ceil($total / $perPage);

                    $page = $_GET['page'] ?? 1;
                    $page = (int)$page;


                    if ($page < 1) {
                        $page = 1;
                    } elseif ($page > $countOfPages) {
                        $page = $countOfPages;
                    }

                    $start = ($page - 1) * $perPage;
                    $end = $start + $perPage;

                    $limitData = $db->query("SELECT * FROM city LIMIT $start,$perPage ")->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($limitData as $datum) {
                        echo "
                        <tr>
                        <td>{$datum['Name']}</td>
                        <td>{$datum['District']}</td>
                        <td>{$datum['Population']}</td>
                        <td><a href='./controller/deleteBook.php?id={$datum['ID']}' class='del' >Delete</a></td>
                        <td>Click</td>
                    </tr>";
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                echo "<button class=' btn'> <a href='?page=1'>1</a></button>";

                for ($i = $page - 1; $i <= $page + 3; $i++) {
                    if ($i > 1) {
                        echo "<button class=' btn'> <a href='?page={$i}'>$i</a></button>";
                    }
                }
                echo "<button class=' btn'> <a href='?page={$countOfPages}'>$countOfPages</a></button>";

                ?>
            </div>


        </div>

        <div id="add-book" class="col-lg-5">
            <div class="container">
                <h3> Add new book</h3>
                <form method="post">
                    <div class="row">
                        <div id="left-side" class="col-lg-8 ">
                            <input type="text" id="nameBook" class="input-group-text" placeholder="name of the book"/>
                            <p></p>
                            <input type="text" id="yearBook" class="input-group-text" placeholder="year"/>
                            <p></p>
                            <input type="file" id="imgBook" name="load picture" id="bookImg">
                            <p></p>
                        </div>


                        <div id="right-side" class="col-lg-4">
                            <input type="text" id="authorBook1" class="input-group-text" placeholder="author 1"/>
                            <p></p>
                            <input type="text" id="authorBook2" class="input-group-text" placeholder="author 2"/>
                            <p></p>
                            <input type="text" id="authorBook3" class="input-group-text" placeholder="author 3"/>
                            <p></p>
                            <textarea id="description" class='input-group-text' cols="22" rows="5"></textarea>
                            <p></p>

                        </div>
                        <div class="container">
                            <input type="button" class="btn btn-success" id="addButton" value="add">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
