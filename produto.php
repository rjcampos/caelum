		<?php
			$cabecalho_title = "Produto da Mirror Fashion";
			$cabecalho_css = '<link rel="stylesheet" href="css/produto.css" />';
			include("cabecalho.php");
		?>
		
		<!-- Início da seção de produto -->
		<div class="produto">
			<h1>Fuzzy Cardigan</h1>
			<p>por apenas R$129,00</p>
			<form>
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
				
				<input type="submit" class="comprar" value="Comprar" />
			</form>
		</div>
		<!-- Fim da seção de produto -->
		
		<?php
			include("rodape.php");
		?>
	</body>
	<!-- Fim do body -->
</html>