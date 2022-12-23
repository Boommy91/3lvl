$(document).ready(function (e) {
    $("#image-upload-form").on('submit', (function (e) {
        e.preventDefault();

        $.ajax({
            url: "controller/addBook.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data === 'ok') {
                    alert('You success add book')
                } else {
                    alert('You miss something')
                }
            },
            error: function (data) {
                console.log("error");
                console.log(data);
            }
        });
    }));
});


$(".del").click(function () {
    console.log($(".del").attr('id'));
});


