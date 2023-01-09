<h1 class="text-center">Admin page</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <div class="book-list">
                <h3> Books list</h3>
                <table class="table table-striped">
                    <thead class="bg-gradient" style="background-color: lightseagreen; font-weight: bold">
                    <tr>
                        <td>Name of book</td>
                        <td>Year</td>
                        <td>Authors</td>
                        <td>Delete</td>
                        <td>Click</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php


                    foreach ($data[1] as $colData) {
                        echo "
                        <tr>
                        <td>{$colData['name']}</td>
                        <td>{$colData['year']}</td>
                        <td>{$colData['author_1']} {$colData['author_2']} {$colData['author_3']}</td>
                        <td><a href='./deleteBook?id={$colData['id']}&page={$_GET['page']}' class='del' >Delete</a></td>
                        <td>Click</td>
                        </tr>";
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                echo $data[2];
                ?>
            </div>


        </div>

        <div id="add-book" class="col-lg-5">
            <div class="container">
                <h3> Add new book</h3>
                <form method="post" id="image-upload-form"
                      action="addBook?page=<?php echo $_GET['page'] ?>"
                      enctype="multipart/form-data">
                    <div class="row">
                        <div id="left-side" class="col-lg-8 ">
                            <input type="text" name="name" class="input-group-text" placeholder="name of the book"/>
                            <p></p>
                            <input type="text" name="year" class="input-group-text" placeholder="year"/>
                            <p></p>
                            <input type="file" name="img" id="bookImg">
                            <p></p>
                        </div>
                        <div id="right-side" class="col-lg-4">
                            <input type="text" name="authorBook1" class="input-group-text" placeholder="author 1"/>
                            <p></p>
                            <input type="text" name="authorBook2" class="input-group-text" placeholder="author 2"/>
                            <p></p>
                            <input type="text" name="authorBook3" class="input-group-text" placeholder="author 3"/>
                            <p></p>
                            <textarea name="description" class='input-group-text' cols="22" rows="5"></textarea>
                            <p></p>
                        </div>
                        <div class="container">
                            <input type="submit" value="add" class="btn btn-success">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
