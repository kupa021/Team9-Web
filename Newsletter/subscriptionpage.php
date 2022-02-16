<?php
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.container {
  padding: 20px;
  background-color: #f1f1f1;
  text-align: center;
}
.new {
text-align: center;
}
h2{
text-align: center;
}

img {
        max-width: 97%;
        height: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
        }  

</style>
</head>
<body>

<div class="container" style="background-color:white">

  <h2>SUBSCRIPTION PAGE</h2>

        <p>Thank you for using our subscription page.</p>
        <p><strong>Tip:</strong> Subscribe or Unsubscribe to our Newsletter using the link below.</p>
</div>
          
<div class = "new">

        <img src="https://cdn.pixabay.com/photo/2017/08/20/09/09/continents-2660912_960_720.jpg" alt="Subscription">
     
        <a href='https://www.google.com/'><button class="button button1">Subscribe</button></a>
        <a href='https://www.google.com/'><button class="button button2">Unsubcribe</button></a>

        <script>

<script src="jsdate.js"></script>

<h4>Current Date and Time<h4>

<button onclick = "this.innerHTML = Date()">Date and Time </button>

</script>

      </div>
<br>



</body>
</html>

<?php
include "footer.php";
?>



