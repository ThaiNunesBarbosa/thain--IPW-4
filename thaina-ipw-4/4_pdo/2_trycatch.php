<?php

	try{
	$conexao = new PDO("mysql:host=localhost;dbname=pdo","root","");
	}
	catch(\PDOException $e) {
		echo 'Não foi possível realizar a conexão';
		echo $e->getCode();
		echo $e->getMessage();
	}
?>