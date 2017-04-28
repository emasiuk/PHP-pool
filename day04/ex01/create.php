<?php
	if ($_POST['submit'] && $_POST['submit'] == 'OK') {
		if (!$_POST['login'] || !$_POST['passwd'])
			echo ("ERROR\n");
		else
		{
			$log = $_POST['login'];
			$flag = 0;
			$pass = $_POST['passwd'];
			$count = 0;
			$pass = hash("md5", $pass);
			if (file_exists("../private/passwd"))
			{
				$data = unserialize(file_get_contents("../private/passwd"));
				foreach ($data as $elem)
				{
					foreach ($elem as $key)
					{
						if ($key == $log)
						{
							$flag = 1;
							echo ("ERROR\n");
						}
					}
					$count++;
				}
				if ($flag != 1)
				{
					$data[$count] = array('login' => $log, "passwd" => $pass);
					file_put_contents("../private/passwd", serialize($data));
					echo("OK\n");
				}
			}
			else {
				mkdir("../private", 0777);
				$data[0] = array('login' => $log, "passwd" => $pass);
				file_put_contents("../private/passwd", serialize($data));
				echo("OK\n");
			}
		}
	}
 ?>
