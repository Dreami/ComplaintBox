<html>
	<body>
		Gracias por enviarnos su queja, <?php echo $_POST["name"] . " " . $_POST["apellidos"]; ?><br>
		Pronto le llamaremos a su celular: <?php echo $_POST["tel"]?><br>
		Y si no contesta nuestra llamada le enviaremos un correo a: <?php echo $_POST["email"]?><br>
		Su queja: <?php echo $_POST["queja"] ?>
	</body>
</html>