<?php 
 
require_once '../dbconfig.php';
 
if($_POST) {
    $id = $_POST['id'];
 
    $sql = "DELETE FROM contacts WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
  ?>

 <script type="text/javascript">
    alert('Data Deleted Successfully');
    window.location.href='../index.php';
    </script>
<?php  } else {
        echo "Error updating record : " . $connect->error;
    }
 
    $connect->close();
}
 
?>