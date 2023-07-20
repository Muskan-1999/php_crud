<?php
include './model.php';
$obj =new Model();

?>

<!Doctype html>
<html>
    <head>
        <title>CRUD OPERATION IN PHP USING OOPS</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body><br>
   <h2 class="text-center text-info">CRUD OPERATION IN PHP USING OOPS</h2><br>
   <div class="container">
   <table class="table table-bordered">
    <tr class="bg-primary text-center"> 
        <th>S.no</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th> Email</th>
        <th>Action</th>
    </tr>
    <?php
    $data=$obj->displayRecord();
    $sno=1;
    foreach($data as $value){
   ?>  
    <tr>
        <td><?php echo $sno++ ;?></td>
        <td><?php echo $value['firstname']; ?></td>
        <td><?php echo $value['lastname']; ?></td>
        <td><?php echo $value['email']; ?></td>
        <td>
            <a href="index.php?editid=<?php echo $value['id'];?>" class="btn btn-success">Edit</a>
            <a href="list.php?deleteid=<?php echo $value['id'];?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
  <?php 
  }
  ?>
      
   </table>
   </div>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
 
</html>

   

