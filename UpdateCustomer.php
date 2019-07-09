<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 6/29/2019
 * Time: 6:20 PM
 */
?>
<?php
$name = $_POST['Cname'];
$email = $_POST['email'];
$cid = $_POST['cid'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$city = $_POST['city'];
$zip = $_POST['zip'];

include 'db Connection.php';
if (!$connection) {
    mysqli_connect_error();
} else {
    $SQL = "UPDATE customer SET Cname='$name',email='$email',address='$address',tel='$tel',city='$city',zip='$zip' WHERE cid='$cid'";
}
$result = mysqli_query($connection, $SQL);
if ($result) {
    echo "Successfully Updated";
} else {
    mysqli_error($connection);
    echo "Failed To Update";

}
?>
