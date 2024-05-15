<?php
include("../config.php");
if( isset($_GET['id']) ){
 $id = $_GET['id'];
 $sql = "DELETE FROM bigdata WHERE id=$id";
 $query = mysqli_query($dbconnect, $sql);
 if( $query ){
 header('Location: list-data.php');
 } else {
 die("Failed to delete item");
 }
} else {
 die("Access Denied");
}
?>
