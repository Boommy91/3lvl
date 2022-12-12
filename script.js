$("#add").click(function () {
    let nameOfBook = $("#nameBook").val();
    let year = $("#yearBook").val();
    let authorFirst = $("#authorBook1").val();
    let authorSecond = $("#authorBook2").val();
    let authorThird = $("#authorBook3").val();
    let description = $("#someTxt").val();
    let imgName = $("#description").val();
    $.ajax({
        url: 'addBook.php',
        type: 'post',
        data: {nameOfBook, year, authorFirst, authorSecond, authorThird, description,imgName},
        success: function (data) {
            alert(data)
        }
    })
});