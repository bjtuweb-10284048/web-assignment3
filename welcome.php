<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>
</head>

<body>

/*
用mysql连接，读取用户资料，判断登录方法为，从user表中选取，当发生输入name与表里name一致，且password也一致的情况，则返回值为true，
登录成功，否则失败，输出用户名或密码错误。
* /
<?php
    $con = mysql_connect("localhost","root","");
	if (!$con)
 	{
		die('Could not connect: ' . mysql_error());
  	}
    
    mysql_select_db("userinfo", $con);

	$result = mysql_query("SELECT * FROM user");

 	$login_flag = false;
	while($row = mysql_fetch_array($result))
  	{
		if ($row['name'] == $_POST["name"]  &&   $row['password'] == $_POST["pwd"])
			$login_flag = true;
  	}
	
	if ($login_flag==true)
	{
		echo "Welcome"."  ".$_POST["name"]; 
		echo "<br/>";
	}
	else
	{
		echo "用户名或密码错误";
	}

	mysql_close($con);
?>

</body>
</html>