#!/usr/bin/php
<?php
	if ($argc == 4)
	{
		$argv[1] = trim($argv[1]);
		$argv[2] = trim($argv[2]);
		$argv[3] = trim($argv[3]);
		if ($argv[2] == "+")
			$res = $argv[1] + $argv[3];
		if ($argv[2] == "-")
			$res = $argv[1] - $argv[3];
		if ($argv[2] == "*")
			$res = $argv[1] * $argv[3];
		if ($argv[2] == "/" && $argv[3] != 0)
			$res = $argv[1] / $argv[3];
		if ($argv[2] == "%" && $argv[3] != 0)
			$res = $argv[1] % $argv[3];
		echo "$res\n";
	}
?>
