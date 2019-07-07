$("#deleteOrder").click(function () {
    var orderDelete =$("#orderForm").serialize();
    $.ajax({
        url:"DeleteOrder.php",
        method:"POST",
        async:true,
        data:orderDelete
    }).done(function (rep) {
        alert(rep);
    })
});