<?php
	if ($_GET['action'] == "set")
	   setcookie($_GET['name'], $_GET['value'], time() + 60 * 60 * 24 * 30);
	if ($_GET['action'] == "del")
	   setcookie($_GET['name'], "", 1);
	if ($_GET['action'] == "get")
	{
	   $temp = $_COOKIE[$_GET['name']];
	   if ($temp)
		   echo "$temp\n";
	}
?>
