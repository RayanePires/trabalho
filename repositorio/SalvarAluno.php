<?php
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=AlunoProfessor", "root", "");
	} catch (PDOException $erro) {
		echo $erro->getMessage();
	}

	require_once '../modelo/Aluno.php';
	$aluno = new Aluno();
	$aluno->setNome($_POST['nome']);
	$aluno->setIdade($_POST['idade']);
	$aluno->setCpf($_POST['cpf']);
	$aluno->setRa($_POST['ra']);
	$aluno->setSiape($_POST['siape']);
	
	try {
		$sql = "INSERT INTO aluno (nome, idade,cpf,ra,siape) VALUES 
			('" . $aluno->getNome() . "', '" . $aluno->getIdade() . "','" . $aluno->getCpf() . "','" . $aluno->getRa() . "','" . $aluno->getSiape() . "' )";

		$pdo->exec($sql);
		echo "<p>Inserido com sucesso.</p>";
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}

	//var_dump($aluno);

	//header('Location: /paginadestino.php');
?>