<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<title>Checkout Mirror Fashion</title>
	</head>
	<body>
		<div class="jumbotron">
			<!--Início da div container -->
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>Obrigado por comprar na Mirror Fashion! <br>Preencha seus dados para efetivar a compra.</p>
			</div>
			<!--Fim da div container -->
		</div>
		
		<div class="container">
			<!--Início da div panel -->
			<div class="panel panel-success">
				<div class="panel-heading">
					<h2>Sua compra:</h2>
				</div>
				
				<div class="panel-body">
					<img src=<?php print "img/produtos/foto".$_POST["id"]."-".$_POST["cor"].".png";?> class="img-thumbnail img-responsive" />
					<dl>
						<dt>Produto</dt>
						<dd>
							<?php
								print $_POST['nome'];
							?>
						</dd>
						
						<dt>Preço</dt>
						<dd>
							<?php
								print $_POST['preco'];
							?>
						</dd>
						
						<dt>Cor</dt>
						<dd>
							<?php
								print $_POST['cor'];
							?>
						</dd>
						
						<dt>Tamanho</dt>
						<dd>
							<?php
								print $_POST['tamanho'];
							?>
						</dd>
					</dl>
				</div>
			</div>
			<!--Fim da div panel -->
		</div>
	</body>
</html>