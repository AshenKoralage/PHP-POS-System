$("#saveItem").click(function () {
    var itemSave = $("#ItemForm").serialize();
    $.ajax({
        url: "Item/SaveItem.php",
        method: "POST",
        async: true,
        data: itemSave
    }).done(function (res) {
        alert(res)
    })
});