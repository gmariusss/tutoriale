<html>

	<head>
		<title>Informatii generale</title>
	</head>

	<body>

	<?php
	if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	echo $username . "<br>";
	echo $password . "<br>";
	}


	?>

	</body>
</html>