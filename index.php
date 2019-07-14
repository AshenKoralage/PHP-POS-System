<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 6/29/2019
 * Time: 3:08 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/js/bootstrap.js">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity=
    "sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
        .nav1.justify-content-end.nav-item h1 {
            text-align: left;
        }

        .search {
            border: 5px solid #005cbf;
            width: 350px;
            float: right;
        }

        .nav-item h1 {
            text-align: left;
        }

        .chart svg, .chart canvas {
            width: 100% !important
        }

        audio, canvas, progress, video {
            display: inline-block;
            vertical-align: baseline;
        }

        tr {
            transition: all .25s ease-in-out;
        }

        tr:hover {
            background-color: #EEE;
            cursor: pointer;
        }


    </style>
</head>
<body>
<!--get data using combobox-->
<?php
if (isset($_POST['search'])){
    $itemCode=mysqli_real_escape_string($connection,$_POST['itemCode']);
    $values="select * from item where itemCode='$itemCode'";
    $data=mysqli_query($connection,$values);

}
?>
<!--end get data using combobox-->
<!--customer table-->
<?php
include "db Connection.php"; ?>
<?php $SQl = "SELECT * FROM customer";
$resultset = mysqli_query($connection, $SQl);
?>
<!--item table-->
<?php
include "db Connection.php";
$SQLITEM = "SELECT * FROM item";
$resultsetItem = mysqli_query($connection, $SQLITEM);
?>
<!--item combo box-->
<?php
include "db Connection.php";
$sql = "SELECT * FROM item";
$resultset2 = mysqli_query($connection, $sql);
?>
<!--order table-->
<?php $OrderSQL="select * from orders";
$resultsetOrder=mysqli_query($connection,$OrderSQL);
?>
<!--combo box values-->
<?php
include 'db Connection.php';
$query = "select * from customer";
$result = mysqli_query($connection, $query);
?>

<ul class="nav1 justify-content-start">
    <li class="nav-item">
        <h1 style="float: left "><img src="images/Shopping-icons-09-512.png" border="50" height="50"
                                      style="background-color: white">POS System</h1>
    </li>
</ul>

<div class="row">
    <div class="col-2" style="background-color: #343a40">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"
             style="height: 550px;width: 100%">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
               aria-controls="v-pills-home" aria-selected="true" style="font-size: 15px;font-weight: normal">
                <i class="fas fa-home" style="font-size: 30px"></i> Home</a>
            <a class="nav-link " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
               aria-controls="v-pills-profile" aria-selected="false" style="font-size: 15px;font-weight: normal"><i
                        class="fas fa-user-check" style="font-size: 30px"></i> Manage Customer</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
               aria-controls="v-pills-messages" aria-selected="false" style="font-size: 15px;font-weight: normal"><i
                        class="fas fa-cart-plus" style="font-size: 30px"></i> Manage Items</a>
<!--            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"-->
<!--               aria-controls="v-pills-settings" aria-selected="false" style="font-size: 15px;font-weight: normal"><i-->
<!--                        class="fas fa-shopping-basket" style="font-size: 30px"></i> Manage Orders</a>-->

            <a class="nav-link" id="v-pills-place-tab" data-toggle="pill" href="#v-pills-place" role="tab"
               aria-controls="v-pills-place" aria-selected="false" style="font-size: 15px;font-weight: normal"> <i
                        class="fab fa-amazon-pay" style="font-size: 30px"></i> Place Orders</a>
        </div>
    </div>

    <div class="col-10">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row" style="margin-top: 50px">
                    <div class="col-7">
                        <div class="card" style="padding-left: 80px">
                            <div class="card-body">
                                <h5 class="card-title">Today</h5>
                                <p class="card-text">150 Customers </p>
                                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sales : Today</h5>
                                <p class="card-text"> RS:2500</p>
                                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card" style="padding-right: 50px;margin-left: 20px;">
                            <div class="card-body">
                                <h5 class="card-title">Orders</h5>
                                <p class="card-text">9 </p>
                                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Notifications</h5>
                                <p class="card-text" style="color: whitesmoke"> No new Notifications</p>
                                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="col-sm-4">
                    <div class="card" style="padding-right: 50px;margin: 200px;width:500px;height: 250px">
                        <div class="card-body">
                            <!--<h5 class="card-title">-->
                            <img src="images/chart-update-default.png" style="width: 500px;height: 250px" alt="">
                            <!--</h5>-->
                            <p class="card-text"></p>
                            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-profile" aria-labelledby="v-pills-profile-tab">
                <form style="margin-top: 20px" id="customerForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Customer Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="Cname" id="cname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" placeholder="email" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-group" style="width: 170px">
                        <label>Customer ID</label>
                        <input type="text" class="form-control" placeholder="C001" name="cid" id="id">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" placeholder="1234 Main St" name="address" id="address">
                    </div>
                    <div class="form-group">
                        <label for="tel">Telephone No</label>
                        <input type="tel" class="form-control" placeholder="011-1234567" name="tel" id="tel">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" name="zip" id="inputZip">
                        </div>
                    </div>


                    <br><br>
                    <div class="search">
                        <label><i class="fas fa-search"></i>Search Customer</label>
                        <input type="text" class="form-control" placeholder="Name/ID">
                    </div>
                    <br>
                </form>
                <button class="btn btn-primary" type="button" id="save">Add</button>
                <button type="button" class="btn btn-danger" id="delete">Delete</button>
                <button type="button" class="btn btn-success" id="update">Update</button>
                <table id="table" class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Address</th>
                        <th scope="col">Telephone No</th>
                        <th scope="col">City</th>
                        <th scope="col">Zip</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($rowdata = $resultset->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $rowdata['Cname'] ?></td>
                            <td><?php echo $rowdata['email'] ?></td>
                            <td><?php echo $rowdata['cid'] ?></td>
                            <td><?php echo $rowdata['address'] ?></td>
                            <td><?php echo $rowdata['tel'] ?></td>
                            <td><?php echo $rowdata['city'] ?></td>
                            <td><?php echo $rowdata['zip'] ?></td>
                        </tr>
                    <?php endwhile;; ?>
                    </tbody>
                </table>
                <canvas id="myChart" style="max-width: 500px;"></canvas>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <form id="ItemForm">
                    <div class="form-row">
                        <div class="col">
                            <label>Item Name</label>
                            <input type="text" class="form-control" placeholder="Item name" name="itemName">
                        </div>
                        <div class="col">
                            <label>Item ID</label>
                            <input type="text" class="form-control" placeholder="ID" name="itemCode">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label>QTY</label>
                            <input type="number" class="form-control" placeholder="qty" name="qty">
                        </div>
                        <div class="col">
                            <label>Unit Price</label>
                            <input type="number" class="form-control" placeholder="Price" name="unitPrice">
                        </div>

                    </div>
                    <div class="col" style="margin: 20px">
                        <label>Item Detail</label>
                        <input type="text" class="form-control" placeholder="Detail" name="itemDetails">
                    </div>
                </form>
                <button type="submit" class="btn btn-primary" id="saveItem">Save</button>
                <button type="button" class="btn btn-danger" id="deleteItem">Delete</button>
                <button type="button" class="btn btn-success" id="updateItem">Update</button>
                <br><br>
                <div class="search">
                    <label><i class="fas fa-search"></i>Search Item</label>
                    <input type="text" class="form-control" placeholder="Name/ID">
                </div>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item ID</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Item Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($rowdata = $resultsetItem->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $rowdata['itemName'] ?></td>
                            <td><?php echo $rowdata['itemCode'] ?></td>
                            <td><?php echo $rowdata['qty'] ?></td>
                            <td><?php echo $rowdata['unitPrice'] ?></td>
                            <td><?php echo $rowdata['itemDetails'] ?></td>
                        </tr>
                    <?php endwhile;; ?>

                    </tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="v-pills-place" role="tabpanel" aria-labelledby="v-pills-place-tab">
                <form>
                    <div class="row" style="background-color: #343a40;margin: 20px">
                        <div class="col">
                            <div style="color: white">Order ID: <label id="lblOrderID" style="color: white"></label>
                            </div>
                        </div>

                        <div class="col">
                            <div style="color: white">Order Date: <label id="lblOrderDate" style="color: white"></label>
                            </div>
                            <!--<input type="text" class="form-control" placeholder="Order Date" style="width: 250px;" id="txtdate">-->
                        </div>
                    </div>
                    <div class="row" style="background-color: #343a40;margin: 20px">
                        <div class="col">
                               <label>Item ID</label>
                            <select name="itemCode">
                                <?php
                                while ($results2=mysqli_fetch_row($resultset2)){
                                    echo "<tr>
                                <option>$results2[1]</option>
                                </tr>";
                                }
                                mysqli_close($connection);
                                ?>
                            </select>

                        </div>
<!--                        <div class="col">-->
<!--                            <div style="color: white">Item Name: <label id="lblItemName" style="color: white">-->
<!--                                </label>-->
<!--                            </div>-->
<!--                        </div>-->

                        <div class="col">
                            <div style="color: white">qty On hand: <label id="lblqtyonhand"
                                                                          style="color: white"></label>
                            </div>
                        </div>

                        <div class="col">
                            <div style="color: white">Unit Price: <label id="lblunitprice" style="color: white"></label>
                            </div>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="QTY" id="txtqty">
                        </div>

                    </div>

                    <div class="row" style="background-color: #343a40;margin: 20px">
                        <div class="col">
                            <lable>Customer ID</lable>
                            <select name="cid">
                                <?php
                                while ($rowdatas=mysqli_fetch_row($result)){
                                    echo "<tr>
                                <option>$rowdatas[2]</option>
                                </tr>";
                                }
                                mysqli_close($connection);
                                ?>
                            </select>
<!--                            <div class="dropdown">-->
<!--                                <select id="cmbSelectcustomer">-->
<!--                                    <option selected disabled hidden value="">Select Customer ID</option>-->
<!--                                </select>-->
<!--                            </div>-->
                        </div>
<!--                        <div class="col">-->
<!--                            <div style="color: white">Customer Name : <label id="lblCustomerName"-->
<!--                                                                             style="color: white"></label>-->
<!--                            </div>-->
<!--                        </div>-->
                        <button type="button" class="btn btn-success" id="btnadd">Proceed</button>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th class="text-center">Order ID</th>
                            <th class="text-center">Order Date</th>
                            <th class="text-center">Item ID</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">Unit Price</th>
                            <th class="text-right">Order Total</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </form>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <form id="orderForm">
                    <div class="form-row">

                        <div class="col">
                            <label>Select Customer ID</label>
                            <select name="custid" id="custid" onchange="addOID()">
                                <?php while ($row1 = mysqli_fetch_array($result)):; ?>
                                    <option value="<?php echo $row1[0]; ?>"><?php echo $row1[2]; ?></option>
                                <?php endwhile;; ?>
                            </select>
                        </div>
                        <div class="col">
                            <label>Customer ID</label>
                            <input type="text" class="form-control" placeholder="CID" name="cid">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label>Order ID</label>
                            <input type="text" class="form-control" placeholder="ID" name="oid">
                        </div>
                        <div class="col">
                            <label>Order Date</label>
                            <input type="date" class="form-control" placeholder="date" name="date">
                        </div>

                    </div>
                    <div class="col" style="margin: 20px">
                        <label>Order Detail</label>
                        <input type="text" class="form-control" placeholder="Detail" name="details">
                    </div>
                </form>
                <button type="button" class="btn btn-primary" id="saveOrder">Save</button>
                <button type="button" class="btn btn-danger" id="deleteOrder">Delete</button>
                <button type="button" class="btn btn-success" id="updateOrder">Update</button>
                <br><br>
                <div class="search">
                    <label><i class="fas fa-search"></i>Search order</label>
                    <input type="text" class="form-control" placeholder="Name/ID">
                </div>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Order Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($rowdata = $resultsetOrder->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $rowdata['cid'] ?></td>
                            <td><?php echo $rowdata['oid'] ?></td>
                            <td><?php echo $rowdata['date'] ?></td>
                            <td><?php echo $rowdata['details'] ?></td>
                        </tr>
                    <?php endwhile;; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
<footer class="bg-dark" style="height: 150px">
    <h5 style="color: white;text-align: center">
        Developed By CodexGeeks
    </h5>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="SaveCustomer.js"></script>
<script src="DeleteCustomer.js"></script>
<script src="UpdateCustomer.js"></script>
<script src="SaveItem.js"></script>
<script src="DeleteItem.js"></script>
<script src="saveOrder.js"></script>
<script src="deleteOrder.js"></script>
<script src="updateOrder.php"></script>
<script src="UpdateItem.js"></script>

</body>
</html>
