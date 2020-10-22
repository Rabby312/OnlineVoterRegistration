<html>
<!-- display news for user-->
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
$query = "SELECT * FROM news ORDER BY id DESC";
$result= $conn->query($query);
if($result->num_rows > 0){
    while($output = $result->fetch_assoc())
{
	echo $output['subject'].'<br />';
	echo $output['news'].'<br / >';
	echo date('D-M-Y', $output['date']).'<br / >';
	echo 'Posted by '.$output['postedby'];
	echo '<hr />'; 
}
}
else{
   echo " result not found";
}
$conn-> close();
?>

<div class="footer">
      <p>Copyright@Bangladesh Election Commission</p>
    </div>
</body>
</html>
