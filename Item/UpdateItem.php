<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 6/30/2019
 * Time: 8:54 AM
 */
?>
<?php
$itemName=$_POST['itemName'];
$itemCode=$_POST['itemCode'];
$qty=$_POST['qty'];
$unitPrice=$_POST['unitPrice'];
$itemDetails=$_POST['itemDetails'];

include '../db Connection.php';

if(!$connection){
    mysqli_connect_error();
}else{
    $SQL="UPDATE item SET itemName='$itemName',qty='$qty',unitPrice='$unitPrice',itemDetails='$itemDetails' WHERE itemCode='$itemCode'";
    $result=mysqli_query($connection,$SQL);
    if ($result){
        echo "Item Updated";
    }else{
        echo "Item Not Update";
        mysqli_error($connection);
    }
}
