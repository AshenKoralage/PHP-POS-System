<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 6/29/2019
 * Time: 6:07 PM
 */
?>
<?php
$cid = $_POST['cid'];
include "db Connection.php";

if (!$connection) {
    echo mysqli_connect_error();
} else {
    $SQL = "DELETE FROM customer WHERE cid='$cid'";
}
$result = mysqli_query($connection, $SQL);
if ($result) {
        echo "Customer Deleted jggh";
} else {
    echo "Can't Delete Customer";
    mysqli_error($connection);
}
?>
