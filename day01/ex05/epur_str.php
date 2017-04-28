#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$str = trim($argv[1]);
		$str = preg_replace("/(\s){2,}/",' ',$str);
		echo "$str\n";
	}
?>
