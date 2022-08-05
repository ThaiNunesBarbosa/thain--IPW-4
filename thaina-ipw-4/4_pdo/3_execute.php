<?php
	include '2_trycatch.php';

	//$query ="insert into teste (nome, email) values ('Thainá', 'thaina.nunes.barbosa@escola.pr.gov.br')";
	//$query = "update teste set nome = 'Jungkook' where id = 1 "; 
	$query = "delete from teste where id = 3";
	$sql = $conexao->prepare($query);
	$resultado = $sql->execute();
	
?>