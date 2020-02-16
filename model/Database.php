<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "MyPassword";
$database = "ginasio";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);  

if (!$conexao) {
    die("FALHA NA CONEXÃO".mysqli_connect_error());
}
mysqli_set_charset($conexao,"utf-8");
?>