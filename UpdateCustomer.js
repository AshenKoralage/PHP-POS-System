$("#update").click(function () {
    var customerUpdate = $("#customerForm").serialize();
    $.ajax({
        url: "UpdateCustomer.php",
        method: "POST",
        async: true,
        data: customerUpdate
    }).done(function (res) {
        alert(res)
    })
});