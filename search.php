<html>
  <!-- this is ajax search for user -->
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Live Searching</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="color.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  <div class="container">
   <br />
   <h2 align="center">Search Voter Information</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Voter Details" class=" " />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){ // A page can't be manipulated safely until the document is "ready." jQuery detects this state . $( document ).ready() will only run once the page Document Object Model (DOM) is ready for JavaScript code to execute.

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",   // The data are send to the "fetch.php" file through POST method.
   method:"POST",
   data:{query:query},     
   success:function(data)     // The response from the server is placed into an HTML element which has id="result". This is output of ajax function
   {
    $('#result').html(data);    
   }
  });
 }
 $('#search_text').keyup(function(){    // jquery key-upevent
  var search = $(this).val();           // set search text to search variable
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
