<?php
$db = mysqli_connect('localhost', 'root', '', 'product');
if (isset($_POST["submit"])) {
    $name = mysqli_escape_string($db, trim($_POST['nam']));
    $price = mysqli_escape_string($db, trim($_POST['pric']));
    $description = mysqli_escape_string($db, trim($_POST['descriptio']));
    $category = mysqli_escape_string($db, trim($_POST['categor']));
    $date = mysqli_escape_string($db, trim($_POST['dat']));
    $quantity = mysqli_escape_string($db, trim($_POST['quantit']));
    if (!empty($name) && !empty($price) && !empty($description)
        && !empty($category) && !empty($date) && !empty($quantity)) {
        $query = "INSERT INTO `user`(name,price,description,category,date,quantity)VALUES('$name','$price','$description','$category','$date','$quantity')";
        if (mysqli_query($db, $query)) {
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }

    }
}
$query1 = "SELECT *  FROM `product`";

$result1 = mysqli_query($db, $query1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>Product NAME</th>
        <th>Product price</th>
        <th>Product description</th>
        <th>Product category</th>
        <th>Product date</th>
        <th>Product quantity</th>
        <th>Actions</th>
    </tr>
    <?php
    foreach ($result1 as $userData):
        ?>
        <tr>

            <td><?php echo $userData['id'] ?></td>
            <td><?php echo $userData['name'] ?></td>
            <td><?php echo $userData['price'] ?></td>
            <td><?php echo $userData['description'] ?></td>
            <td><?php echo $userData['category'] ?></td>
            <td><?php echo $userData['date'] ?></td>
            <td><?php echo $userData['quantity'] ?></td>
            <td><a href="show.php?id=<?php echo $userData['id'] ?>">Show</a>
                <a href=".php?delete=1&id=<?php echo $userData['id'] ?>"> Update</a>
                <a href="delete.php?delete=1&id=<?php echo $userData['id'] ?>"> Delete</a></td>

        </tr>
    <?php endforeach; ?>
</table>


</body>
</html>