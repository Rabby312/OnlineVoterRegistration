<!DOCTYPE html>
<!-- user profile page-->
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

     <table>
           <tr>
                <th>ID</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Religion</th>
                <th>Email</th>
                <th>Password</th>
                <th>Confirm Password</th>
                <th>Mobile Number</th>
                 <th>Occupation</th>
                 <th>Blood Group</th>
                <th>Image</th>
                <th>Parmanent Address</th>
                 <th>Present Address</th>
                 <th>Father Name</th>
                  <th>Father NID</th>
                  <th>Father Occupation</th>
                  <th>Mother Name</th>
                   <th>Mother NID</th>
                  <th>Mother Occupation</th>
                   <th>Brother/Sister Name</th>
                   <th>Brother/Sister NID</th>
                   <th>Marrital Status</th>
                   <th>Married Name</th>
                   <th>Married NID</th>
            </tr>


<?php
    include("config.php");
    $result="select * from users";
    $run= mysqli_query($conn,$result);
    while($row=mysqli_fetch_array($run))
     { 
        $fname=$row[0];
        $lname=$row[1];
        $dob=$row[2];
        $gender=$row[3];
        $religion=$row[4];
        $email=$row[5];
        $password=$row[6];
        $confirmpassword=$row[7];
        $mobile=$row[8];
        $occupation=$row[9];
        $blood=$row[10];
        $image=$row[11];
        $parmanentaddress=$row[12];
        $presentaddress=$row[13];
        $fathername=$row[14];
        $fathernid=$row[15];
        $fatheroccupation=$row[16];
        $mothername=$row[17];
        $mothernid=$row[18];
        $motheroccupation=$row[19];
        $brothersistername=$row[20];
        $brothersisternid=$row[21];
        $marrital=$row[22];
        $marriedname=$row[23];
        $marriednid=$row[24];
?>

       <tr>
 
                <td><?php echo $fname; ?> </td>
                <td><?php echo $lname; ?> </td>
                <td><?php echo $dob; ?> </td>
                <td><?php echo $gender; ?> </td>
                <td><?php echo $religion; ?> </td>
                <td><?php echo $email; ?> </td>
                <td><?php echo $password; ?> </td>
                <td><?php echo $confirmpassword; ?> </td>
                <td><?php echo $mobile; ?> </td>
                <td><?php echo $occupation; ?> </td>
                <td><?php echo $blood; ?> </td>
                <td><?php echo $image; ?> </td>
                <td><?php echo $parmanentaddress; ?> </td>
                <td><?php echo $presentaddress; ?> </td>
                <td><?php echo $fathername; ?> </td>
                <td><?php echo $fathernid; ?> </td>
                <td><?php echo $fatheroccupation; ?> </td>
                <td><?php echo $mothername; ?> </td>
                <td><?php echo $mothernid; ?> </td>
                <td><?php echo $motheroccupation; ?> </td>
                <td><?php echo $brothersistername; ?> </td>
                <td><?php echo $brothersisternid; ?> </td>
                <td><?php echo $marrital; ?> </td>
                <td><?php echo $marriedname; ?> </td>
                <td><?php echo $marriednid; ?> </td>
                
                
       </tr>
   <?php  } ?>

     </table>

</body>
</html>

