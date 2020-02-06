<?php
require_once "includes/header.php";
require_once "db/config.php";
require_once "classes/user.class.php";
$user = new Users($conn);



 ?>
<div class ="container">

  <h1>View Employees</h1>
  <br>
  <table  class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>epartment</th>
        <th>Training</th>
        <th>Hire Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $info = $user->view_emp();
      while($i = $info->fetch(PDO::FETCH_ASSOC)):
        ?>
      <tr>
        <td><?= $i['name']?></td>
        <td><?= $i['dept']?></td>
        <td><?= $i['train']?></td>
        <td><?= $i['hiredate']?></td>
      </tr>
    <?php endwhile; ?>
    </tbody>
  </table>
</div>



 <?php
 require_once "includes/header.php";



  ?>
