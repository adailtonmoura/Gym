        <div class="home">
            <div class="modulo">
                <a href="?pagina=emprestimo&bola=Futebol">
                    <img src="img/soccer.png" alt="bola de futebol">
                </a>
            </div>
            <div class="modulo">
                <a href="?pagina=emprestimo&bola=Basquete">
                    <img src="img/basketball.png" alt="bola de basquete">
                </a>
            </div>
            <div class="modulo">
                <a href="?pagina=emprestimo&bola=Voleibol">
                    <img src="img/voleyball.png" alt="bola de voleibol">
                </a>
            </div>
            <div class="modulo">
                <a href="?pagina=emprestimo&bola=Handebol">
                    <img src="img/ball.png" alt="bola de handebol">
                </a>
            </div>

            <?php if (isset($_GET['success'])) { ?>
                   
                    <!-- Small modal -->

                    <div id="myModal" class="modal fade bd-example-modal-sm " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" data-backdrop="false">
                    <div class="modal-dialog modal-sm" role="document">
                        <div id="modalcorpo"class="modal-content">
                            <p><span class="success"><?php echo $_GET['success'] ?></span></p>
                        </div>
                    </div>
                    </div>
                    
            <?php } ?>

        </div>

     