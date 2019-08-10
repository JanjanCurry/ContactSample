<?php 
 
require_once 'dbconfig.php';
 require_once "header.php";

if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM contacts WHERE id = {$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
 
    $connect->close();
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Remove Contact</title>
</head>
<body>
 
<h3>Do you really want to remove ?</h3>
<form action="actions/delete.php" method="post">
 
 <table class='table table-bordered'>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" placeholder="Name" value="<?php echo $data['name'] ?>" /></td>
            </tr>     
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" placeholder="Phone" value="<?php echo $data['phone'] ?>" /></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address" placeholder="Address" value="<?php echo $data['address'] ?>" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="Email" value="<?php echo $data['email'] ?>" /></td>
            </tr>
       <tr><td>
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
    <button type="submit" class='btn btn-success'>Remove Contact</button>
    
    <a href="index.php"><button type="button" class='btn btn-primary'>Back</button></a>
    </td>
</tr>
</table>
</form>
 
</body>
</html>
 
<?php
}
?>