<?php
require_once "header.php";
?>

<div class="container" style="width:60%">

  <div>
  <center> <h3> Fill Up This Form </h3></center>
  </div>
  <form action="actions/create.php" method='post' >
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Phone</td>
            <td><input type='text' name='phone' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Address</td>
            <td><input type='text' name='address' class='form-control' required></td>
        </tr>
		
        <tr>
            <td>Email</td>
            <td><input type='text' name='email' class='form-control' required></td>
        </tr>
		
		
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
      <span class="glyphicon glyphicon-plus"></span> Create New Record
  
   </button>  
            
            </td>
        </tr>
 
    </table>
</form>
     

</div>

