<?php
mysql_connect("localhost","root",""); // {user dan password disesuaikan}
mysql_select_db("username");
$email = $_GET['s'];
$query2 = mysql_query("select email from user where email='$email'");
if(mysql_num_rows($query2)==0)
	{
		echo "$email belum ada yang pakai";
	}
else
	{
		echo "$email sudah ada yang pakai";
	}
?>