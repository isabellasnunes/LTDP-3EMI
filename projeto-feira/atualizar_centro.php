<?php
	var_dump ($_POST);
	
	$nome = $_POST['nome'];
	 
	
	$descricao = $_POST['descricao'];
	$horario_inicio = $_POST['horario_inicio'];
	$horario_termino = $_POST['horario_termino'];
	$orientador = $_POST['orientador'];
	$quantidade_vagas = $_POST['quantidade_vagas'];
	
	include 'includes/conexao.php';
	
	
	$up = mysql_query("UPDATE tb_centro_interesse SET nome='$nome', descricao='$descricao', horario_inicio='$horario_inicio', horario_termino='$horario_termino', orientador='$orientador', quantidade_vagas'$quantidade_vagas', WHERE id_centro_interesse=$id");
	
	if(mysql_affected_rows() > 0){
		echo "Sucesso: Atualizado corretamente!";
	}else{
		echo "Aviso: Não foi atualizado!";
	}
	
	mysql_close($conexao);
?>