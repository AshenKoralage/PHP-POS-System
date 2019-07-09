$("#save").click(function () {
    var customerAdd=$("#customerForm").serialize();
    $.ajax({
        url:"SaveCustomer.php",
        method:"POST",
        async:true,
        data:customerAdd
    }).done(function (res) {
        alert(res)
    })
});