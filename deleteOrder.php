<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/7/2019
 * Time: 12:39 PM
 */
?>
<?php
$oid=$_POST['oid'];
include "db Connection.php";

if(!$connection){
    echo mysqli_connect_error();
}else{
    $SQL="DELETE FROM orders WHERE oid='$oid'";
}
$result=mysqli_query($connection,$SQL);
if ($result){
    echo "Order Deleted";
}else{
    echo "Can't Delete Order";
    mysqli_error($connection);
}
?>


