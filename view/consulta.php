<div class="container">
    <table id="listar-dados" class="table table-striped table-bordered dataTable bg-success" style="width:100%">
    
    
    <thead>
        <tr>
            <th class="text-light">Nome</th>
            <th class="text-light">Tipo</th>
            <th class="text-light">Hora de entrada</th>
            <th class="text-light">Hora de saída</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

    <?php
        include_once 'model/listarEmprestimos.php';      
        
        while ($dados = mysqli_fetch_assoc($result)){

    ?>
    


        <tr>

            <td class="table-light"><?php print($dados["matricula"]);?></td>
            <td class="table-light"><?php print($dados["tipo"]);?></td>
            <td class="table-light"><?php print($dados["horaentrada"]);?></td>
            <td class="table-light"><?php print($dados["horasaida"]);?></td>
            <td class="table-light"><a style="text-decoration:none;" href="model/entregarBola.php?id=<?= $dados["id"]?>">Entrega</a></td>

        </tr>

    <?php
        }   
    ?>

    <tbody>
</table>
</div>
