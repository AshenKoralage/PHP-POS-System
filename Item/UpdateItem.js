$("#updateItem").click(function () {
    var itemUpdate = $("#ItemForm").serialize();
    $.ajax({
        url:"Item/UpdateItem.php",
        method:"POST",
        async:true,
        data:itemUpdate
    }).done(function (res) {
        alert(res)
    })
});