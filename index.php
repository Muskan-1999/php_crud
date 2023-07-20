<?php
include './model.php';
$obj =new Model();

if(isset($_POST['submit'])){ 
    $obj->insertRecord($_POST);
}

if(isset($_POST['update'])){ 
    $obj->updateRecord($_POST);
}

if(isset($_GET['deleteid'])){ 
    $delid=$_GET['deleteid'];
    $obj->deleteRecord($delid);
}

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
   <?php
   if(isset($_GET['msg']) AND $_GET['msg']=='ins'){
    echo '<div class="alert alert-success role="alert">
    Record Inserted Successfully.....
    </div>';
   }
    if(isset($_GET['msg']) AND $_GET['msg']=='ups'){
        echo '<div class="alert alert-success role="alert">
        Record Updated Successfully.....
        </div>';
    }
    if(isset($_GET['msg']) AND $_GET['msg']=='del'){
        echo '<div class="alert alert-success role="alert">
        Record Deleted Successfully.....
        </div>';


   }
?>

<?php
if(isset($_GET['editid'])){ 
    $editid=$_GET['editid'];
    $myrecord=$obj->displayRecordById($editid); 
    //print_r($myrecord);die;
    ?>

<form action="index.php" method="post">
        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" name="firstname" class="form-control" value=<?php echo $myrecord['firstname'];?> placeholder="Enter Your Firstname">
        </div>
        <div class="form-group">
            <label for="name">Last Name</label>
            <input type="text" name="lastname" class="form-control" value=<?php echo $myrecord['lastname'];?>  placeholder="Enter Your Lastname">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value=<?php echo $myrecord['email'];?> placeholder="Enter Your Email">
        </div>
        <div class="form-group">
            <input type="hidden" name="hid" value="<?php echo $myrecord['id'];?>" >
        <input type="submit" name="update" class="btn btn-primary" value="Update">
        </div>
  </form>
<?php
}else{
?>
  
  <form action="index.php" method="post">
        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" name="firstname" class="form-control" placeholder="Enter Your Firstname">
        </div>
        <div class="form-group">
            <label for="name">Last Name</label>
            <input type="text" name="lastname" class="form-control" placeholder="Enter Your Lastname">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
        </div>
        <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>

    </form>
<?php
  }
?>
<br>

    <h2 class="text-center text-info">DISPLAY RECORDS</h2><br>
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
            <a href="index.php?deleteid=<?php echo $value['id'];?>" class="btn btn-danger">Delete</a>
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

   

