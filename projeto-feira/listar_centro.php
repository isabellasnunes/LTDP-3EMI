<! DOCTYPE html>
<html lang="pt-br">
	<head>
		
		<title>..:: lista do CI ::..</title>
		
		<!--  Nucleo do jquery -->
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
		
	</head>
	<body>
		<div class="container-fluid">
		
		
			<section class="container">
				<h1 id="admin">Listar Centro de Interesse</h1>
				<div class="thumbnail" id="conteudo">
					<form id="mainform" action="">
						<table width="100%" class="table-striped" id="product-table">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Descricao</th>
									<th>Hora Inicio</th>
									<th>Hora Termino</th>
									<th>Orientador</th>
									<th>Quantidade Vagas</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
								
								$servidor = "localhost";
								$usuario = "root";
								$senha = "";
								
								/*configurco de cesso o bnco de ddos*/
								$nome_banco = "bd_centro_de_interesse";
								
								$conexao = mysql_connect($servidor, $usuario, $senha);
								
								/*verifica se a conexao realmente foi criada*/
								/*se (nao conexao) entao, ou seja, conexao e falsa*/
								if (!$conexao) {
									echo "N�o foi poss�vel connectar ao servidor";
									exit;
								}else{/*senao*/
									echo "<h1>Conectou!</h1>";
								}
								
								/*Selecione o banco de dados ou morra*/
								$banco = mysql_select_db($nome_banco, $conexao) or die ("N�o foi poss�vel conectar ao banco de dados");
								
								
								
									// Corrige a acentuacao
									mysql_query("SET NAMES 'utf8'");
									mysql_query('SET character_set_connection=utf8');
									mysql_query('SET character_set_client=utf8');
									mysql_query('SET character_set_results=utf8');
									
									$sql = mysql_query("SELECT * FROM tb_centro_interesse");
									while($resultado = mysql_fetch_array($sql)){
										$codigocentro = $resultado['id_centro_interesse'];
										$nome = $resultado['nome'];
										$descricao = $resultado['descricao'];
										$horario_inicio = $resultado['horario_inicio'];
										$horario_termino =$resultado['horario_termino'];
										$orientador = $resultado['orientador'];
										$quantidade_vagas = $resultado['quantidade_vagas'];
									
									
								
										echo "<tr>
												<td>".$nome."</td>
												<td>".$descricao."</td>
												<td>".$horario_inicio."</td>
												<td>".$horario_termino."</td>
												<td>".$orientador."</td>
												<td>".$quantidade_vagas."</td>
												<td>	
												<a href='editar_centro.php?id=".$codigocentro."' title='Editar' class='glyphicon glyphicon-edit options-edit'></a>
													<a href='deletar_centro.php?id=".$codigocentro."' id='link-delete' title='Deletar' class='glyphicon glyphicon-minus-sign options-delet' data-title='Exclus�o'></a>
												
												</td>
											  </tr>";
									}
								?>
							</tbody>
						</table>
					</form>
				</div>
			</section>
			<footer class="row footer">
				hola, mucho gusto!
			</footer>	
		<!-- END: footer -->
		</div>
		<script src="jquery/jquery-1.12.3.min.js" type="text/java"></script>
		<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		
	</body>
</html>