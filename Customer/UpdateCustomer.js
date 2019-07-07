$("#update").click(function () {
    var customerUpdate = $("#customerForm").serialize();
    $.ajax({
        url: "Customer/UpdateItem.php",
        method: "POST",
        async: true,
        data: customerUpdate
    }).done(function (res) {
        alert(res)
    })
});