


  <?php
  //pagina de conexao
  include("conexao.php");
  //query de pesquisa
  $query = "SELECT * FROM produtos WHERE id = $_GET[id]";
  //executando a query
  $dados =  mysqli_query($conexao, $query);
  //transformando os dados recebidos em um vetor
  @$produtos = mysqli_fetch_array($dados);
  $produto_css = "<link rel='stylesheet' href='css/produtos.css'>";

  ?>

<!--  include capeçalho -->
  <?php
    $cabecalho_title = $produtos["nome"];
     include("cabecalho.php"); ?>
<!--  ######################-->


<div class="produtos-back">
  <div class=container>

    <div class="produto">
      <h1><?php print $produtos["nome"]; ?></h1>

      <p>Por apenas :<?php print $produtos["preco"];?></p>

      <!-- REDES SOCIAIS -->
      <ul class="social-produtos">
        <li>
          <div class="fb-like" data-href="http://mirrorfashion.net/loja"
          data-send="false" data-layout="box_count"
          data-width="58" data-show-faces="false"></div>
        </li>
        <li>
          <a href="https://twitter.com/share"
          class="twitter-share-button" data-count="vertical">Tweet</a>
        </li>
      </ul>

      <!-- ######################## -->

      <form action="checkout.php" method="POST">


        <input type="hidden" name="id" value="<?php print $produtos['id']?>">

        <fieldset class="cores">
          <legend>Escolha a cor:</legend>

          <input type="radio" name="cor" id="verde" value="verde" checked>
          <label for="verde">
            <img src="img/produtos/foto<?php print $produtos["id"]; ?>-verde.png" alt="verde">
          </label>

          <input type="radio" name="cor" id="rosa" value="rosa">
          <label for="rosa">
            <img src="img/produtos/foto<?php print $produtos["id"]; ?>-rosa.png" alt="rosa">
          </label>

          <input type="radio" name="cor" id="azul" value="azul">
          <label for="azul">
            <img src="img/produtos/foto<?php print $produtos["id"]; ?>-azul.png" alt="azul">
          </label>
        </fieldset>
        <fieldset class="tamanho">
          <legend>Escolha o tamanho</legend>
          <input type="range" min="36" max="46" value="42" step="2" name="tamanho">
            <output for="tamanho" name="tamanho-produto">42</output>
        </fieldset>
        <input type="submit" class=comprar value="Comprar">

      </form>
    </div>

    <div class="detalhes">
      <h2>Detalhes do produto.</h2>
      <p><?php print $produtos["descricao"]; ?></p>
        <table>
          <thead>
            <tr>
              <th>Características</th>
              <th>Detalhe</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Modelo</td>
              <td>Cardigã 7845</td>
            </tr>
            <tr>
              <td>Material</td>
              <td>Algodão poliester</td>
            </tr>
            <tr>
              <td>Cores</td>
              <td>Azul, Rosa e Verde</td>
            </tr>
            <tr>
              <td>Lavagem</td>
              <td>Lavar a mão</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>
<!-- IMPLEMENTANDO FERRAMENTAS FACEBOOK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- INPLEMENTANTO FERRAMENTAS TWITER -->
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
js.src="http://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
  <!-- Include rodape -->

  <?php include("rodape.php"); ?>
<!--  ############################ -->
