
<?php
include 'create.php';
$id1 = $_GET["id"];
$sql = "DELETE FROM `product` WHERE `id`='$id1'";

if ($db->query($sql) === TRUE) {

} else {
echo "Error deleting record: " . $db->error;
}