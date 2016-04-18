		<?php
			$cabecalho_title = "Mirror Fashion";
			include("cabecalho.php");
		?>
		<!-- Início da seção principal -->
		<section>
			<div class="container destaque">
				<!-- Início da barra de busca -->
				<section class="busca">
					<h2>Busca</h2>
					
					<form>
						<input type="search" />
						<input type="image" src="img/busca.png" />
					</form>
				</section>
				<!-- Fim da barra de busca -->
				<!-- Início do menu de departamentos -->
				<section class="menu-departamentos">
					<h2>Departamentos</h2>
					
					<nav>
						<ul>
							<li>
								<a href="#">Blusas e Camisas</a>
								<!-- Início do submenu -->
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
								<a href="#">Calças</a>
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
								<a href="#">Acessórios</a>
							</li>
						</ul>
					</nav>
				</section>
				<!-- Fim do menu de departamentos-->
				<img src="img/destaque-home.png" alt="Promoção: Big City Nights" />
			</div>
		</section>
		<!-- Fim dá seção principal -->
		<!-- Início da seção 2 -->
		<section>
			<!-- Início dos paineis -->
			<div class="container paineis">
				<!-- Início do painel de novidades -->
				<section class="painel novidades">
					<h2>Novidades</h2>
					<ol>
						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura1.png"
									<figcaption>Produto 1</figcaption>
								</figure>
							</a>
						</li>

						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura2.png"
									<figcaption>Produto 2</figcaption>
								</figure>
							</a>
						</li>
						
						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura3.png"
									<figcaption>Produto 3</figcaption>
								</figure>
							</a>
						</li>
						
						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura4.png"
									<figcaption>Produto 4</figcaption>
								</figure>
							</a>
						</li>
						
						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura5.png"
									<figcaption>Produto 5</figcaption>
								</figure>
							</a>
						</li>
						
						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura6.png"
									<figcaption>Produto 6</figcaption>
								</figure>
							</a>
						</li>
					</ol>
				</section>
				<!-- Fim do painel de novidades -->
				<!-- Início do painel de mais vendidos -->
				<section class="painel mais-vendidos">
					<h2>Mais Vendidos</h2>
					<ol>
						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura7.png"
									<figcaption>Produto 7</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura8.png"
									<figcaption>Produto 8</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura9.png"
									<figcaption>Produto 9</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura10.png"
									<figcaption>Produto 10</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura11.png"
									<figcaption>Produto 11</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="#">
								<figure>
									<img src="img/produtos/miniatura12.png"
									<figcaption>Produto 12</figcaption>
								</figure>
							</a>
						</li>
					</ol>
				</section>
				<!-- Fim do painel de mais vendidos -->
			</div>
			<!-- Fim dos paineis -->
		</section>
		<!-- Fim da seção 2 -->
		<?php
			include("rodape.php");
		?>
	</body>
</html>