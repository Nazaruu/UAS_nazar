<?php
require_once('connection.php');

$no = $_GET['no_billing'];
$delete_query = "DELETE FROM tbl_rentalps WHERE no_billing = '$no'";
$result = $con->query($delete_query);

if ($result) {
    header('location:view.php?pesan=delete');
} else {
    header('location:view.php?pesan=delete');
}
