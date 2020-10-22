<!DOCTYPE html>
<!-- add news for user-->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voter Registration</title>
   <link rel="stylesheet" type="text/css" href="color.css">

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

<?php
require 'config.php';

function clear($message)
{
	if(!get_magic_quotes_gpc())
		$message = addslashes($message);
	$message = strip_tags($message);
	$message = htmlentities($message);
	return trim($message);
}
if (isset($_POST['submit']))
{ 
	if (empty($_POST['postedby']))
		die('Enter a name.'); 
	else if (empty($_POST['subject']))
		die('Enter a subject.'); 
	else if (empty($_POST['news']))
		die('Enter an article.'); 
	$postedby = clear($_POST['postedby']); 
	$subject = clear($_POST['subject']); 
	$news = clear($_POST['news']); 
	$date = mktime();
         
         $sql = "INSERT INTO news (id , postedby , news , subject , date)
           VALUES ('', '$postedby', '$news', '$subject', '$date')";
           if ($conn->query($sql) === TRUE) {
                   echo "New record created successfully";
            } 
             else {
            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

        $conn->close();
}
?>

<center>
<form method="post" action="addnews.php"> 
	Posted By:<br /><input name="postedby" id="postedby" type="Text" size="50" maxlength="50"><br />
	Subject:<br /><input name="subject" id="subject" type="Text" size="50" maxlength="50"><br />
	Report: </br><textarea name="news" id="news" cols="50" rows="5"></textarea><br />
	<input type="submit" name="submit" id="submit" value="Enter News">
</form>
</center>
<div class="footer">
      <p>Copyright@Bangladesh Election Commission</p>
    </div>

</body>
</html>
