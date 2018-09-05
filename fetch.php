<?php
//fetch.php
$conn = mysqli_connect("localhost", "root", "", "registration");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM users 
  WHERE fname LIKE '%".$search."%'
  OR lname LIKE '%".$search."%' 
  OR dob LIKE '%".$search."%' 
  OR gender LIKE '%".$search."%' 
  OR religion LIKE '%".$search."%'
  OR email LIKE '%".$search."%' 
  OR password LIKE '%".$search."%' 
  OR confirmpassword LIKE '%".$search."%' 
  OR mobile LIKE '%".$search."%'
  OR occupation LIKE '%".$search."%' 
  OR blood LIKE '%".$search."%' 
  OR parmanentaddress LIKE '%".$search."%' 
  OR presentaddress LIKE '%".$search."%'
  OR fathername LIKE '%".$search."%' 
  OR fathernid LIKE '%".$search."%' 
  OR fatheroccupation LIKE '%".$search."%' 
  OR mothername LIKE '%".$search."%'
  OR mothernid LIKE '%".$search."%' 
  OR motheroccupation LIKE '%".$search."%' 
  OR brothersistername LIKE '%".$search."%' 
  OR brothersisternid LIKE '%".$search."%'
  OR marrital LIKE '%".$search."%' 
  OR marriedname LIKE '%".$search."%' 
  OR marriednid LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM users ORDER BY id
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>id</th>
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
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    
    <td>' . $row["id"] .' </td>
    <td>' . $row["fname"] . '</td>
    <td>' . $row["lname"] . '</td>
    <td>' . $row["dob"] . '</td>
    <td>' . $row["gender"] . '</td>
    <td>' . $row["religion"] . '</td>
    <td>' . $row["email"] . '</td>
    <td>' . $row["password"] . '</td>
     <td>' . $row["confirmpassword"] . '</td>
     <td>' . $row["mobile"] . '</td>
      <td>' . $row["occupation"] . '</td>
      <td>' . $row["blood"] . '</td>
            
      <td> <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" /></td>
  
      <td>' . $row["parmanentaddress"] . '</td>
      <td>' . $row["presentaddress"] . '</td>
      <td>' . $row["fathername"] . '</td>
      <td>' . $row["fathernid"] . '</td>
      <td>' . $row["fatheroccupation"] . '</td>
      <td>' . $row["mothername"] . '</td>
      <td>' . $row["mothernid"] . '</td>
      <td>' . $row["motheroccupation"] . '</td>
      <td>' . $row["brothersistername"] . '</td>
      <td>' . $row["brothersisternid"] . '</td>
      <td>' . $row["marrital"] . '</td>
      <td>' . $row["marriedname"] . '</td>
      <td>' . $row["marriednid"] . '</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
