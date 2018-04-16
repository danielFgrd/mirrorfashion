
<!-- Requere para trazer o cabeçalho -->
<?php
  include("conexao.php");
  $cabecalho_title = "Mirror Fashion";
 include("cabecalho.php"); ?>
<!-- ######################################## -->
<div class="container">

		<div class="container-destaque destaque">
			<section class="busca">
				<h2>Busca</h2>
				<form action="http://google.com.br/search" class="form-busca">
					<input type="search" name="q" id="q">
					<input type="image" src="img/busca.png"  value="buscar">
				</form>
				<!--busca concluida-->
			</section>
			<section class="menu-departamento destaque">
				<h2 class="destaque">Destaques</h2>
				<nav>
					<ul>
						<li><a href="#" >Blusas e Camisas</a>
							<ul>
								<li>
									<a href="#" >Manga Curta</a>
								</li>
								<li>
									<a href="#" >Manga Cumprida</a>
								</li>
								<li>
									<a href="#" >Camisa Social</a>
								</li>
								<li>
									<a href="#" >Camisa Causual</a>
								</li>
							</ul>
						</li>

						<li><a href="#" >Calças</a></li>
						<li><a href="#" >Saias</a></li>
						<li><a href="#" >Vestidos</a></li>
						<li><a href="#" >Sapatos</a></li>
						<li><a href="#" >Bolsas e Carteiras</a></li>
						<li><a href="#" >Acessórios</a></li>
					</ul>
				</nav>
			</section>
			<!--fim dos departamentos-->
			</div><!--fim dos destaques-->
				<figure class="banner-rotativo">
					<img src="img/destaque-home.png" alt="Promoção: Big City Nigth" class="banner">
					<figcaption class="controle"><a href="#" class="pause" value="pause"> Controle </a> </figcaption>
				</figure>
			<div class="containerPaineis">
			<section class="painel novidades">
				<h2>Novidades</h2>
        <ol>
          <?php
          $query = "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 12 ";
          $dados =  mysqli_query($conexao, $query);

          while ($produtos = mysqli_fetch_array($dados)):
          ?>

          <li>
            <a href="produto.php?id=<?php print $produtos['id'];?>">
              <figure>
                <img src="img/produtos/miniatura<?php print $produtos['id']; ?>.png"  alt=<?php $produtos["nome"]?>>
                <figcaption><?php print $produtos['nome']; print "<p>Por apenas: </p>"; print $produtos['preco']; ?></figcaption>
              </figure>
            </a>
          </li>


          <?php endwhile ?>
        </ol>
        <button type="button">Mostrar mais</button>
			</section>
<!-- FIM DA SESSÃO NOVIDADES -->
			<section class="painel mais-vendidos ">
				<h2>Mais vendidos</h2>
				<ol>
          <?php
          $query1 = "SELECT * FROM produtos ORDER BY vendas LIMIT 0, 12";
          $dados1 = mysqli_query($conexao, $query1);

          while($produtos1 = mysqli_fetch_array($dados1)):
          ?>

  					<li>
  						<a href="produto.php?id=<?=$produtos1['id']?>">
  							<figure>
  								<img src="img/produtos/miniatura<?php print $produtos1['id']?>.png">
  								<figcaption><?php print $produtos1['nome']; print "<p>Por apenas: </p>"; print $produtos1['preco']; ?></figcaption>
  							</figure>
  						</a>
  					</li>

			    <?php endwhile?>
				</ol>
        <button type="button" >Mostrar mais</button>
			</section>
		</div>
	</div>


<!-- include responsável por trazer o rodapé -->
<?php include("rodape.php"); ?>
<!-- ####################################### -->
