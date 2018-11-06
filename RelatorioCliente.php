<html>
<head>
	<title>Exibir dados com PHP/MySql</title>
	<meta charset="ISO-8859-1">

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
	$res1 = mysql_connect("localhost","root","12345678");
	mysql_select_db("ingressoe");
	$sql = "select nome_cliente,cidade_cliente,email_cliente from clientee";
	$res = mysql_query("$sql", $res1);
	?>
	<nav class="navbar navbar-light bg-light mb-2">
		<a class="navbar-brand" href="#">
			<img src="https://png.icons8.com/ios/1600/giving-tickets.png" width="30" height="30" class="d-inline-block align-top" alt="">
			<b>IngressosE</b> - trazendo a fantasia para sua festa
		</a>
		<a href="index.html"><button type="submit" class="btn btn-success col-lg-12 offset-lg-"><i class="fas fa-bars"></i>	<b>RETORNAR</b> para o menu principal</button></a>
	</nav>

	<h2 class="mt-5 text-light bg-dark text-center col-lg-10 offset-lg-1">LISTA DE TODOS NOSSOS CLIENTES <br><hr class="bg-success pb-3"></h2>

	<table border="3" class="col-lg-10 offset-lg-1">
		<tr>
			<th bgcolor="#4B4A49" width="15%">
				<p align="CENTER">
					<font color="#FFFFFF">NOME</font>
				</p>
			</th>
			<th bgcolor="#4B4A49" width="25%">
				<p align="CENTER">
					<font color="#FFFFFF">CIDADE</font>
				</p>
			</th>
			<th bgcolor="#4B4A49" width="40%">
				<p align="CENTER">
					<font color="#FFFFFF">EMAIL</font>
				</p>
			</th>
		</tr>

		<?php while($escrever = mysql_fetch_array($res)){?>
			<table border="0" class="col-lg-10 offset-lg-1">
				<tr>
					<th bgcolor="#4B4A49" width="25%">
						<p align="left">
							<font color="#FFFFFF"><?php echo $escrever["nome_cliente"];?></font>
						</p>
					</th>
					<th bgcolor="#4B4A49" width="25%">
						<p align="left">
							<font color="#FFFFFF"><?php echo $escrever["cidade_cliente"];?></font>
						</p>
					</th>
					<th bgcolor="#4B4A49" width="40%">
						<p align="left">
							<font color="#FFFFFF"><?php echo $escrever["email_cliente"];?></font>
						</p>
					</th>
				</tr>
			</table>
			<?php
		}
		?>
		<?php
		mysql_close($res1);
		?>
	</table>

</body>
</html>






