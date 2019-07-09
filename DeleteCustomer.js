$("#delete").click(function () {
    var customerDelete =$("#customerForm").serialize();
    $.ajax({
        url:"DeleteCustomer.php",
        method:"POST",
        async:true,
        data:customerDelete
    }).done(function (rep) {
        alert(rep);
    })
});