		<?php
			$cabecalho_title = "Mirror Fashion";
			include("cabecalho.php");
		?>
		<!-- In�cio da se��o principal -->
		<section>
			<div class="container destaque">
				<!-- In�cio da barra de busca -->
				<section class="busca">
					<h2>Busca</h2>
					
					<form>
						<input type="search" />
						<input type="image" src="img/busca.png" />
					</form>
				</section>
				<!-- Fim da barra de busca -->
				<!-- In�cio do menu de departamentos -->
				<section class="menu-departamentos">
					<h2>Departamentos</h2>
					
					<nav>
						<ul>
							<li>
								<a href="#">Blusas e Camisas</a>
								<!-- In�cio do submenu -->
								<ul>
									<li>
										<a href="#">Manga curta</a>
									</li>
									<li>
										<a href="#">Manga comprida</a>
									</li>
									<li>
										<a href="#">Camisa social</a>
									</li>
									<li>
										<a href="#">Camisa casual</a>
									</li>
								</ul>
								<!-- Fim do submenu -->
							</li>
							<li>
								<a href="#">Cal�as</a>
							</li>
							<li>
								<a href="#">Saias</a>
							</li>
							<li>
								<a href="#">Vestidos</a>
								</li>
							<li>
								<a href="#">Sapatos</a>
							</li>
							<li>
								<a href="#">Bolsas e Carteiras</a>
							</li>
							<li>
								<a href="#">Acess�rios</a>
							</li>
						</ul>
					</nav>
				</section>
				<!-- Fim do menu de departamentos-->
				<img id="img-banner" src="img/destaque-home.png" alt="Promo��o: Big City Nights" />
				<img id="pause" src="img/pause.png" />
			</div>
		</section>
		<!-- Fim d� se��o principal -->
		<!-- In�cio da se��o 2 -->
		<section>
			<!-- In�cio dos paineis -->
			<div class="container paineis">
				<!-- In�cio do painel de novidades -->
				<section class="painel novidades">
					<h2>Novidades</h2>
					<ol>
						<?php
							$conexao = mysqli_connect("127.0.0.1", "root", "iamtno", "wd43");
							$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 12");
							while ($produto = mysqli_fetch_array($dados)):
						?>
						
						<li>
							<a href="produto.php?id=<?= $produto['id'] ?>">
								<figure>
									<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= $produto['nome'] ?>">
									<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
								</figure>
							</a>
					  </li>
						
						<?php
							endwhile;
						?>
					</ol>
					<button type="button">Mostra mais</button>
				</section>
				<!-- Fim do painel de novidades -->
				<!-- In�cio do painel de mais vendidos -->
				<section class="painel mais-vendidos">
					<h2>Mais Vendidos</h2>
					<ol>
						<?php
							$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12");
							while ($produto = mysqli_fetch_array($dados)):
						?>
						
						<li>
							<a href="produto.php?id=<?= $produto['id'] ?>">
								<figure>
									<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= $produto['nome'] ?>">
									<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
								</figure>
							</a>
						</li>
						
						<?php
							endwhile;
						?>
					</ol>
					<button type="button">Mostra mais</button>
				</section>
				<!-- Fim do painel de mais vendidos -->
			</div>
			<!-- Fim dos paineis -->
		</section>
		<!-- Fim da se��o 2 -->
		<?php
			include("rodape.php");
		?>