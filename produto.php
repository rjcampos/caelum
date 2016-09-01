		<?php
			$cabecalho_title = "Produto da Mirror Fashion";
			$cabecalho_css = '<link rel="stylesheet" href="css/produto.css" />';
			include("cabecalho.php");
		?>
		<div class="container">
			<!-- In�cio da se��o de produto -->
			<div class="produto produto-back">
				<h1>Fuzzy Cardigan</h1>
				<p>por apenas R$129,00</p>
				<form action="checkout.php" method="POST">
					<input type="hidden" name="id" value="2" />
					<input type="hidden" name="nome" value="Fuzzy Cardigan" />
					<input type="hidden" name="preco" value="R$ 129,00" />
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>
						
						<input type="radio" name="cor" value="verde" id="verde" checked />
						<label for="verde">
							<img src="img/produtos/foto2-verde.png" alt="Produto na cor verde" />
						</label>
						
						<input type="radio" name="cor" value="rosa" id="rosa" />
						<label for="rosa">
							<img src="img/produtos/foto2-rosa.png" alt="Produto na cor rosa" />
						</label>
						
						<input type="radio" name="cor" value="azul" id="azul" />
						<label for="azul">
							<img src="img/produtos/foto2-azul.png" alt="Produto na cor azul" />
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
			<!-- Fim da se��o de produto -->
			<div class="detalhes">
				<h2>Detalhes do produto</h2>
				
				<p>Esse � o melhor casaco de Cardig� que voc� j� viu. 
				Excelente material italiano com estampa desenhada pelos artes�os da comunidade de Krotor nas ilhas gregas. 
				Compre j� e receba hoje mesmo pela nossa entrega a jato.</p>
				
				<!-- In�cio da tabela de detalhes do produto -->
				<table>
					<thead>
						<tr>
							<th>Caracter�stica</th>
							<th>Detalhe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardig� 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algod�o e poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e Verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar � m�o</td>
						</tr>
					</tbody>
				</table>
				<!-- Fim da tabela de detalhes do produto -->
				
			</div>
		</div>
		<?php
			include("rodape.php");
		?>