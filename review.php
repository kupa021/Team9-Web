<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.container-text {
  padding: 20px;
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<div class="container-text" style="background-color:white">

  <h2>WELCOME TO OUR REVIEW PAGE</h2>

        <p><strong>Tip:</strong> Please tell us what you think, any kind of feedback is highly appreciated.</p>
</div>

<div class="container my-2">

  <form name= "form1" method="post" action="reviewcreate.php">
        <div class="row">
      <div class="col-25">
        <label for="rating">Rate Us</label>
      </div>
      <div class="col-75">
        <select id="rating" name="rating">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Message</label>
      </div>
      <div class="col-75">
        <textarea id="statement" name="statement" placeholder="Please leave us a review.." style="height:200px"></textarea>
      </div>
    </div>
    <br>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
<?php
include 'footer.php';
?>
