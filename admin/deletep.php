<?php
include'inc/conn.php';
$id=(int)$_GET['id'];
$sql="delete from items where id='$id'";
$ret=mysqli_query($connection,$sql);
if($ret)
header("location:items.php");
?>