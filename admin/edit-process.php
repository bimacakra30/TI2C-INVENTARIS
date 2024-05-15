<?php
include("../config.php");

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gndr = $_POST['gender'];
    $reli = $_POST['religion'];
    $school = $_POST['school'];

    $sql = "UPDATE bigdata SET name='$name', address='$address', gender='$gndr',
religion='$reli', school='$school' WHERE id=$id";
    $query = mysqli_query($dbconnect, $sql);

    if ($query) {

        header('Location: ../admin/list-data.php');
    } else {

        die("Failed to save ");
    }
} else {
    die("Access Denied");
}
