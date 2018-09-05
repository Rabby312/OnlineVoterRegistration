<html>
<head>
<title>Delete</title>
<script type="text/javascript">
function check(id){
	if (confirm("Are you sure you want to delete this news item?"))
		this.location.href = "?id="+id;
}</script>
</head>
<body>
<?php
mysql_connect('localhost','username','password');
mysql_select_db('registration');
if(!$_GET['id'])
{
	$query = mysql_query('SELECT * FROM news ORDER BY id DESC');
	while($output = mysql_fetch_assoc($query)) 
		echo $output['subject'].' &raquo; <a href="#" onclick="check('.$output['id'].'); return false;">Delete</a><br />';
}
else
{
	$id = $_GET['id']; 
	mysql_query("DELETE FROM news WHERE id = $id LIMIT 1"); 
	echo 'News Deleted.';
}
?>
</body>
</html>