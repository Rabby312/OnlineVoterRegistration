<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voter Registration</title>
</head>
<body>

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

if(!$_GET['id'])
{
	$query = mysqli_query("SELECT * FROM news ORDER BY id DESC");
	echo 'Edit<hr />';
	while($output = mysqli_fetch_assoc($query))
		echo $output['subject'].' &raquo; <a href="?id='.$output['id'].'">Edit</a><br />';
}
else
{
	if ($_POST['submit'])
	{
		$postedby = clear($_POST['postedby']); 
		$subject = clear($_POST['subject']); 
		$news = clear($_POST['news']); 
		$date = mktime(); 
		$id = $_GET['id']; 
		mysqli_query("UPDATE news SET postedby='$postedby', news='$news', subject='$subject', date='$date' WHERE id='$id'");
		mysqli_close();
		echo 'News Edited.';
	}
	else
	{
		$id = $_GET['id']; 
		$query = mysqli_query("SELECT * FROM news WHERE id='$id'");
		$output = mysqli_fetch_assoc($query);
?>
<form method="post" action="?id=<? echo $output['id']; ?>"> 
Editing <? echo $output['subject']; ?><hr />
Posted By:<input name="postedby" id="postedby" type="Text" size="50" maxlength="50" value="<? echo $output['postedby']; ?>"><br />
Subject:<input name="subject" id="subject" type="Text" size="50" maxlength="50" value="<? echo $output['subject']; ?>"><br />
News:<textarea name="news" cols="50" rows="5"><? echo $output['news']; ?></textarea><br />
<input type="Submit" name="submit" value="Enter information">
</form>
<?php }} ?>

</body>
</html>