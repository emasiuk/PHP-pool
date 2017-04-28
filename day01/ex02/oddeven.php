#!/usr/bin/php
<?php
	echo "Enter number: ";
	while (fscanf(STDIN, "%s\n", $number))
	{
		if (is_numeric($number))
		{
			if ($number % 2 == 0)
				echo "The number $number is even\n";
			else
				echo "The number $number is odd\n";
		}
		else
			echo "'$number' is not a number\n";
		echo "Enter number: ";
		$number = NULL;
	}
?>
