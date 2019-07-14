$("#saveItem").click(function () {
    var itemSave = $("#ItemForm").serialize();
    $.ajax({
        url: "SaveItem.php",
        method: "POST",
        async: true,
        data: itemSave
    }).done(function (res) {
        alert(res)
    })
});