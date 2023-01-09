


<div class="container" style="padding-top: 50px">
    <div class="row">
        <?php
        echo "    
        <div class='col-6'>
            <img  src='/3lvl/public/img/books/{$data['imgName']}' class='img-thumbnail '  width='280' height='400' >
        </div>
         <div class='col-6'>
            <div class='nameOfBook'>
                <h3 class='font-monospace'>{$data['name']}</h3>
            </div>
            <div class='year'>Year: {$data['year']}</div>
            <div class='author'>Author: {$data['author_1']} {$data['author_2']} {$data['author_3']}</div>
            <p></p>
            <div class='bookDescription'>About: {$data['description']}</div>
            
        </div>
        "
        ?>
    </div>
    <p></p>
    <div class="row">
        <?php
        echo "
        <button id='bye' name='{$_GET['id']}' class='btn btn-success' style='width: 280px; margin-left: 12px'>Buy</button>
              "; ?>

    </div>
</div>

<script src="public/js/script.js"></script>
