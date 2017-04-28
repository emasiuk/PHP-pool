#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$str = trim($str);
		$str = preg_split("/\s+/", $str);
		sort($str);
		if ($str[0] == "")
			return (NULL);
		else
			return ($str);
	}
	$i = 0;
	while ($i < $argc-1)
	{
		$arr2[$i] = ft_split($argv[$i + 1]);
		$i++;
	}
	$j = -1;
	if ($arr2[0] != NULL)
	{
		foreach ($arr2 as $value)
			foreach ($value as $str)
				$arr[++$j] = $str;
		sort($arr);
		foreach ($arr as $value)
			echo "$value\n";
	}
?>
