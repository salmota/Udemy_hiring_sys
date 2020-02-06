<?php

class Users{
  private $db;
  function  __construct($conn){
    $this->db = $conn;
  }

  public function add_emp($name,$dept,$train,$hiredate)
{
  $sql = "Insert INTO users (name, dept, train, hiredate) VALUES (:name, :dept, :train, :hiredate)";
  $stmt = $this->db->prepare($sql);
  $stmt->execute([':name' => $name,':dept'=> $dept,':train' => $train,':hiredate'=> $hiredate]);
  header("Location: index.php");
}

public function view_emp()
{
$sql = "SELECT * FROM users";
$stmt = $this->db->prepare($sql);
return $stmt;
}



}



 ?>
