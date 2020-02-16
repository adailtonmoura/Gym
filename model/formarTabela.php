<table id="listar-dados" class="table table-striped table-bordered dataTable" style="width:100%">
    <thead>
        <tr>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Série</th>
            <th>Curso</th>
        </tr>
    </thead>

    <tbody>

        <?php
        include_once 'model/confirmarAluno.php';
            
        if (mysqli_num_rows($result) == 0){
        }else{
            
        while ($dados = mysqli_fetch_assoc($result)){

        ?>

        <tr>

        <td class="table-light"><?php print($dados["matricula"]);?></td>
        <td class="table-light"><?php print($dados["nome"]);?></td>
        <td class="table-light"><?php print($dados["serie"]);?></td>
        <td class="table-light"><?php print($dados["curso"]);?></td>          

        </tr>

        <?php
        }
    }
        ?>
    <caption><a class="btn btn-success" href="#" >Confirmar</a></caption>

    <tbody>
</table>