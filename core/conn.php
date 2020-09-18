<?php
$conn = mysqli_connect("localhost","root","","student_project");

if (!$conn){
    die("connection fail: ".mysqli_connect_error());
}