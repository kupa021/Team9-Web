<?php
include "header.php";
?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

form {
  border: 3px solid #f1f1f1;
  font-family: Arial;
}

.container {
  padding: 20px;
  background-color: #f1f1f1;
}

input[type=text], input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=checkbox] {
  margin-top: 16px;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
      
</style>
<body>

<form method="post" action="teachercreate.php">
  <div class="container">
    <h2>Teacher Sign up</h2>
    <p>Please sign up to access time table, calender and announcements.</p>
  </div>

  <div class="container" style="background-color:white">

    <input type="text" placeholder="Teacher Id" name="teacher_id" required>
    <input type="text" placeholder="User Name" name="user_name" required>
    <input type="text" placeholder="Password" name="password_id" required>
    <input type="text" placeholder="First Name" name="first_name" required>
    <input type="text" placeholder="Last Name" name="last_name" required>
    
    
  </div>

  <div class="container">
    <input type="submit" value="Sign up">
  </div>
</form>

</body>
</html>












<?php
include "footer.php";
?>