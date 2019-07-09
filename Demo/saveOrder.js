$("#saveOrder").click(function () {
    var orderSave = $("#orderForm").serialize();
    $.ajax({
        url: "saveOrder.php",
        method: "POST",
        async: true,
        data: orderSave
    }).done(function (res) {
        alert(res)
    })
});