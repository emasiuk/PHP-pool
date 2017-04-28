#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$i = 2;
		$a = strlen($argv[1]);
		while ($argv[++$i])
			if (!(strncmp($argv[1], $argv[$i], $a - 1)))
			{
				$arr = explode(":", $argv[$i]);
				$res = $arr[1];
			}
		if ($res != NULL)
			echo "$res\n";
	}
?>
