<table id="listardados" class="table table-striped table-bordered dataTable bg-success" style="width:100%">
    
    <?php
        include_once 'model/confirmarAluno.php';

            if(empty($result)) {
    ?>
            <span class="error">Preencha todos os campos</span>
    <?php
    }
        else if(mysqli_num_rows($result) == 0){
            ?> 
            <span class="error">Matrícula inválida</span>
            <?php
                
    }else{
        
        while ($dados = mysqli_fetch_assoc($result)){

    ?>
    
    <thead>
        <tr>
            <th class="text-light">Matrícula</th>
            <th class="text-light">Nome</th>
            <th class="text-light">Série</th>
            <th class="text-light">Curso</th>
        </tr>
    </thead>

    <tbody>

        <tr>

        <td class="table-light"><?php print($dados["matricula"]);?></td>
        <td class="table-light"><?php print($dados["nome"]);?></td>
        <td class="table-light"><?php print($dados["serie"]);?></td>
        <td class="table-light"><?php print($dados["curso"]);?></td> 
        
        <form action="model/realizarEmprestimo.php" method="POST">
        <input type="hidden" name="matricula" value="<?= $dados["matricula"]?>">       
        <input type="hidden" name="bola" value="<?= $_GET['bola']?>">       
        <caption><input type="submit" name="submit" class="btn btn-success"></input></caption>
        </form>

        </tr>

    <?php
        }
    }   
    ?>

    <tbody>
</table>