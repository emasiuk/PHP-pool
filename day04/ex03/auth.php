<?php
	function auth($login, $passwd)
	{
		if (!$login || !$passwd)
				echo ("ERROR\n");
		else
		{
			$flag = 0;
			$data = unserialize(file_get_contents("../private/passwd"));
			foreach ($data as $elem)
			{
				if ($elem['login'] == $login && $elem['passwd'] == hash("md5", $passwd))
				{
					$flag = 1;
					return (TRUE);
				}
			}
			if ($flag == 0)
				return FALSE;

		}
	}
?>
