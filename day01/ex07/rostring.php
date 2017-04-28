#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$str = trim($str);
		$str = preg_split("/\s+/", $str);
		if ($str[0] == "")
			return (NULL);
		else
			return ($str);
	}
	if ($argc > 1)
	{
		$arr = ft_split($argv[1]);
		$i = 0;
		while ($arr[++$i])
			echo "$arr[$i] ";
		echo "$arr[0]";
	}
?>
