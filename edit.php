<?php
include './model.php';
$obj =new Model();

if(isset($_GET['editid'])){ 
    $editid=$_GET['editid'];
    $myrecord->displayRecordById($editid);
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
    <form action="edit.php" method="post">
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
   </div>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
 
</html>

   