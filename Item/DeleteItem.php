<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 6/30/2019
 * Time: 8:35 AM
 */
?>
<?php
$itemCode=$_POST['itemCode'];
include "../db Connection.php";

if(!$connection){
    echo mysqli_connect_error();
}else{
    $SQL="DELETE FROM item WHERE itemCode='$itemCode'";
}
$result=mysqli_query($connection,$SQL);
if ($result){
    echo "Item Deleted ddsfsdsd";
}else{
    echo "Can't Delete Item";
    mysqli_error($connection);
}
?>

