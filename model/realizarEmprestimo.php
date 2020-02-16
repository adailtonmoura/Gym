<?php

    include_once 'Database.php';
    $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : '';
    $bola = isset($_POST['bola']) ? $_POST['bola'] : '';

    date_default_timezone_set('America/Sao_Paulo');
    
    
    $horaEntrada = date('H:i:s');

   

    if(!empty($matricula)){

        $sql = "INSERT INTO `emprestimo`(`matricula`, `tipo`, `horaentrada`, `horasaida`) VALUES ('$matricula','$bola','$horaEntrada','')";
        
        if ($conexao->query($sql) === TRUE) {
            header("Location: http://localhost/Gym/?pagina=home&success= Cadastrado com Sucesso");
        } else {
            echo "Erro: " . $sql . "<br>" . $conexao->error;
        }
    }

?>