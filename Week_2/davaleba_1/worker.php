<style>
    table {
        padding: 5px;
        margin: 50px
        }
</style>

<?php

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$position = $_GET['position'];
$salary = $_GET['salary'];
$tax = $_GET['tax'];
//$finsalary = $_GET['lname'];

?>
<table border='1'>
<tr><td>FirstName</td><td>LastName</td><td>Position</td><td>Salary</td><td>Income</td></tr>
<tr><td><?=$fname?></td><td><?=$lname?></td><td><?=$position?></td><td><?=$salary?></td><td><?=$tax?></td></tr>
  