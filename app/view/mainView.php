
<div class="container">
    <div class="row">

        <?php

        foreach ($data[1] as $item) {
            echo " <div  class='col-3 d-flex align-items-center justify-content-center ' id='photo'>
                <a href='bookPage?id={$item['id']}' style='text-decoration:none'><button data-bs-toggle='tooltip' title='{$item['author_1']}'
                  class='btn' id='book' name='{$item['id']}'>
                    <img src='/3lvl/public/img/books/{$item['imgName']}' width='180' height='260' class=' img-thumbnail'
                    id='bookImg'>
                        <h1 class='text-dark '  id='booksName'>{$item['name']}</h1>
                        </button>
                        </a>
            </div>
            ";
        }
        echo $data[2];
        ?>
    </div>
</div>
<script src="public/js/script.js"></script>

