<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = 'Mikasa.fofa';
$banco = 'testebanco';

//conecta ao banco de dados mySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

//caso algo tenha dado errado, exibe uma mensagem de erro:
if (mysqli_connect_errno()) trigger_error(mysqli_conect_error());

$sql = "SELECT 'nm_aluno', 'cd_idade' FROM 'tb_aluno'";

$query = $mysqli->query($sql);

while($dados = $query->mysqli_fetch_array()){
    echo 'Nome: ' . $dados['nm_aluno'];
    echo 'Idade: ' . $dados['cd_idade'];

}

echo 'Registros encontrados: ' . $query->num_rows;

?>
