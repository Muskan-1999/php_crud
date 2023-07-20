<?php
class Model{

    private $servername='localhost';
    private $username='root';
    private $password='';
    private $dbname='crud_oops';
    private $conn;


    function __construct(){
        $this->conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        if($this->conn->connect_error){
            echo 'Connection Failed';
        }else{
          return $this->conn;
        } 
        
     }

     public function insertRecord($post){
    $firstname=$post['firstname'];
    $lastname=$post['lastname'];
    $email=$post['email'];
    $sql="INSERT INTO users(firstname,lastname,email)VALUES('$firstname',' $lastname','$email')" ;
    $result=$this->conn->query($sql);
    if($result){
      header('location:index.php?msg=ins');
    }else{
        echo "Error" .$sql."<br>".$this->conn->error;
    }
     }

     public function updateRecord($post){
      $firstname=$post['firstname'];
      $lastname=$post['lastname'];
      $email=$post['email'];
      $editid=$post['hid'];
      
      $sql="UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email' where id='$editid'" ;
      $result=$this->conn->query($sql);
      if($result){
        header('location:index.php?msg=ups');
      }else{
          echo "Error" .$sql."<br>".$this->conn->error;
      }
       }
    public function deleteRecord($delid){
      $sql="DELETE FROM users WHERE id='$delid'";
      $result=$this->conn->query($sql);
      if($result){
        header('location:index.php?msg=del');
      }else{
          echo "Error" .$sql."<br>".$this->conn->error;
      }
    }

    public function displayRecord(){
    $sql="SELECT * FROM users" ;
    $result=$this->conn->query($sql);
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      $data[]=$row;
    }
    return $data;
  }
}

public function displayRecordById($editid){
  $sql="SELECT * FROM users WHERE id='$editid'";
  $result=$this->conn->query($sql);
  if($result->num_rows==1){
    $row=$result->fetch_assoc();
    return $row;
  }
}
}

//$obj=new Model();

?>