<?php

$conn = new mysqli('localhost', 'root', '', 'arewa_cloud_db');

$sql = "";

if(mysqli_query($conn, $sql)){
    echo "Table created successfully";
}