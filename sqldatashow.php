<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="color.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show registered user</title>
<style>
table, th, td {
    border: 1px solid black;
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

<h2><center>show user information</center></h2>

<?php
/*Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM users";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>Date of Birth</th>";
                echo "<th>Gender</th>";
                echo "<th>Religion</th>";
                echo "<th>Email</th>";
                echo "<th>Password</th>";
                echo "<th>Confirm Password</th>";
                 echo "<th>Mobile Number</th>";
                 echo "<th>Occupation</th>";
                 echo "<th>Blood Group</th>";
                 echo "<th>Image</th>";
                 echo "<th>Parmanent Address</th>";
                 echo "<th>Present Address</th>";
                 echo "<th>Father Name</th>";
                  echo "<th>Father NID</th>";
                  echo "<th>Father Occupation</th>";
                  echo "<th>Mother Name</th>";
                   echo "<th>Mother NID</th>";
                  echo "<th>Mother Occupation</th>";
                   echo "<th>Brother/Sister Name</th>";
                    echo "<th>Brother/Sister NID</th>";
                     echo "<th>Marrital Status</th>";
                    echo "<th>Married Name</th>";
                echo "<th>Married NID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                 echo "<td>" . $row['religion'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['confirmpassword'] . "</td>";
                 echo "<td>" . $row['mobile'] . "</td>";
                 echo "<td>" . $row['occupation'] . "</td>";
                 echo "<td>" . $row['blood'] . "</td>";
                 echo "<td>" . $row['image'] . "</td>";
                  echo "<td>" . $row['parmanentaddress'] . "</td>";
                  echo "<td>" . $row['presentaddress'] . "</td>";
                  echo "<td>" . $row['fathername'] . "</td>";
                 echo "<td>" . $row['fathernid'] . "</td>";
                  echo "<td>" . $row['fatheroccupation'] . "</td>";
                  echo "<td>" . $row['mothername'] . "</td>";
                   echo "<td>" . $row['mothernid'] . "</td>";
                   echo "<td>" . $row['motheroccupation'] . "</td>";
                   echo "<td>" . $row['brothersistername'] . "</td>";
                   echo "<td>" . $row['brothersisternid'] . "</td>";
                   echo "<td>" . $row['marrital'] . "</td>";
                   echo "<td>" . $row['marriedname'] . "</td>";
                   echo "<td>" . $row['marriednid'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set. mysqli_free_result() function frees the memory associated with the result.
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

</body>
</html>