<! DOCTYPE html>
<html lang="pt-br">
<head>
<link href="estilo.css" rel="stylesheet">
<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<title>..:: Editar o CI ::..</title>


<!--  Nucleo do jquery -->
<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

	                                                                          
	<?php

		include 'includes/conexao.php';
		
		$codigo = $_GET['id'];
		
		$sql = mysql_query("SELECT * FROM tb_centro_interesse WHERE id_centro_interesse =  '".$codigo."' ");
		
		$resultado = mysql_fetch_array($sql);
		
		
		$codigocentro = $resultado['id_centro_interesse'];
		$nome = $resultado['nome'];
		$descricao = $resultado['descricao'];
		$horario_inicio = $resultado['horario_inicio'];
		$horario_termino =$resultado['horario_termino'];
		$orientador = $resultado['orientador'];
		$quantidade_vagas = $resultado['quantidade_vagas'];
		
		
	?>
	<body>
<div id="container" class="container">

	<img class="img-responsive centralizada"src="C:/xampp/htdocs/Isabella(projeto)/wbs.jpg" width="150" height="90" />
	
	<header class="centralizado">
	<h1> Editar Centro </h1>
	</header>
	
	<form id="form1" name="form1" method="post" action="atualizar_centro.php">
	
		<div class="form-group">
			<span class="glyphicon glyphicon-user"></span>
				<label for="txt_codigo">Nome:</label>
				<!-- a tag input representa uma entrada de dados do usuario, é necessário informar o tipo desta entrada de dados. -->
				<input type="text"
					class="form-control" id="txt_name" name="nome" value="<?php echo $nome; ?>"/>
		</div>
			<div class="form-group">
			<span class="glyphicon glyphicon-user"></span>
				<label for="txt_codigo">Descrição:</label>
				<!-- a tag input representa uma entrada de dados do usuario, é necessário informar o tipo desta entrada de dados. -->
				<input type="text"
					class="form-control" id="txt_name" name="nome" value="<?php echo $descricao; ?>"/>
		</div>
					
				
				


<tr><td width="1">horario inicio:</td>
<td width="400"><input name="horario_inicio" type="text" size="50" id="horario_inicio" maxlength="100" value="<?php echo $horario_inicio; ?>" /></td>
</tr>

<tr><td width="1">horario termino:</td>
<td width="400"><input name="horario_termino" type="text" size="50" id="horario_termino" maxlength="100" value="<?php echo $horario_termino; ?>" /></td>
</tr>

<tr><td width="1">orientador:</td>
<td width="400"><input name="orientador" type="text" size="50" id="orientador" maxlength="100" value="<?php echo $orientador; ?>" /></td>
</tr>

<tr><td width="1">quantidade vagas:</td>
<td width="400"><input name="quantidade_vagas" type="text" size="50" id="quantidade_vagas" maxlength="100" value="<?php echo $quantidade_vagas; ?>" /></td>
</tr>

<input type="submit" name="submit" value="Salvar"></td>
</tr>
</table>
</form>
</html>