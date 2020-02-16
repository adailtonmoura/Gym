<?php include_once('header.php'); ?>

    <div class="principal">
    <?php
    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

        switch($pagina){
            
            case 'home':
                include_once 'view/home.php';
                break;

            case 'emprestimo':
                include_once 'view/emprestimo.php';
                break;

                case 'consulta':
                    include_once 'view/consulta.php';
                    break;
        }
        ?>

    </div>

<?php include_once('footer.php');?>