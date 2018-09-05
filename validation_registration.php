
<?php
session_start();

if(isset($_POST['Submit']))
{ 
  $_SESSION['fname']= $_POST['fname'];
  $_SESSION['lname']= $_POST['lname'];
  $_SESSION['dob']= $_POST['dob'];
  $_SESSION['gender']= $_POST['gender'];
  $_SESSION['religion']= $_POST['religion'];
  $_SESSION['email']= $_POST['email'];
  $_SESSION['password']= $_POST['password'];
  $_SESSION['confirmpassword']= $_POST['confirmpassword'];
  $_SESSION['mobile']= $_POST['mobile'];
  $_SESSION['occupation']= $_POST['occupation'];
  $_SESSION['blood']= $_POST['blood'];
  $_SESSION['image']= $_POST['image'];
  $_SESSION['parmanentaddress']= $_POST['parmanentaddress'];
  $_SESSION['presentaddress']= $_POST['presentaddress'];
  $_SESSION['fathername']= $_POST['mothername'];
  $_SESSION['marital']= $_POST['marital'];
  
}
?>

<?php

 require 'config.php';
 
?>


<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="color.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voter Registration</title>
<style>
.error {color: #FF0000;}

input[type=text], input[type=password],input[type=numeric] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      input[type=radio]{
        width:5%;
      }

      #form{
        background: white;
        color:blue;
        margin:2px solid green;
        padding:5px;
        width:500px;



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
include("config.php");
$fnameErr=$lnameErr=$dobErr=$genderErr=$religionErr=$emailErr=$passwordErr=$confirmpasswordErr=$mobileErr=$occupationErr=$bloodErr=$imageErr=$parmanentaddressErr=$presentaddressErr=$fathernameErr=$fathernidErr=$fatheroccupationErr=$mothernameErr=$mothernidErr=$motheroccupationErr=$brothersisternameErr=$brothersisternidErr=$marritalErr=$marriednameErr=$marriednidErr="";
$fname=$lname=$dob=$gender=$religion=$status=$email=$password=$confirmpassword=$mobile=$occupation=$blood=$image=$parmanentaddress=$presentaddress=$fathername=$fathernid=$fatheroccupation=$mothername=$mothernid=$motheroccupation=$brothersistername=$brothersisternid=$marrital=$marriedname=$marriednid="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($_POST["fname"]))
{
//$fnameErr="First name is required";
}
else{
$fname=($_POST["fname"]);

if(!preg_match("/^[a-zA-Z ]*$/",$fname))
{
$fnameErr="*first name only contains letters and white space";
}
}

if(empty($_POST["lname"]))
{
//$lnameErr="Last name is required";
}
else{
$lname=($_POST["lname"]);
if(!preg_match("/^[a-zA-Z ]*$/",$lname))
{
$lnameErr="*last name only contains letters and white space";
}
}

if(empty($_POST["dob"]))
  {
	  //$dobErr="*date of birth is required";
  }
  else
{
   if( ((time()) - date(strtotime($_POST["dob"])) ) >= (567648000) ) 
        {
		$dob =($_POST["dob"]);
	} 
	else
	{
		$dobErr="Age at least 18 to register";
		
         }
  
  }



if(empty($_POST["gender"]))
{
    //$genderErr = "Gender is required";
  } 
else {
    $gender = ($_POST["gender"]);
  }

if(empty($_POST["religion"]))
{
    //$religionErr = "Religion is required";
  } 
else {
    $religion = ($_POST["religion"]);
  }

if (empty($_POST["email"])) {
    //$emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "*Invalid email format"; 
    }
  }

if(empty($_POST["password"]))
{
 //$passwordErr="Password is required";
}
else
{
if(!empty($_POST["password"])) {
        $password = ($_POST["password"]);
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }
      else{
       $password = ($_POST["password"]);
}

  }
}

if(empty($_POST["confirmpassword"]))
{
  //$confirmpasswordErr="confirm password is required";
}
else{
         $confirmpassword = ($_POST["confirmpassword"]); 
         if($_POST["password"] == $_POST["confirmpassword"])
          {
           $confirmpassword = ($_POST["confirmpassword"]);
}
         else {
            $confirmpasswordErr="password does not match";
        }


 }

if(empty($_POST["mobile"]))
{
 //$mobileErr="Mobile number is required";
}
else
{
$mobile = ($_POST["mobile"]);
if(!preg_match('/^[0-9]{11}+$/', $mobile))
{
 $mobileErr="enter a valid mobile nubmer";
}
else
{
 $mobile= ($_POST["mobile"]);
}
}

if(empty($_POST["occupation"]))
{
 //$occupationErr="Occupation is required";
}
else
{
    $occupation= ($_POST["occupation"]);
    if(!preg_match('/^[a-zA-Z]*$/',$occupation))
    {
       $occupationErr="*enter valid occupation";
    }
     else
     {
       $occupation=($_POST["occupation"]);
     }

}

if(empty($_POST["blood"]))
{
 //$bloodErr="Blood group is required";
}
else
{
 $blood=($_POST["blood"]);
}

if(empty($_POST["image"]))
{
 //$imageErr="Image is required";
}
else
{
 $image=($_POST["image"]);

}

if(empty($_POST["presentaddress"]))
{
 $presentaddressErr="Present address is required";
}
else
{
 $presentaddress=($_POST["presentaddress"]);
}

if(empty($_POST["parmanentaddress"]))
{
 $parmanentaddressErr="Parmanent address is required";
}
else
{
 $parmanentaddress=($_POST["parmanentaddress"]);
}


if(empty($_POST["fathername"]))
{
   //$fathernameErr="Father name is required";
}
else{
      $fathername=($_POST["fathername"]);
       if(!preg_match("/^[a-zA-Z ]*$/",$fathername))
        {
          $fathernameErr="*Father name only contains letters and white space";
        }
}

if(empty($_POST["fathernid"]))
{
 //$fathernid="Father NID is required";
}
else
{
$fathernid = ($_POST["fathernid"]);
if(!preg_match('/^[0-9]{17}+$/', $fathernid))
{
 $fathernidErr="enter a valid NID nubmer";
}
else
{
 $fathernid= ($_POST["fathernid"]);
}
}

if(empty($_POST["fatheroccupation"]))
{
 //$fatheroccupationErr="Occupation is required";
}
else
{
    $fatheroccupation= ($_POST["fatheroccupation"]);
    if(!preg_match('/^[a-zA-Z]*$/',$fatheroccupation))
    {
       $fatheroccupationErr="*enter valid occupation";
    }
     else
     {
       $fatheroccupation=($_POST["fatheroccupation"]);
     }

}

if(empty($_POST["mothername"]))
{
  //$mothernameErr="Mother name is required";
}
else{
$mothername=($_POST["mothername"]);
if(!preg_match("/^[a-zA-Z ]*$/",$mothername))
{
$mothernameErr="*Mother name only contains letters and white space";
}
}

if(empty($_POST["mothernid"]))
{
 //$mothernid="Mother NID is required";
}
else
{
$mothernid = ($_POST["mothernid"]);
if(!preg_match('/^[0-9]{17}+$/', $mothernid))
{
 $mothernidErr="enter a valid NID nubmer";
}
else
{
 $mothernid= ($_POST["mothernid"]);
}
}


if(empty($_POST["motheroccupation"]))
{
 //$motheroccupationErr="Occupation is required";
}
else
{
    $motheroccupation= ($_POST["motheroccupation"]);
    if(!preg_match('/^[a-zA-Z]*$/',$motheroccupation))
    {
       $motheroccupationErr="*enter valid occupation";
    }
     else
     {
       $motheroccupation=($_POST["motheroccupation"]);
     }

}

if(empty($_POST["brothersistername"]))
{
  //$brothersisternameErr="brother or sister name is required";
}
else{
$brothersistername=($_POST["brothersistername"]);
if(!preg_match("/^[a-zA-Z ]*$/",$brothersistername))
{
$brothersisternameErr="*Brother or Sister name only contains letters and white space";
}
}

if(empty($_POST["brothersisternid"]))
{
 //$brothersisternid="Brother or Sister NID is required";
}
else
{
$brothersisternid = ($_POST["brothersisternid"]);
if(!preg_match('/^[0-9]{17}+$/', $brothersisternid))
{
 $brothersisternidErr="enter a valid NID nubmer";
}
else
{
 $brothersisternid= ($_POST["brothersisternid"]);
}
}


if(empty($_POST["marrital"]))
{
    //$marritalErr = "marital status is required";
  } 
else {
    $marrital = ($_POST["marrital"]);
  }



if(empty($_POST["marriedname"]))
{
  //$marriednameErr="*Married name is required";
}
else{
$marriedname=($_POST["marriedname"]);
if(!preg_match("/^[a-zA-Z ]*$/",$marriedname))
{
$marriednameErr="*Married name only contains letters and white space";
}
}

if(empty($_POST["marriednid"]))
{
 //$marriednid="Married NID is required";
}
else
{
$marriednid = ($_POST["marriednid"]);
if(!preg_match('/^[0-9]{17}+$/', $marriednid))
{
 $marriednidErr="enter a valid NID nubmer";
}
else
{
 $marriednid= ($_POST["marriednid"]);
}
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$check_email="select * from users where email='$email'";
$run= mysqli_query($conn,$check_email);
if(mysqli_num_rows($run)>0)
{  
  echo "<script> alert('Email $email is already exist. Please enter another email for registration')</script>";
  exit();
}

$insert_user= "INSERT INTO users (fname,lname,dob,gender,religion,status,email,password,confirmpassword,mobile,occupation,blood,image,parmanentaddress,presentaddress,fathername,fathernid,fatheroccupation,mothername,mothernid,motheroccupation,brothersistername,brothersisternid,marrital,marriedname,marriednid)
                    VALUES ('$fname','$lname','$dob','$gender','$religion','$status','$email','$password','$confirmpassword','$mobile','$occupation','$blood','$image','$parmanentaddress','$presentaddress','$fathername','$fathernid','$fatheroccupation','$mothername','$mothernid','$motheroccupation','$brothersistername','$brothersisternid','$marrital','$marriedname','$marriednid')";
     if(mysqli_query($conn,$insert_user))
     { 
         echo "<script> alert('Thank you For registration')</script>";
       echo "<script> window.open('login.php','_self')</script>";

     }  
   /* if(!empty($insert_user))
     {
       $query_user = "SELECT * FROM users";
       while($user_id=mysqli_fetch_array($run)){
       $user_id = $user_id['id'];
       $link="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."active.php?id=" . $user_id;
       $toEmail = $_POST["email"];
        $subject = "email Activation";
      $content = "Click this link to activate your account. <a href='" . $link . "'>" . $link . "</a>";
       $mailHeaders = "From: EzeSunday\r\n";
      if(mail($toEmail, $subject, $content, $mailHeaders)) {
       echo "<script> alert('Thank you For registering with us, check you email to activate your account.')</script>";	
	}
     }
   }
} 
     else {
	echo "<script> alert('Email $email is already exist. Please enter another email for registration')</script>";	
        }*/
    
   /* if(isset($_POST['submit']))
    {
       require 'phpmailer/phpmailerautoload.php';
       function sendemail($to,$form,$formname,$image)
         {
            $mail= new phpmailer();
            $mail->setFrom($from,$formname);
            $mail->addAddress($to);
            $mail->addAttachment($image);
            $mail->Subject= 'content Form - Email';
            $mail->isHTML( isHtml,false);
             return $mail->send();
           } 
             $fname= $_POST['fname'];
             $email= $_POST['email'];
             $file= "image/".basename($_FILES['image']['fname']);
             if(move_upload_file($_FILES['image']['tmp_name']. $file))
             {
                if(sendemail('mgrabby312@gmail.com', $email,$fname,$file))
                 {
                   echo "<script> alert('email sent')</script>";
                  }
                   else
                   {
                    echo "<script> alert('email failed')</script>";
                     }
              
             } 
             else
               {
                echo "<script> alert('please check you attachment!')</alert>";
                }
     }*/
     
}

?>

<img src="logoo.jpg" height="60" width="300"alt="logo" />
    <h1 style="font-size:50px";>Online Voter Registration</h1>
    <div class="nav">
      <ul>
        <li><a href="Home.html">HOME</a></li>
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
      <fieldset style="width:500px">
        <legend>Registration Form</legend>
        <div id="form">
          <form method="post" action="validation_registration.php" enctype="multipart/form-data >
            <p><span class="error">* required field.</span></p>
            <h2>Personal Information</h2>
            <hr>
           First Name <span class="error">*</span> <input type="text" name="fname" placeholder="first name" value="<?php echo $fname;?>" required><br>
            <span class="error"><?php echo $fnameErr;?></span>
            <br>
            Last Name <span class="error">*</span> <input type="text" name="lname" placeholder="last name" value="<?php echo $lname;?>" required>
            <span class="error"><?php echo $lnameErr;?></span>
            <br>
            Date of Birth <span class="error">*</span> <input type="date" name="dob" value="<?php echo $dob;?>" required>
            <span class="error"><?php echo $dobErr;?></span>
            <br>

            Gender <span class="error">*</span>
            <input type="radio" name="gender" value="male" required>Male
            <input type="radio" name="gender" value="female" required>Female
             <span class="error"><?php echo $genderErr;?></span>
            <br>
            Religion <span class="error">*</span>
            <input type="radio" name="religion" value="muslim" required>Muslim
            <input type="radio" name="religion" value="hindu" required>Hindu
            <input type="radio" name="religion" value="buddhist" required>Buddhist
            <input type="radio" name="religion" value="christian" required>Christian
            <input type="radio" name="religion" value="others" required>Others
            <span class="error"><?php echo $genderErr;?></span>
             <br>
             Email <span class="error">*</span> <input type="text" name="email" placeholder="enter your email" value="<?php echo $email;?>" required>
             <span class="error"><?php echo $emailErr;?></span>
             <br>
             Password <span class="error">*</span> <input type="password" name="password" placeholder="enter your password" value="<?php echo $password;?>" required>
             <span class="error"><?php echo $passwordErr;?></span>
             <br>
             Confirm Password <span class="error">*</span> <input type="password" name="confirmpassword" placeholder="enter your password" value="<?php echo $confirmpassword;?>" required>
             <span class="error"><?php echo $confirmpasswordErr;?></span>
             <br>
            Mobile Number <span class="error">*</span> <input type="numeric" name="mobile" placeholder="enter your mobile number" value="<?php echo $mobile;?>" required>
            <span class="error"><?php echo $mobileErr;?></span>
            <br>
            Occupation <span class="error">*</span> <input type="text" name="occupation" placeholder="enter occupation" value="<?php echo $occupation;?>" required>
            <span class="error"><?php echo $occupationErr;?></span>
            <br>
            Blood Group <span class="error">*</span>
            <input type="radio" name="blood" value="A+" required>A+
            <input type="radio" name="blood" value="A-" required>A-
            <input type="radio" name="blood" value="B+" required>B+
            <input type="radio" name="blood" value="B-" required>B-
            <input type="radio" name="blood" value="O+" required>O+
             <input type="radio" name="blood" value="O-" required>O-
             <input type="radio" name="blood" value="AB+" required>AB+
            <input type="radio" name="blood" value="AB-" required>AB-
            <span class="error"><?php echo $bloodErr;?></span>
            <br>
            Upload Your Image <span class="error">*</span> <input type="file" name="image" accept="image/*" required><br>
          
            Parmanent Address <span class="error">*</span><br>
            <textarea cols=30 rows=10 name="parmanentaddress" value="<?php echo $parmanentaddress;?>" > </textarea> 
            <span class="error"><?php echo $parmanentaddressErr;?></span>
           <br>
            Present Address <span class="error">*</span><br>
            <textarea cols=30 rows=10 name="presentaddress" value="<?php echo $presentaddress;?>" > </textarea> 
            <span class="error"><?php echo $presentaddressErr;?></span>
            <br>
            <h2>Father Information</h2>
            <hr>
            Father Name <span class="error">*</span><br> <input type="text" name="fathername" placeholder="enter your father name" value="<?php echo $fathername;?>" required>
            <span class="error"><?php echo $fathernameErr;?></span>
            <br>

             
            Father NID Number <span class="error">*</span><br> <input type ="numeric" name="fathernid" placeholder="enter nid number" value="<?php echo $fathernid;?>" required>
            <span class="error"><?php echo $fathernidErr;?></span>
            <br>
            Occupation <span class="error">*</span><br> <input type="text" name="fatheroccupation" placeholder="enter occupation" value="<?php echo $fatheroccupation;?>" required>
            <span class="error"><?php echo $fatheroccupationErr;?></span>
            <br>
            <h2>Mother Information</h2>
            <hr>
            Mother Name <span class="error">*</span><br> <input type="text" name="mothername" placeholder="enter your mother name" value="<?php echo $mothername;?>" required>
            <span class="error"><?php echo $mothernameErr;?></span>
            <br>
            Mother NID Number <span class="error">*</span> <input type ="numeric" name="mothernid" placeholder="enter nid number" value="<?php echo $mothernid;?>" required>
            <span class="error"><?php echo $mothernidErr;?></span>
            <br>
            Occupation <span class="error">*</span> <input type="text" name="motheroccupation" placeholder="enter occupation" value="<?php echo $motheroccupation;?>" required>
            <span class="error"><?php echo $motheroccupationErr;?></span>
            <br>
            <h2>Brother/Sister Information</h2>
            <hr>
            Brother/Sister Name(if exist)<input type="text" name="brothersistername" placeholder="enter brother or sister name" value="<?php echo $brothersistername;?>">
            <span class="error"><?php echo $brothersisternameErr;?></span>
            <br>
             NID Number(if exist)<input type ="numeric" name="brothersisternid" placeholder="enter nid number" value="<?php echo $brothersisternid;?>" >
             <span class="error"><?php echo $brothersisternidErr;?></span>
             <br>
            <h2>Hasband/Wife Information</h2>
            <hr>
            
               
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("div1").hide(1000);
    });
});
$(document).ready(function(){
    $("#show").click(function(){
        $("div1").show(1000);
    });
});
$(document).ready(function(){
    $("#hide1").click(function(){
        $("div1").hide(1000);
    });
});
$(document).ready(function(){
    $("#hide2").click(function(){
        $("div1").hide(1000);
    });
});

</script>
             <div1>
             <h3>If married </h3><br>
            <select>
              <option value="hasband">Hasband</option>
              <option value="wife">Wife</option>
            </select>
            <input type="text" name="marriedname" placeholder="enter name" value="<?php echo $marriedname;?>" >
             <span class="error"><?php echo $marriednameErr;?></span>
            <br>
            NID Number <input type ="numeric" name="marriednid" placeholder="enter nid number" value="<?php echo $marriednid;?>" >
            <span class="error"><?php echo $marriednidErr;?></span>
            <br>
            </div1>


            Marital Status <span class="error">*</span> <input type="radio" name="marrital" value="unmarried" id="hide">Unmarried
            <input type="radio" name="marrital" value="married" id="show" checked>Married
           <input type="radio" name="marrital" value="divorced" id="hide1">Divorced
            <input type="radio" name="marrital" value="widow" id="hide2">Widow
             <span class="error"><?php echo $marritalErr;?></span>
             <br>


            <input type="checkbox" >Are you sure?<br>
            <button type="submit" name="submit">Submit</button>
            <button type="Reset">Reset</button>
          </form>
        </div>
      </fieldset>
    </center>
</body>
</html>

