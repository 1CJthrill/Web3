<?php

$Owner_name = $_POST['Owner_name'];
$Vehicle_name = $_POST['Vehicle_name'];
$Vehicle_number = $_POST['Vehicle_number'];
$Entry_date = $_POST['Entry_date'];
$Exit_date = $_POST['Exit_date'];
    $conn = Mysqli_connect("localhost", "root", "", "parking_project") or die("connection failed");
    $sql = "INSERT INTO vehicle_info(Owner_name, Vehicle_name, Vehicle_number, Exit_date, Entry_date) VALUES()";
    $result = mysqli_query($conn, $sql) or die("query Failed");
  ?>
  