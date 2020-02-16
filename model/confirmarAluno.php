<?php

include_once 'Database.php';

$matricula = isset($_POST['matricula']) ? $_POST['matricula'] : '';

if(!empty($matricula)){

    $sql = "SELECT * FROM aluno WHERE matricula = '$matricula'";
    $result = $conexao->query($sql);
}


?>

