<?php
    
// Buscar as configurações do banco de dados
require_once ("conexao.php");

$cod = $_GET['id'];

$sql = "UPDATE tarefasaroeira SET situacao = 'pronto' WHERE id = $cod";

$resultado = mysqli_query($con, $sql);

// Retornando o resultado
if($resultado == true){
    header("Location:../index.php");
} else {
    echo "Falha ao tentar excluir os dados!";
}
