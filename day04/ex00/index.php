<?php
	session_start();
	if ($_GET['submit'] && $_GET['submit'] == 'OK' && $GET['login'] != "" && $GET['passwd'] != "")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
?>
<html>
	<body>
		<form method="GET" action="index.php">
			<label for="login">Login:</label><br>
			<input type="text" name="login" value="<?php if($_SESSION['login']){echo($_SESSION['login']);}?>"><br>
			<label for="passwd">Password:</label><br>
			<input type="text" name="passwd" value="<?php if($_SESSION['passwd']){echo($_SESSION['passwd']);}?>"><br><br>
			<input type="submit" name="submit" value="OK">
		</form>
	</body>
</html>
