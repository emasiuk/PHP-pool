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
	if ($argc == 2)
	{
		$i = -1;
		$str = trim($argv[1]);
		$str = preg_replace("/(\s){2,}/",' ',$str);
		$arr = str_replace(" ","",$str);
		print_r($arr);
		echo "\n";
		$arr = ft_split($arr);
		if ($arr = explode("+", $arr[0]) )
			if (is_numeric($arr[1]) && is_numeric($arr[0]))
				$res = $arr[0] + $arr[1];
			else
				echo "Syntax error";
		else if ($arr = explode("-", $arr[0]) )
			if (is_numeric($arr[1]) && is_numeric($arr[0]))
				$res = $arr[0] - $arr[1];
			else
				echo "Syntax error";
		else if ($arr = explode("*", $arr[0]) )
			if (is_numeric($arr[1]) && is_numeric($arr[0]))
				$res = $arr[0] * $arr[1];
			else
				echo "Syntax error";
		else if ($arr = explode("/", $arr[0]) )
			if (is_numeric($arr[1]) && is_numeric($arr[0]))
				$res = $arr[0] / $arr[1];
			else
				echo "Syntax error";
		else if ($arr = explode("%", $arr[0]) )
			if (is_numeric($arr[1]) && is_numeric($arr[0]))
				$res = $arr[0] % $arr[1];
			else
				echo "Syntax error";
		if ($res != NULL)
			echo "$res\n";
	}
?>
