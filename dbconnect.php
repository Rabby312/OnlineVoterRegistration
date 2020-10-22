

<?php
//database connect for user db name is registration

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'registration';


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (fname,lname,dob,gender,religion,email,password,confirmpassword,mobile,occupation,blood,image,parmanentaddress,presentaddress,fathername,fathernid,fatheroccupation,mothername,mothernid,motheroccupation,brothersistername,brothersisternid,marrital,marriedname,marriednid)
                    VALUES ('$fname','$lname','$dob','$gender','$religion','$email','$password','$confirmpassword','$mobile','$occupation','$blood','$image','$parmanentaddress','$presentaddress','$fathername','$fathernid','$fatheroccupation','$mothername','$mothernid','$motheroccupation','$brothersistername','$brothersisternid','$marrital','$marriedname','$marriednid')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
