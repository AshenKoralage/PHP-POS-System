$("#updateOrder").click(function () {
    var orderUpdate = $("#orderForm").serialize();
    $.ajax({
        url: "updateOrder.php",
        method: "POST",
        async: true,
        data: orderUpdate
    }).done(function (res) {
        alert(res)
    })
});