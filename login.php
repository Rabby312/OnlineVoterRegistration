<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voter Registration</title>
    <style> 
         .error {color: #FF0000;}
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

<style>
      form {
        border: 3px solid #f1f1f1;
        width:400px;
        height: 400px;
        text-align: center;
      }

      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        opacity: 0.8;
      }

      
    </style>

  </head>
  <body>

<?php
include("config.php");
$emailErr="";
$email="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   if (empty($_POST["email"])) {
    //$emailErr = "Email is required";
      } 
   else {
    $email = ($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
       {
      $emailErr = "*Invalid email format"; 
       }
     }

  

}
?>







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
             <h2><center>Login Form</center></h2>
        <center><form method="post" action="login.php">

        <div class="container">
          <label><b>Email</b></label><span class="error">*</span>
          <input type="text" placeholder="Enter your Email" name="email" value="<?php echo $email;?>"required>
           <span class="error"><?php echo $emailErr;?></span>
           <br>

          <!--<label><b>NID Number</b></label>
          <input type="text" placeholder="Enter Nid Number" name="nid" required>-->

          <button type="submit" name="login" value="login" >Login</button>
          <button type="Reset">Reset</button>
        </div>

        <div class="container">
          
          <span>Forgot <a href="validation_registration.php">Registration?</a></span>
        </div>
        </form></center> 


 <?php
   include("config.php");
   if(isset($_POST['login']))
   {
    $email=$_POST['email'];
    //$nid=$_POST['nid'];
    $query="select * from users where email='$email' ";
    $query_run= mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run))
    {
      echo "<script>window.open('voterprofile.php','_self')</script>";
      $_SESSION['email']=$email;
      header('location:voterprofile.php');
     }
     else
     {
       echo "<script>alert('email or nid is incorrect!')</script>";
     }
     
}
?>   

     
    <div class="footer">
      <p>Copyright@Bangladesh Election Commission</p>
    </div>
  </body>
</html>