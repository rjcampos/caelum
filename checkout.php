<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/estilos.css" />
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
			<div class="form-group">
				<form role="form">
					<fieldset>
						<legend>Dados pessoais</legend>
						<label for="nome">Nome completo:</label>
						<input type="text" name="nome" id="nome" class="form-control" autofocus required />
						
						<label for="email">Email:</label>
						<div class="input-group">
							<span class="input-group-addon">@</span>
							<input type="email" name="email" id="email" class="form-control" placeholder="email@exemplo.com" />
						</div>
						
						<label for="cpf">CPF:</label>
						<input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00" required />
						
						<label for="spam">Quero receber spam da Mirror Fashion</label>
						<input type="checkbox" value="sim" name="spam" class="checkbox" checked />
					</fieldset>
						
					<fieldset>
						<legend>Cartão de crédito</legend>
						<label for="codigo_cartao">Número - CVV:</label>
						<input type="text" name="codigo_cartao" id="codigo_cartao" class="form-control" />
						
						<label for="bandeira_cartao">Bandeira:</label>
						<select name="bandeira_cartao">
							<option value="visa">Visa</option>
							<option value="mastercard">Mastercard</option>
							<option value="elo">Elo</option>
							<option value="hipercard">Hipercard</option>
						</select>
						
						<label for="data_validade">Validade:</label>
						<input type="month" name="data_validade" id="data_validade" class="form-control" />
					</fieldset>
					
					<button type="submit" class="btn-primary btn-lg pull-right">
						Confirmar Pedido
						<span class="glyphicon glyphicon-thumbs-up"></span>
					</button>
					
					<script>
						document.querySelector('input[type=email]').oninvalid = function() {
							// remove mensagens de erro antigas
							this.setCustomValidity("");

							// reexecuta validação
							if (!this.validity.valid) {
								// se inválido, coloca mensagem de erro
								this.setCustomValidity("Email inválido");
							}
						};
					</script>
				</form>
			</div>
		</div>
	</body>
</html>