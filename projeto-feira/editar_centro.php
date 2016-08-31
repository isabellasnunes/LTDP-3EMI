<?php

//conecta e seleciona banco
$conexao=@mysql_connect("localhost", "root", "") or die("erro no MySQL:<br/>" . mysql_errno());
$db=@mysql_select_db("akitemos", $conexao) or die("Erro no MySQL:<br/>" . mysql_errno());

$nome = $_GET['id'];

$sql = mysql_query("SELECT * FROM centro WHERE centro =  '".$_GET['id']."' ");

$row = mysql_fetch_array($sql);


$nome =  $row['nome'];
$descricao =  $row['descricao'];
$horario_inicio =  $row['horario_inicio'];
$horario_termino =  $row['horario_termino'];
$orientador =  $row['orientador'];
$quantidade_vagas =  $row['quantidade_vagas'];




?>
<form id="form1" name="form1" method="post" action="salvar.php">
<table width="400" border="0" align="center">
<tr><td width="1">nome:</td>
<td width="400"><input name="nome" type="text" size="50" id="nome" maxlength="100" value="<?php echo $row["nome"]; ?>" /></td>
</tr>

<tr><td width="1">descricao:</td>
<td width="400"><input name="descricao" type="text" size="50" id="descricao" maxlength="100" value="<?php echo $row["descricao"]; ?>" /></td>
</tr>

<tr><td width="1">horario inicio:</td>
<td width="400"><input name="horario_inicio" type="text" size="50" id="horario_inicio" maxlength="100" value="<?php echo $row["horario_inicio"]; ?>" /></td>
</tr>

<tr><td width="1">horario termino:</td>
<td width="400"><input name="horario_termino" type="text" size="50" id="horario_termino" maxlength="100" value="<?php echo $row["horario_termino"]; ?>" /></td>
</tr>

<tr><td width="1">orientador:</td>
<td width="400"><input name="orientador" type="text" size="50" id="orientador" maxlength="100" value="<?php echo $row["orientador"]; ?>" /></td>
</tr>

<tr><td width="1">quantidade vagas:</td>
<td width="400"><input name="quantidade_vagas" type="text" size="50" id="quantidade_vagas" maxlength="100" value="<?php echo $row["quantidade_vagas"]; ?>" /></td>
</tr>

<input type="submit" name="submit" value="Salvar"></td>
</tr>
</table>
</form>