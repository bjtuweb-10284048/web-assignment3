<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AddUser</title>
</head>
/*
  连接数据库，建立userinfo表资料
* /
<body>
<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
  	{
 		 die('Could not connect: ' . mysql_error());
  	}

	mysql_select_db("userinfo", $con);

	$sql="INSERT INTO user (name, password)
	VALUES
	('$_POST[name_new]','$_POST[pwd_new]')";

	if (!mysql_query($sql,$con))
  	{
  	die('Error: ' . mysql_error());
  	}
	echo "1 record added";

	mysql_close($con)
?>
</body>
</html>