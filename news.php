﻿<!DOCTYPE html>
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
        <li><a href="news.php">NEWS</a></li>
        <li><a href="contactus.php">CONTACT US</a></li>
      </ul>
    </div>
    <font color="WHITE"><marquee direction="left" style="background:white;color:blue;">
      <strong>Breaking News: </strong>Online voter registration started from 1 january 2018</marquee></font>
        


    <div class="footer">
      <p>Copyright@Bangladesh Election Commission</p>
    </div>
  </body>
</html>