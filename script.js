$("#addButton").click(function () {
    let nameOfBook = $("#nameBook").val();
    let year = $("#yearBook").val();
    let authorFirst = $("#authorBook1").val();
    let authorSecond = $("#authorBook2").val();
    let authorThird = $("#authorBook3").val();
    let description = $("#description").val();
    let img = $("#imgBook").val();

    $.ajax({
        url: 'controller/addBook.php',
        type: 'post',
        data: {nameOfBook, year, authorFirst, authorSecond, authorThird, description, img},
        success: function (data) {
            if (data === 'ok') {
                alert('Book add success!!!');
            }
        }
    })

});

