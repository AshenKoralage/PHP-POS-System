<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/9/2019
 * Time: 10:01 AM
 */
?>

<?php
$cid=$_POST['cid'];
$oid=$_POST['oid'];
$date=$_POST['date'];
$details=$_POST['details'];

include 'db Connection.php';
if (!$connection) {
    mysqli_connect_error();
} else {
    $SQL = "UPDATE orders SET cid='$cid',date='$date',details='$details' WHERE oid='$oid'";
}
$result = mysqli_query($connection, $SQL);
if ($result) {
    echo "Successfully Updated";
} else {
    mysqli_error($connection);
    echo "Failed To Update";

}
?>
