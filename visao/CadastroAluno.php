<html>
	<head>
		<title>Atividade 1 de Web 2</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>
	<body>
	
	
	<form action="../Repositorio/SalvarAluno.php"method="POST">


		<div class="container">
			<?php include("../layout/cabecalho.html"); ?>
			<div class="row">
				<?php include("../layout/menu.html") ?>
				<div class="col-md-9">
					<form action="../repositorio/SalvarAluno.php" method="POST">
						<label>Nome: </label><input class="form-control" type="text" onblur="saidaNome();" name="nome" id="nomeID"/>
						<label>Idade: </label><input class="form-control" type="text" name="idade" id="idadeID" onblur="verificaIdade();"/>
						<p id="msgIdade"></p>
						<label>CPF: </label><input class="form-control" type="text" name="cpf" id="cpfID" onblur="verificaCpf();"/>
						<p id="msgCpf"></p>
						<label>Siape: </label><input class="form-control" type="text" name="siape" id="siapeID" onblur="verificaSiape();"/>
						<p id="msgSiape"></p>
						<label>Ra: </label><input class="form-control" type="text" name="ra" id="raID" onblur="verificaRa();"/>
						<p id="msgRa"></p>
						<input class="btn btn-primary" type="submit" value="Salvar" />
						<input class="btn btn-primary" type="submit" name="bExibir" value="exibir" />
                        <input class="btn btn-primary" type="reset" name="bRemover" value="remover" />
						<input class="btn btn-primary" type="reset" name="bEditar" value="editar" />
					</form>
				</div>
			</div>
			<?php include("../layout/rodape.html"); ?>
		</div>	
	</body>
</html>