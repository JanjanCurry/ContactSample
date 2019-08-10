<?php require_once 'dbconfig.php'; 
      require_once "header.php";

?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
 
    <style type="text/css">
        .manageMember {
            width: 50%;
            margin: auto;
        }
 
        table {
            width: 100%;
            margin-top: 20px;
        }
 
    </style>
 
</head>
<body>
 
<div>
    <br>
    <a href="add.php"><button type="button" class="btn btn-primary">Add Contact</button></a>
    <table class="table table-bordered" border="1" cellspacing="0" cellpadding="0" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Address</th>
                <th></th>
            </tr>
        </thead>
    <tbody>
            <?php
            $sql = "SELECT * FROM contacts";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['phone']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['email']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='button' class='btn btn-success'></i>Edit</button></a>
                            <a href='delete.php?id=".$row['id']."' class='btn btn-danger' name='id'>Delete</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
 
</body>
</html>