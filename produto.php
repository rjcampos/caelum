		<?php
			$conexao = mysqli_connect("127.0.0.1", "root", "iamtno", "wd43");
			$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
			$produto = mysqli_fetch_array($dados);
		?>
		<?php
			$cabecalho_title = $produto['nome'];
			$cabecalho_css = '<link rel="stylesheet" href="css/produto.css" />';
			include("cabecalho.php");
		?>
		
		<div class="container">
			<!-- Início da seção de produto -->
			<div class="produto produto-back">
				<h1>
					<?php
						print $produto['nome'];
					?>
				</h1>
				<p>
					por apenas 
					<?php
						print $produto['preco'];
					?>
				</p>
				<form action="checkout.php" method="POST">
					<input type="hidden" name="id" value="<?= $produto['id'] ?>" />
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>
						
						<input type="radio" name="cor" value="verde" id="verde" checked />
						<label for="verde">
							<img src="img/produtos/foto
							<?php
								print $produto['id'];
							?>
							-verde.png" alt="Produto na cor verde" />
						</label>
						
						<input type="radio" name="cor" value="rosa" id="rosa" />
						<label for="rosa">
							<img src="img/produtos/foto
							<?php
								print $produto['id'];
							?>
							-rosa.png" alt="Produto na cor rosa" />
						</label>
						
						<input type="radio" name="cor" value="azul" id="azul" />
						<label for="azul">
							<img src="img/produtos/foto
							<?php
								print $produto['id'];
							?>
							-azul.png" alt="Produto na cor azul" />
						</label>
					</fieldset>
					
					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>
						<input type="range" min="36" max="46" step="2" value="42" name="tamanho" id="tamanho" />
						<output for="tamanho" name="valortamanho">42</output>
					</fieldset>
					
					<input type="submit" class="comprar" value="Comprar" />
				</form>
			</div>
			<!-- Fim da seção de produto -->
			<div class="detalhes">
				<h2>Detalhes do produto</h2>
				
				<p>
					<?php
						print $produto['descricao'];
					?>
				</p>
				
				<!-- Início da tabela de detalhes do produto -->
				<table>
					<thead>
						<tr>
							<th>Característica</th>
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
							<td>Algodão e poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e Verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar à mão</td>
						</tr>
					</tbody>
				</table>
				<!-- Fim da tabela de detalhes do produto -->
				
			</div>
		</div>
		<?php
			include("rodape.php");
		?>