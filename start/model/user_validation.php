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
			// include 'serv.php';
			function UserValidation($user, $pw)
			{
				if ($user != "admin") {
					print "Usuario no valido";
				} else {
					if ($pw != "123") {
						print "password incorrecta";
					} else {
						$_SESSION['user'] = $user;
						?>
						<script type="text/javascript">
							function redirection() {
								window.location = "../view/dashboard.php"
							}
							setTimeout("redirection()", 0000)
						</script>
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
