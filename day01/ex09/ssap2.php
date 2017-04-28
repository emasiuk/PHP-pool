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

	function cmp($a, $b)
	{
		if ($a === $b)
			return (0);
		if (ctype_alpha($a) && ctype_alpha($b))
			return (ord(strtolower($a)) - ord(strtolower($b)));
		if (ctype_alpha($a) || ctype_alpha($b))
			return ((ctype_alpha($a) ? -1 : 1));
		if (is_numeric($a) && is_numeric($b))
			return (ord(strtolower($a)) - ord(strtolower($b)));
		if (is_numeric($a) || is_numeric($b))
			return ((is_numeric($a) ? -1 : 1));
		return (ord($a) - ord($b));
	}


	function call($a, $b)
	{
		$len1 = strlen($a);
		$len2 = strlen($b);
		$i = 0;
		while (ord($a[$i]) && ord($b[$i]) && !$res = cmp($a[$i], $b[$i]))
			$i++;
		if (!$res)
			return ($len1 > $len2 ? 1 : -1);
		return ($res);
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
		usort($arr, "call");
		foreach ($arr as $value)
			echo "$value\n";
	}
?>
