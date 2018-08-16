<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    tr,th,td {
        border: solid 1px;
    }

</style>
<body>

<?php

$db = mysqli_connect('localhost', 'root', '', 'product');

$id2 = $_GET["id"];
$sql1 = "SELECT * FROM `product` WHERE `id`='$id2'";

$result = mysqli_query($db, $sql1);

if (mysqli_num_rows($result) > 0) {
    while($userData = mysqli_fetch_assoc($result)) {?>
        <table>
        <tr>
            <th>Id</th>
            <th>Product NAME</th>
            <th>Product price</th>
            <th>Product description</th>
            <th>Product category</th>
            <th>Product date</th>
            <th>Product quantity</th>
        </tr>

        <tr>

            <td><?php echo $userData['id'] ?></td>
            <td><?php echo $userData['name'] ?></td>
            <td><?php echo $userData['price'] ?></td>
            <td><?php echo $userData['description'] ?></td>
            <td><?php echo $userData['category'] ?></td>
            <td><?php echo $userData['date'] ?></td>
            <td><?php echo $userData['quantity'] ?></td>


        </tr>
        </table>
 <?php }}?>

</body>
</html>