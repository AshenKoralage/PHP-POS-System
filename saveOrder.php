<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/7/2019
 * Time: 7:40 AM
 */
?>
<?php
$cid=$_POST['cid'];
$oid=$_POST['oid'];
$date=$_POST['date'];
$details=$_POST['details'];

include 'db Connection.php';

if(!$connection){
    mysqli_connect_error();
}else{
    $SQL="INSERT INTO orders VALUES('$cid','$oid','$date','$details')";
    $result=mysqli_query($connection,$SQL);
    if ($result){
        echo "Order Added";
    }else{
        echo "Order Not Added";
        mysqli_error($connection);
    }
}
