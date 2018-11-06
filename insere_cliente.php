<?php
$inputNome=$_POST['inputNome'];
$inputEmail=$_POST['inputEmail'];
$inputCodigo=$_POST['inputCodigo'];
$inputCPF=$_POST['inputCPF'];
$inputCidade=$_POST['inputCidade'];
$inputBday=$_POST['inputBday'];

$res1 = mysql_connect("localhost", "root", "12345678");
if ($res1){
	$sql = "insert into clientee"
	." (nome_cliente,email_cliente,cod_cliente,cpf_cliente,cidade_cliente,dtns_cliente)"
	." values ('$inputNome', '$inputEmail', '$inputCodigo', '$inputCPF',
	'$inputCidade', '$inputBday')";

	mysql_select_db("ingressoe");
	$res2 = mysql_query("$sql", $res1);
	if ($res2){
		$message = "Cadastradado com sucesso!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	} else { 
		echo '<script>alert("Erro na inclusão!");<script>';
	}
} else { 
	echo '<script>alert("Erro na conexão!");<script>'; 
}
mysql_close($res1);
?>

<!-- RETORNO DO HTML PRINCIPAL -->
<form method="POST" action="cadastro_cliente.html">
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>IngressoE  - trazendo a fantasia para sua festa</title>

		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-light bg-light mb-2">
			<a class="navbar-brand" href="#">
				<img src="https://png.icons8.com/ios/1600/giving-tickets.png" width="30" height="30" class="d-inline-block align-top" alt="">
				<b>IngressosE</b> - trazendo a fantasia para sua festa
			</a>
		</nav>
		<section class="container-fluid">
			<section class="row">
				<section class="col-lg-8 offset-lg-2 w-100 mt-3">
					<section>
						<div class="card text-center">
							<div class="card-header">
								<ul class="nav nav-tabs card-header-tabs">
									<li class="nav-item">
										<a class="nav-link text-secondary active" href="#">Sobre</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-secondary" href="cadastro_cliente.html">Cadastrar Cliente</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-secondary" href="cadastro_eventos.html">Cadastrar Evento</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-secondary" href="cadastro_reserva.html">Cadastrar Reserva</a>
									</li>
								</ul>
							</div>
							<div class="card-body">
								<h5 class="card-title"><b class="text-success">IngressoE</b> - trazendo a fantasia para sua festa!</h5>
								<hr>
								<p class="text-left font-weight-light">Pensando mais a longo prazo, o surgimento do comércio virtual talvez venha a ressaltar a relatividade das novas proposições. Caros amigos, o desenvolvimento contínuo de distintas formas de atuação garante a contribuição de um grupo importante na determinação das direções preferenciais no sentido do progresso. Neste sentido, a adoção de políticas descentralizadoras ainda não demonstrou convincentemente que vai participar na mudança de todos os recursos funcionais envolvidos. As experiências acumuladas demonstram que o comprometimento entre as equipes estimula a padronização das formas de ação. <br><br>
								Acima de tudo, é fundamental ressaltar que a estrutura atual da organização apresenta tendências no sentido de aprovar a manutenção dos índices pretendidos. É claro que o acompanhamento das preferências de consumo cumpre um papel essencial na formulação dos paradigmas corporativos. O cuidado em identificar pontos críticos na competitividade nas transações comerciais afeta positivamente a correta previsão do processo de comunicação como um todo. Podemos já vislumbrar o modo pelo qual a execução dos pontos do programa agrega valor ao estabelecimento dos relacionamentos verticais entre as hierarquias. </p>
								<a href="RelatorioCliente.php" ><button type="submit" class="btn btn-success col-lg-4"><i class="fas fa-users"></i>	 <b>CADASTRADOS</b> na IngressoE</button></a>
							</div>
						</div>
					</section>

				</section>
			</section>
		</section>

		<section class="col-lg-12 w-100 mt-5 bg-light fixed-bottom" id="footer">
			<footer>
				<div class="footer-copyright text-center py-3">© 2018 Copyright -
					<a href="https://mdbootstrap.com/bootstrap-tutorial/"> ingressose.com</a>
				</div>
			</footer>
		</section>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
	</body>
	</html>
</form>
