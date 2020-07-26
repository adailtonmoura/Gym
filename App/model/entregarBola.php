<?php

include_once'Database.php';
$ID = isset($_GET['id']) ? $_GET['id'] : 0;

date_default_timezone_set('America/Sao_Paulo');
$horaSaida = date('H:i:s');


        $sql = "UPDATE `emprestimo` SET
        horasaida = '$horaSaida'
        WHERE id = $ID";

        $result = $conexao->query($sql);

        header("Location: http://localhost/Gym/?pagina=consulta")


?>