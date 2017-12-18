$(".delete").click(function () {
    var id = $(this).attr('value');
    if (confirm('Are you sure to remove this Post ?')) {
        $.ajax({
            url: '/posts/delete/' + id,
            type: 'GET',
            data: {id: id},
            error: function () {
                alert('Something is wrong');
            },
            success: function (data) {
                alert("Record removed successfully");
                window.location.reload();
            }
        });
    }
});
$(".deleteView").click(function () {
    var id = $(this).attr('value');
    if (confirm('Are you sure to remove this Post ?')) {
        $.ajax({
            url: '/forms/destroy/' + id,
            type: 'GET',
            data: {id: id},
            error: function () {
                alert('Something is wrong');
            },
            success: function (data) {
                alert("Record removed successfully");
                window.location.reload();
            }
        });
    }
});


