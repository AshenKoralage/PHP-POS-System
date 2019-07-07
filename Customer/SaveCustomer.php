<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 6/29/2019
 * Time: 5:30 PM
 */
?>
<?php
$Cname=$_POST['Cname'];
$email=$_POST['email'];
$cid=$_POST['cid'];
$address=$_POST['address'];
$tel=$_POST['tel'];
$city=$_POST['city'];
$zip=$_POST['zip'];

include '../db Connection.php';
if(!$connection){
    echo mysqli_connect_error();
}else{
    $SQL="INSERT INTO customer VALUES('$Cname','$email','$cid','$address','$tel','$city','$zip')";
    $result=mysqli_query($connection,$SQL);
    if($result){
        echo "Customer Added";
    }else{
        echo "Customer not added";
        mysqli_error($connection);
    }
}
