<!doctype html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Star Learners Pre-School</title>
<style>
    html, body {
    margin : 0px ;
    height : 100% ;
    width : 100% ;
   }


#header  {
 height : 80px ;
 text-align : center ;
 width : 100% ;
}

header
{
    background-color: #56A0E3;
    padding: 35px 35px 35px 35px;
    text-align: center;
    font-size: 28px;
}

.facebook {
  background: #157DC3;
  color: white;
}

.twitter {
  background: #2CA1E9;
  color: white;
}
.instagram {
  background: #BF397A;
  color: white;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.footer {
   position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:  #333;
   color: white;
   text-align: center;
   text-decoration: none;
}
#footer {
 height : 90px ;
 text-align : center ;
 width : 100% ;
 padding: 8px 10px 8px 10px;
 background-color :  #56A0E3;
 text-align: center;
 font-size: 12px;
 bottom: 0px;
 
}
/* unvisited link */
a:link {
  color: white;
  text-decoration: none;
}

/* visited link */
a:visited {
  color: white;
}

/* mouse over link */
a:hover {
   
    color: black;
}

/* selected link */
a:active {
  color: white;
}

.icon-bar {
  width: 60px;
  background-color: #555;
  float: right;
  position: fixed;
  top: 50%;
  text-align: center;
}

.icon-bar a {
  display: block;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;

}

.icon-bar a:hover {
  background-color: #000;
}
h3 {
    font-family: Arial, Helvetica, sans-serif;
}

.Flex-Container2
   {
       display: flex;
       background-color: #F9F8F8;
       font-size: 30px;
       text-align: left;
       align-items: center;
       justify-content: center;
       max-width: 1000px;
    width: 100%;
    display: flex;
    justify-content: space-around;
    margin: 10px auto;
   }

   .Flex-Container2 > div
   {
       margin: 10px;
       padding: 20px;
       font-size: 16px;
   }

    .button 
    {
    /* Align buttons with the text fields */
    padding-left: 60px; /* same size as the label elements */
    }button 
    {
    /* This extra margin represent roughly the same space as the space
    between the labels and their text fields */
    margin-left: 1em;
    background-color: #56A0E3;
    box-sizing: border-box; /* Match form field borders */
    border: 1px solid #56A0E3;
    color: white;
    font: 12px;
    } textarea 
    {
    vertical-align: top;
    height: 5em;
    }
    input,
    textarea 
    {
    /* To make sure that all text fields have the same font settings
    By default, textareas have a monospace font */
    font: 1em sans-serif; /* Uniform text field size */
    width: 300px;
    box-sizing: border-box; /* Match form field borders */
    border: 1px solid #999;
    }

    .Flex-Container3
    {
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .col
    {
        padding-top: 8px;
        padding-bottom: 8px;

    }

    .row
    {
        padding: 8px;
    }
    h4 {
      text-align: center;
    }

    .flex-container2 {
  display: flex;
  flex-wrap: wrap;
}

.flex-item-left {
  flex: 50%;
}

.flex-item-right {
  flex: 50%;
}

/* Responsive layout - makes a one column layout instead of a two-column layout */
@media (max-width: 800px) {
  .flex-item-right, .flex-item-left {
    flex: 100%;
  }
}
h1{
    text-align: center;
}

</style>
    
</head>
<body>
  <header>
      <a href="/team9-Web/home.php">
        <img src="https://logodix.com/logo/346977.png" alt="schoollogo" width=40px height=40px>
      </a>

      <a href ="/team9-Web/home.php"> STAR LEARNERS PRE-SCHOOL</a>
  </header>

  <div class="topnav" id="myTopnav">
      <a href="/team9-Web/home.php">HOME</a>
      <a href="/team9-Web/enrollment.php">ENROLLMENT</a>
      <a href="#teachers">TEACHERS</a>
      <a href="#parents">PARENTS</a>
      <a class="active" href="/team9-Web/contactus.php">CONTACT US</a>
      <a href="#search">SEARCH</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
              </a>
          <!-- <div class="search-container">
              <form action="/action_page.php">
                <input type="text" placeholder="Search..." name="search">
               
              </form> -->
  </div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<div id="main">
    <h1>CONTACT US</h1>
    <p></p>

<br>
<div id="2nd-Main">
    <div class="Flex-Container2">
    <br>
    <div>
        <img src = "https://cdn-icons.flaticon.com/png/512/3037/premium/3037344.png?token=exp=1644450446~hmac=507e67f610ec7fa782b8d5d87bc05561" alt=addressimage style="width: 50px">
        <p><br>
            <b>ADDRESS</b>
            <br>
            Vankanlahde 9,
            <br>
            Block C
            <br>
            13101,
            <br>
            Hameenlinna,
            <br>
            Finland
            <br><br><br>
            
        </p>
    </div>
    <div>
        <img src = "https://www.passionjewellers.com/wp-content/uploads/2018/09/phone-png-phone-png-file-1969.png" alt=phoneimage style="width: 50px">
        <p><br>
            <b>REGISTRAR</b>
            <br>
            046 333 1234
            <br><br>

            <b>HEADMASTER</b>
            <br>
            046 333 1235
            <br><br>

            <b>SCHOOL NURSE</b>
            <br>
            046 333 1236
            <br><br>
        </p>
    </div>
    <div>
        <img src = "https://cdn-icons.flaticon.com/png/512/542/premium/542638.png?token=exp=1644450505~hmac=60441df26dbcd009be7f8adbbd52b7ee" alt=emailimage style="width: 50px">
        <p><br>
          <b>REGISTRAR</b>
            <br>
            registrar@star.learners.fi
            <br><br>

            <b>HEADMASTER</b>
            <br>
            admin@star.learners.fi
            <br><br>

            <b>SCHOOL NURSE</b>
            <br>
            nurse@star.learners.fi
            <br><br>
        </p>
    </div>


</div>
</div>
<br>


<div class="Flex-Container3">
    <div class = "row">
        <div class = "col">
        <h4>Inquires</h4><br>
        </div>

        <div class = "row">    
<form action="/action_page.php" id="form1">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname">
    
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname" form="form1"><br><br>
    
    <label for="lname">Email Add:</label>
    <input type="text" id="email" name="email" form="form1">
    
    <label for="lname">Phone No.:</label>
    <input type="text" id="phonenumber" name="phonenumber" form="form1"><br><br>
    
    <label for="lname">Message:</label>
    <textarea id="msg" name="user_message"></textarea>
    
    <br><br>
    
    
    
    <div class="button">
    <button type="submit">SUBMIT</button>
    </div>
</div>
</div>
</div>

<div class="footer">
    <div id="footer"> <p></p>
        <footer><h3><a href="/team9-Web/subscriptionpage.php">NEWSLETTER SUBSCRIPTION</a></h3>
            <p>&copy; STAR LEARNERS PRE-SCHOOL, 2022</p>
        </footer>
    </div>
</div>
    <div class="icon-bar">
        <a href="#" class="facebook"><img src ="https://clipart.info/images/ccovers/1509135360facebook-logo-png-white.png" alt = "FBLOGO" width=30px height=30px></i></a> 
        <a href="#" class="twitter"><img src ="https://th.bing.com/th/id/R.12a13bf8fff8db22ee41790d641a3b7f?rik=9hBT88QXPPYpiA&riu=http%3a%2f%2fwww.ponto.co.za%2fsites%2fdefault%2ffiles%2ftwitter+(2).png&ehk=5401L13i6TLbORURGmJD660dOXh2OSFBlEQndYiNoyE%3d&risl=&pid=ImgRaw&r=0" alt = "TLOGO" width=30px height=30px></i></a>
        <a href="#" class="instagram"><img src ="https://th.bing.com/th/id/R.67109c570976affe32267459657b72c2?rik=g67vT2yjwpRPlw&pid=ImgRaw&r=0" alt = "IGLOGO" width=30px height=30px></i></a> 
    </div>
</body>
</html>