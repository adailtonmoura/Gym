  <div class="container">
      <form action="" method="POST">
        <p id ="escolherBola" class="text-center"> Você quer pegar uma bola de: <?php echo $_GET["bola"]?></p>

        <div class="form-group">
          <label for="input">Matrícula</label>
          <input type="number" name ="matricula"class="form-control" id="input">
        </div>

        <button type="submit" name="submit" class="btn btn-success">Confirmar dados do aluno</button>
      </form>

      <?php if (isset($_GET['erro'])) { ?>
        <span class="error"><?php echo $_GET['erro'] ?></span>
     <?php } ?>


      <!-- se o botão foi clicado, include table.php (gerar a tabela)-->
      <?php
          if(isset($_POST['submit'])){
            include_once 'model/formarTabela.php';
          }
      ?>

  </div>