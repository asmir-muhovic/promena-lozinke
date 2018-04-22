<!DOCTYPE html>
<html>
<head>
	<title>Prijava</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<a href="promena_passworda.php" class="logbutton">Promena passworda!</a>
	<form action="logika/prijavise.php" method="post">
		<input type="email" name="email"
				placeholder="Unesite e-mail"
				required><br>
		<input type="password" name="password"
				placeholder="Unesite password" 
				required><br>
		<input type="submit" value="Prijavi se">
	</form>
</body>
</html>