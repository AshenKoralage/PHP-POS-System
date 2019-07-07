$("#deleteItem").click(function () {
    var itemDelete = $("#ItemForm").serialize();
    $.ajax({
        url: "Item/DeleteItem.php",
        method: "POST",
        async: true,
        data: itemDelete
    }).done(function (rep) {
        alert(rep);
    })
});