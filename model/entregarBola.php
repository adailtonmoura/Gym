<?php

$ID = isset($_GET['id']) ? $_GET['id'] : 0;

$horaSaida = date('H:i:s');


                        $sql = "UPDATE `emprestimo` SET
                            hora = '$horaSaida'
                         WHERE id = $ID";

?>