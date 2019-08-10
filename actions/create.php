<?php
include_once '../dbconfig.php';

if(isset($_POST['btn-save']))
{
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 
 
    $sql = "INSERT INTO contacts (name, phone, address, email) VALUES ('$name', '$phone', '$address', '$email')";
    if($connect->query($sql) === TRUE) {
      ?>
 <script type="text/javascript">
    alert('Data Recorded Successfully');
    window.location.href='../index.php';
    </script>
   <?php

    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();


}

?>
