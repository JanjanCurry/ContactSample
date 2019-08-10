<?php 
 
require_once '../dbconfig.php';
 
if($_POST) {
 
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 
    $id = $_POST['id'];
 
    $sql = "UPDATE contacts SET name = '$name', phone = '$phone', address = '$address', email = '$email' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
  ?>
 <script type="text/javascript">
    alert('Data Updated Successfully');
    window.location.href='../index.php';
    </script>
<?php
  } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
 
?>