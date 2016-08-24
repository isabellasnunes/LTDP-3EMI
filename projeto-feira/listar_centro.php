<! DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>..:: lista do CI ::..</title>
		
		<!--  Nucleo do jquery -->
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
		
	</head>
	<body>
		<div class="container-fluid">
		
		
			<section class="container">
				<h1 id="admin">Listar Downloads</h1>
				<div class="thumbnail" id="conteudo">
					<form id="mainform" action="">
						<table width="100%" class="table-striped" id="product-table">
							<thead>
								<tr>
									<th>Cod. Download</th>
									<th>Título do Download</th>
									<th>Categoria</th>
									<th>Opções</th>
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
									echo "Não foi possível connectar ao servidor";
									exit;
								}else{/*senao*/
									echo "<h1>Conectou!</h1>";
								}
								
								/*Selecione o banco de dados ou morra*/
								$banco = mysql_select_db($nome_banco, $conexao) or die ("Não foi possível conectar ao banco de dados");
								
								
								
									// Corrige a codificação
									mysql_query("SET NAMES 'utf8'");
									mysql_query('SET character_set_connection=utf8');
									mysql_query('SET character_set_client=utf8');
									mysql_query('SET character_set_results=utf8');
									
									$sql = mysql_query("SELECT * FROM tb_centro_interesse");
									while($resultado = mysql_fetch_array($sql)){
										$nome = $resultado['nome'];
										
									
								
										echo "<tr>
												<td>".$nome."</td>
												<td></td>
												<td></td>
												<td>
													<a href='download_editar.php?id=".$id_downloads."' title='Editar' class='glyphicon glyphicon-edit options-edit'></a>
													<a href='download_deletar.php?id=".$id_downloads."' id='link-delete' title='Deletar' class='glyphicon glyphicon-minus-sign options-delet' data-title='Exclusão'></a>
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
				Rodape
			</footer>	
		<!-- END: footer -->
		</div>
		<script src="jquery/jquery-1.12.3.min.js" type="text/java"></script>
		<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		
	</body>
</html>