<?php
require_once "includes/header.php";
require_once "db/config.php";
require_once "process.php";

?>

<div class="container">
  <h1>Ad new Employee</h1>
  <br>
  <form action="process.php" method="post">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input class="form-control"type="text" name="name">
                </div>

                <div class="form-group">
                  <label for="dept">Department:</label>
                  <select class="form-control" name="dept">
                     <option value="warhouse">warhouse</option>
                     <option value="Sales">Sales</option>
                     <option value="hr">Human resources</option>
                  </select>
                </div>

                <div class="form-group">
                  <input type="radio" value="Needs Training" name="train">Needs Training
                  <input type="radio" value="trained" name="train">Trained
                </div>

                <div class="form-group">
                  <label for="hiredate">Hire Date:</label>
                  <input class="form-control" type="date" name="hiredate">
                </div>
                <button class="btn btn-primary" name="addEmp">Add New Hire</button>
              </form>
<?php
require_once "includes/footer.php";
 ?>
