<?php
require_once "core/conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM students_info WHERE id = $id";
if (!mysqli_query($conn,$sql)){
    echo "Delete Fail: ";
}else{
    header("location:read.php");
}
