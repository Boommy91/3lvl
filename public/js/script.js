
$("#bye").click(function () {
    alert('To bye this book you can contact us to this number 9379992');

    let id = $(this).attr('name');

    $.ajax({
            url: 'buy',
            type: "POST",
            data: {id},

        }
    )
});
