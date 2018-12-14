<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
	<?php

	function UserValidation($user, $pw)
	{
		if ($user == "admin") {

			if ($pw != "123") {
				print "password incorrecta";
			} else {
				$_SESSION['user'] = $user;
				?>
				<script type="text/javascript">
					function redirection() {
						window.location = "../view/dashboard"
					}
					setTimeout("redirection()", 0000)</script>
				<?php
			}

		} else if ($user == "recep") {

			if ($pw != "456") {
				print "password incorrecta";
			} else {
				$_SESSION['user'] = $user;
				?>
				<script type="text/javascript">
					function redirection() {
						window.location = "../view/dashboard"
					}
					setTimeout("redirection()", 0000)</script>
				<?php
			}

		} else if ($user == "mesero") {

			if ($pw != "789") {
				print "password incorrecta";
			} else {
				$_SESSION['user'] = $user;
				?>
				<script type="text/javascript">
					function redirection() {
						window.location = "../view/add"
					}
					setTimeout("redirection()", 0000)</script>
				<?php
			}
		}
	}
	
	function logaut()
	{
		session_destroy();
	}
	?>
</body>
</html>