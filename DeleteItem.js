$("#deleteItem").click(function () {
    var itemDelete = $("#ItemForm").serialize();
    $.ajax({
        url: "DeleteItem.php",
        method: "POST",
        async: true,
        data: itemDelete
    }).done(function (rep) {
        alert(rep);
    })
});