<?php
	if ($_POST['submit'] && $_POST['submit'] == 'OK') {
		if (!$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'])
			echo ("ERROR\n");
		else
		{
			$log = $_POST['login'];
			$flag = 0;
			$pass = hash("md5", $_POST['oldpw']);
			$count = 0;
			$data = unserialize(file_get_contents("../private/passwd"));
			$newpass = hash("md5", $_POST['newpw']);
			foreach ($data as $elem)
			{
				if ($elem['login'] == $log && $elem['passwd'] == $pass)
				{
					$data[$count] = array("login" => $log,"passwd" => $newpass);
					file_put_contents("../private/passwd", serialize($data));
					echo("OK\n");
					$flag = 1;
				}
				$count++;
			}
			if ($flag == 0)
			{
				echo "ERROR";
			}
		}
	}
 ?>
