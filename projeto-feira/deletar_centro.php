<?php
//conecta e seleciona banco
$conexao=@mysql_connect("localhost", "root", "") or die("erro no MySQL:<br/>" . mysql_errno());
$db=@mysql_select_db("akitemos", $conexao) or die("Erro no MySQL:<br/>" . mysql_errno());

// Recupera os dados dos campos
$codigocentro = $resultado['id_centro_interesse'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $horario_inicio = $_POST['horario_inicio'];
    $horario_termino = $_POST['horario_termino'];
    $orientador = $_POST['orientador'];
    $quantidade_vagas = $_POST['quantidade_vagas'];
    

[b]// EXCLUI OS DADOS
$sql = mysql_query(" DELETE FROM clientes WHERE empresa='$empresa' ") or die(mysql_error());

// Se os dados forem inseridos com sucesso
            if ($sql){
                echo "Registro EXCLUIDO com sucesso.";
                echo "<a href='logado.php'> Voltar ao cadastro.</a>";}

// Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "<br />";
            }
        }
?>