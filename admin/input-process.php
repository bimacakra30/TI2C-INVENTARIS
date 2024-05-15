<?php
include("../config.php");

if (isset($_POST['input'])) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $gndr = $_POST['gender'];
    $relig = $_POST['religion'];
    $sch = $_POST['school'];

    $sql = "INSERT INTO bigdata (name, address, gender, religion, school)
VALUE ('$name', '$address', '$gndr', '$relig', '$sch')";
    $query = mysqli_query($dbconnect, $sql);

    if ($query) {

        header('Location: ../admin/list-data.php?status=success');
    } else {

        header('Location: ../admin/list-data.php?status=failed');
    }
} else {
    die("Access Denied...");
}
