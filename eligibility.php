<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="color.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voter Registration</title>

<style>
.error {color: #FF0000;}
h3{
color:red;
}

input[type=radio]{
        width:5%;
      }

      #form{
        background: white;
        color:blue;
        margin:2px solid green;
        padding:2px;
        width:700px;



      }
      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 30%;
      }

      button:hover {
        opacity: 0.8;
      }
</style>
</head>
<body>

<?php
$bangladeshErr=$ageErr=$checkboxErr="";
$bangladesh=$age=$checkbox="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($_POST["bangladesh"]))
{
    $bangladeshErr = "Your answer is required";
  } 
else {
    $bangladesh = ($_POST["bangladesh"]);
  }

if(empty($_POST["age"]))
{
    $ageErr = "your answer is required";
  } 
else {
    $age = ($_POST["age"]);
  }

if(empty($_POST["checkbox"]))
{
    $checkboxErr = "Your answer is required";
  } 
else {
    $checkbox = ($_POST["checkbox"]);
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

<center>
      <fieldset style="width:800px">
        <legend>Eligibility Form</legend>
        <div id="form">
          
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p><span class="error">* required field.</span></p>
<h2>If your answer "NO" either question, you can not register. </h2>
<h3>To register you must</h3>
<h3>
<pre>
# Be a bangladeshi citizen
# Be at least 18 years of age before registration day</pre></h3>

<br><br>


Are you a citizen of the Bangladesh? <span class="error">*</span>
            <input type="radio" name="bangladesh" value="<?php echo $bangladesh;?>" required>Yes
            <input type="radio" name="bangladesh" value="<?php echo $bangladesh;?>" required>No
             <span class="error"><?php echo $bangladeshErr;?></span>
            <br><br>
Will you be 18 years or older before registration day? <span class="error">*</span>
            <input type="radio" name="age" value="<?php echo $age;?>" required>Yes
            <input type="radio" name="age" value="<?php echo $age;?>" required>No
             <span class="error"><?php echo $ageErr;?></span>
            <br><br>

<input type="checkbox" value="<?php echo $checkbox;?>" required>Are you sure? <span class="error">*</span>
<span class="error"><?php echo $checkboxErr;?></span>
 <br>
            <button type="submit" name="submit" value="submit"><a href="validation_registration.php" style="text-decoration:none">Submit</a></button>
            <button type="Reset">Reset</button>
          </form>
        </div>
      </fieldset>
    </center>

</body>
