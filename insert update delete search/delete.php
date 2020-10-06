<?php

    include 'conn.php';
    $delete = $_GET['id'];

    $q = "delete from product where id = $delete";
    mysqli_query($conn,$q);
    
    header('location:display.php');
?>
