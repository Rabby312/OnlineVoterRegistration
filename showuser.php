<?php
session_start();
?>
<?php
include("config.php");
$fname=$lname=$email=$dob=$image=$blood="";
    $result="select * from users where email=$email";
    $run= mysqli_query($conn,$result);
    while($row=mysqli_fetch_array($run))
{ 
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$dob=$row['dob'];
$image=$row['image'];
$blood=$row['blood'];
}
?>
<html>
<body>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
	<td><div align="right"><a href="index.php">logout</a></div></td>
  </tr>
  <tr>
    <td width="129" rowspan="5"><img src="<?php echo $image; ?>" width="129" height="129" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><?php echo $fname; ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><?php echo $lname; ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">email:</div></td>
    <td valign="top"><?php echo $email; ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">dob:</div></td>
    <td valign="top"><?php echo $dob; ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">blood: </div></td>
    <td valign="top"><?php echo $blood; ?></td>
  </tr>
</table>
<p align="center"><a href="index.php"></a></p>

</body>
</html>