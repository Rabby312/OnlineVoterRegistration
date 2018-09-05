<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voter Registration</title>
    <style>
      body{
        margin:0;

      }


      h1{
        background-color:white;
        color:blue;
        text-align:center;
        font-weight:bold;
        height:50px;
      }
       h2,h3{
           text-align:center;
           }
      .nav{
        width:100%;
        background:#000033;
        height:80px;
      }
      ul{
        list-style:none;
        padding:0;
        margin:0;
        position:absolute;
      }
      ul li{
        float:left;
        margin-top:20px;

      }
      ul li a{
        width:140px;
        color:white;
        display:block;
        text-decoration:none;
        font-size:15px;
        text-align:center;
        padding:10px;
        border-radius:10px;
        font-family:Century Gothic;
        font-weight:bold;


      }
      a:hover{
        background:#669900;
      }
      ul li ul{
        background:#000033;
      }
      ul li ul li{
        float:none;

      }
      ul li ul {
        display:none;
      }
      ul li:hover ul{
        display:block;
      }
      #image{
        border:2px solid black;
        padding:200px;
        background: url(registration.png);
        background-repeat:no-repeat;
        background-size: 100% 100%;

      }
      .footer
      {
        background-color:black;
        color:antiquewhite;
        padding:10px;
        text-align: center;
        position:fixed;
        width:100%;
        left:0;
        right:0;
        bottom:0;
      }
      img{
        float:left;
      }

    </style>

  </head>
  <body>
    <img src="logoo.jpg" height="60" width="300"alt="logo" />
    <h1 style="font-size:50px";>Online Voter Registration</h1>
    <div class="nav">
      <ul>
        <li><a href="home.html">HOME</a></li>
        <li><a href="aboutus.php">ABOUT BEC</a></li>
        <li><a href="validation_registration.php">REGISTRATION</a></li>
        <li><a href="login.php">LOGIN</a></li>
        <li><a href="eligibility.php">ELIGIBILITY</a></li>
        <li><a href="#">VOTER INFORMATION</a>
          <ul>
         <li><a href="search.php">SEARCH</a></li>
        <li><a href="sqldatashow.php">VOTER LIST</a></li>
        <li><a href="lawsandrules.php">LAWS & RULES</a></li>
          </ul>
        </li>
        <li><a href="#">NEWS</a>
          <ul>
        <li><a href="addnews.php">INSERT NEWS</a></li>
        <li><a href="displaynews.php">DISPLAY NEWS</a></li>
         </ul>
        </li>
        <li><a href="contactus.php">CONTACT US</a></li>
      </ul>
    </div>
    <font color="WHITE"><marquee direction="left" style="background:white;color:blue;">
      <strong>Breaking News: </strong>Online voter registration started from 1 january 2018</marquee></font>
     <h2><center>Eligibility For A National ID Card</center></h2>
  <h3>Following the Electoral Roll Act, 2009; every citizen who is eligible to become a voter can also be eligible to procure a NID card. Here’s a list of requirements to obtain a NID card:</h3>
<h3>Must be a Bangladeshi citizen and residing in Bangladesh</h3>
<h3>Must be at least 18 years of age</h3>
<h3>Must be a resident of an electoral area</h3>
   <h2>Instructions</h2>
<h3>Bangladesh Election Commission can issue only one NID card</h3>
<h3>Only registered person may be able to obtain a NID card</h3>
   <h2>Required Information</h2>
<h3>To complete the procedure for registering for a NID card, here is a list of information to provide</h3>
<h3>Date of Birth</h3>
<h3>City or country of Birth</h3>
  <h2>Online Registration Procedure</h2>
<h3>A voter must have his/her information recorded at the Bangladesh Election Commission. The information collected about the applicant will be incorporated into designated Registration Forms</h3>
<h3>A person can start his/her registration process online by going to www.services.nidw.gov.bd/new_voter and fill up the form with all the required information.</h3>
<h3>All the information except for an individual’s own name has to be typed in in Bangla Unicode.</h3>
<h3>After inserting information, scrutinize the form for correctness.</h3>
<h3>Print out the form in PDF format and submit it to your local Election Commission.</h3>
<h2>Required Documents</h2>
<h3>S.S.C or H.S.C equivalent certificate,
Birth certificate,
Passport / Driving license / TIN certificate,
Utility bill copy,
House rent receipt/Holding tax receipt – (as proof of address),
Citizenship certificate (as applicable),
Father, Mother, Husband/wife’s ID card photocopy</h3>


    <div class="footer">
      <p>Copyright@Bangladesh Election Commission</p>
    </div>
  </body>
</html>