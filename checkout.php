<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Checkout Mirror Fashion</title>
  </head>
  <body>

    <div class="container">
      <nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Mirror Fashion</a>
            <button class="navbar-toggle" type="button"
              data-target=".navbar-collapse" data-toggle="collapse">
              <span class="glyphicon glyphicon-align-justify"></span>
            </button>
        </div>
        <ul class="nav navbar-nav collapse navbar-collapse">
          <li><a href="sobre.php">Sobre</a></li>
          <li><a href="#">Ajuda</a></li>
          <li><a href="#">Perguntas frequentes</a></li>
          <li><a href="#">Entre em contato</a></li>
        </ul>
      </nav>
      <style>
        .navbar{
          margin: 0;
        }
      </style>
      <div class="row">
        <div class="jumbotron">
          <div class="container">
            <h1>Ótima escolha!</h1>
            <p>Obrigado por comprar na Mirror Fasion!<br>
              Preenchar seus dados para efetivar a compra.</p>
          </div>
        </div>
      <div class="col-sm-4">
        <div class="panel panel-default">
          <!-- PAINEL SUPERIOR -->
          <div class="panel-heading">
            <h2 class="panel-title">Sua compra</h2>
          </div>
          <!-- ############################ -->
          <div class="panel panel-body">
            <img src="img/produtos/foto<?php print $_POST['id'];?>-<?php print $_POST['cor'];?>.png"
            class="img-responsive img-thumbnail">
                <?php
                include("conexao.php");
                $query = "SELECT * FROM produtos WHERE id= $_POST[id]";
                $dados = mysqli_query($conexao, $query);
                $produtos = mysqli_fetch_array($dados);
                ?>
              <dl>
                <dt>Nome:</dt>
                <dd><?php print $produtos["nome"]; ?></dd>
                <dt>Preço:</dt>
                <dd><?php print $produtos["preco"]; ?></dd>
                <dt>Cor</dt>
                <dd><?php print $_POST["cor"];  ?></dd>
                <dt>Tamanho:</dt>
                <dd><?php print $_POST["tamanho"]; ?></dd>
              </dl>
          </div>
        </div>
      </div>
        <div>


  <!-- FORMULÁRIO DO CLIENTE  -->

          <form class="col-sm-8">
            <div class="row">
              <div class="col-dm-6"
                <fieldset>
                  <legend> Dados pessoais</legend>
                    <div class="form-group">
                      <label for="nome">Nome:</label>
                      <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="seu@email.com" required>
                    </div>
                    <div class="form-group">
                      <label for="cpf" >Cpf:</label>
                      <input type="text" class="form-control" name="cpf" id="cpf" data-mask="999.999.999-99" required>
                    </div>

                    <div>
                      <label>
                        <input class="checkbox" type="checkbox" value="sim" name="spam" checked>
                        Quero receber spam da Mirror Fashion
                      </label>
                    </div>
                </fieldset>
              </div>
      <!-- ############################################ -->
              <div clas="col-dm-6">
                <fieldset>
              <legend>Cartão de crédito</legend>
              <div class="form-group">
                <label for="num-cartao">Número do cartão</label>
                <input type="text" class="form-control" id="num-cartao" data-mask="9999 9999 9999 9999 - 999" name="num-cartao">
              </div>
              <div class="form-group">
                <label for="bandeira-cartao">Bandeira do cartão<label>
                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                  <option value="master">MasterCard</option>
                  <option value="visa">Visa</option>
                  <option value="amex">American Express</option>
                </select>
              </div>
              <div class="form-group">
                <label for="validade-cartao">Validade do cartão</label>
                <input type="month" id="validade-cartao" name="validade-cartao" class="form-control">
              </div>

            </fieldset>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">
              <span class="glyphicon glyphicon-thumbs-up"> </span>
              Confirmar Pedido
            </button>
          </form>
  <!-- FIM DO FORMULÁRIO -->

        </div>
      </div>
    </div>
  </body>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/inputmask-plugin.js"></script>
</html>
