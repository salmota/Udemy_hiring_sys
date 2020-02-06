<?php
require_once "db/config.php";
require_once "classes/user.class.php";

$user = new Users($conn);


if(isset($_POST['addEmp'])){
  $name = $_POST['name'];
  $dept = $_POST['dept'];
  $train = $_POST['train'];
  $hiredate = $_POST['hiredate'];

 $user->add_emp($name,$dept,$train,$hiredate);

}



 ?>
