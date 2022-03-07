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

        body {
        margin : 0px ;

        }

        h1 {
        text-align: center;
        padding: 2px;
        }
        h4 {
        text-align: center;
        padding: 2px;
        background-color: #F0F0F0;
        }
        h2 {
        text-align: center;
        padding: 2px;
        background-color: #F0F0F0;
        }
        /* Create two columns that floats next to each other */
        .column {
        float: left;
        padding: 40px;
        
        }

        /* Left and right column */
        .column.side {
        width: 25%;
        
        }

        /* Middle column */
        .column.left {
        width: 70%;
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
        .column.side, .column.left {
            width: 100%;
        }
        }
        img {
        max-width: 97%;
        height: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
        }

        div {
        text-align: justify;
        text-justify: inter-word;
        }
        body {margin:0}

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
      <a class="active" href="/team9-Web/home.php">HOME</a>
      <a href="/team9-Web/enrollment.php">ENROLLMENT</a>
      <a href="#teachers">TEACHERS</a>
      <a href="#parents">PARENTS</a>
      <a href="/team9-Web/contactus.php">CONTACT US</a>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>
    <br>
        <div id="main">
            <h1>WELCOME TO STAR LEARNERS PRE-SCHOOL</h1>
            <p></p>
        </div>
      </div>  <!-- /page -->
  
  <div class="column left">
    <h2>Your future begins here!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
    <br>
    <img src="https://images.unsplash.com/photo-1588075592446-265fd1e6e76f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80" class="center">
  </div>
  
  <div class="column side">
    <h4><b>ABOUT US</b></h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
  
  <div class="column side">
    <h4><b>REFERENCES</b></h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  
    <div class="w3-container">
    <a href="/team9-Web/review.php" class="w3-button w3-black">Submit a Reference</a>
    </div>

  </div>

  <div class="w3-container">
  <a href="/team9-Web/review.php" class="w3-button w3-black">Submit a Reference</a>
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