<?php
function persons()
 {
$emps = mysqli_query($conn,"SELECT * FROM employees") or die(mysqli_error()); 
WHILE($emp = mysqli_fetch_array($emps)){
$id = $emp['emp_id'];
$firstname = $emp['first_name'];
$lastname = $emp['last_name'];
echo "<option value=\"$id\">$firstname $lastname</option>";
}
}
?>	