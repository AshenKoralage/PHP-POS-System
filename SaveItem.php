<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 6/30/2019
 * Time: 8:03 AM
 */
?>
<?php
$itemName=$_POST['itemName'];
$itemCode=$_POST['itemCode'];
$qty=$_POST['qty'];
$unitPrice=$_POST['unitPrice'];
$itemDetails=$_POST['itemDetails'];

include 'db Connection.php';

if(!$connection){
    mysqli_connect_error();
}else{
    $SQL="INSERT INTO item VALUES('$itemName','$itemCode','$qty','$unitPrice','$itemDetails')";
    $result=mysqli_query($connection,$SQL);
    if ($result){
        echo "Item Added";
    }else{
        echo "Item Not Added";
        mysqli_error($connection);
    }
}