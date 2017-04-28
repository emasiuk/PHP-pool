<?php
	function ft_is_sort($tab)
	{
		$arr = $tab;
		$arr = sort($arr);
		if ($arr === $tab)
			return (1);
		return (0);
	}
?>
