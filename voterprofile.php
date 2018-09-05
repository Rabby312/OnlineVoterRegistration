

<?php
    include("config.php");
    //$email=$_POST['email'];
    $result="select * from users";
    $run= mysqli_query($conn,$result);
    while($row=mysqli_fetch_array($run))
     { 
        $fname=$row['fname'];
        $lname=$row['lname'];
        $dob=$row['dob'];
        $gender=$row['gender'];
        $religion=$row['religion'];
        $email=$row['email'];
        $password=$row['password'];
        $confirmpassword=$row['confirmpassword'];
        $mobile=$row['mobile'];
        $occupation=$row['occupation'];
        $blood=$row['blood'];
        $image=$row['image'];
        $parmanentaddress=$row['parmanentaddress'];
        $presentaddress=$row['presentaddress'];
        $fathername=$row['fathername'];
        $fathernid=$row['fathernid'];
        $fatheroccupation=$row['fatheroccupation'];
        $mothername=$row['mothername'];
        $mothernid=$row['mothernid'];
        $motheroccupation=$row['motheroccupation'];
        $brothersistername=$row['brothersistername'];
        $brothersisternid=$row['brothersisternid'];
        $marrital=$row['marrital'];
        $marriedname=$row['marriedname'];
        $marriednid=$row['marriednid'];
      }
?>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<h2><center>show user information</center></h2>

<table width="600" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2"><center>Your Profile Information</center> </td>
	<td><div align="right"><a href="login.php">logout</a></div></td>
  </tr>
  <tr>
    <!--<td width="129" rowspan="5"> <img src="<?php echo $image ?> width="250" height="200" alt="no image found"/></td>-->
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><?php echo $fname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><?php echo $lname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Date of Birth:</div></td>
    <td valign="top"><?php echo $dob ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top"><?php echo $gender ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Religion:</div></td>
    <td valign="top"><?php echo $religion ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Email:</div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Password:</div></td>
    <td valign="top"><?php echo $password ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">ConfirmPassword:</div></td>
    <td valign="top"><?php echo $confirmpassword ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Contact No: </div></td>
    <td valign="top"><?php echo $mobile ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Occupation: </div></td>
    <td valign="top"><?php echo $occupation ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Blood Group: </div></td>
    <td valign="top"><?php echo $blood ?></td>
  </tr>
    <tr>
    <td valign="top"><div align="left">Parmanent Address: </div></td>
    <td valign="top"><?php echo $parmanentaddress ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Present Address: </div></td>
    <td valign="top"><?php echo $presentaddress ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Father Name: </div></td>
    <td valign="top"><?php echo $fathername ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Father NID: </div></td>
    <td valign="top"><?php echo $fathernid ?></td>
  </tr>
    <tr>
    <td valign="top"><div align="left">Father Occupation: </div></td>
    <td valign="top"><?php echo $fatheroccupation ?></td>
  </tr>
     <tr>
    <td valign="top"><div align="left">Mother Name: </div></td>
    <td valign="top"><?php echo $mothername ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Mother NID: </div></td>
    <td valign="top"><?php echo $mothernid ?></td>
  </tr>
    <tr>
    <td valign="top"><div align="left">Mother Occupation: </div></td>
    <td valign="top"><?php echo $motheroccupation ?></td>
  </tr>
    <tr>
    <td valign="top"><div align="left">Brother or Sister Name: </div></td>
    <td valign="top"><?php echo $brothersistername ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Brother or Sister NID: </div></td>
    <td valign="top"><?php echo $brothersisternid ?></td>
  </tr>
    <tr>
    <td valign="top"><div align="left">Marrital Status: </div></td>
    <td valign="top"><?php echo $marrital ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Husband or Wife Name: </div></td>
    <td valign="top"><?php echo $marriedname ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Husband or Wife NID: </div></td>
    <td valign="top"><?php echo $marriednid ?></td>
  </tr>
    
  
</table>



</body>
</html>