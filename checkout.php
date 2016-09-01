<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="css/bootstrap-flatly.css" />
		<link rel="stylesheet" href="css/estilos.css" />
		<title>Checkout Mirror Fashion</title>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">
					<span class="glyphicon glyphicon-home"></span>
					Mirror Fashion
				</a>
				<button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
					<span class="glyphicon glyphicon-align-justify"></span>
				</button>
			</div>
			<ul class="nav navbar-nav collapse navbar-collapse">
				<li>
					<a href="sobre.php">Sobre</a>
				</li>
				<li>
					<a href="#">
						Ajuda
						<span class="glyphicon glyphicon-question-sign"></span>
					</a>
				</li>
				<li>
					<a href="#">Perguntas Frequentes</a>
				</li>
				<li>
					<a href="#">Fale Conosco</a>
					<!-- <span class="glyphicon glyphicon-bullhorn"></span> --!>
				</li>
			</ul>
		</nav>
		<div class="jumbotron">
			<!--Início da div container -->
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>Obrigado por comprar na Mirror Fashion! <br>Preencha seus dados para efetivar a compra.</p>
			</div>
			<!--Fim da div container -->
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-lg-3">
					<!--Início da div panel -->
					<div class="panel panel-success">
						<div class="panel-heading">
							<h2>Sua compra:</h2>
						</div>
						
						<div class="panel-body">
							<img src=<?php print "img/produtos/foto".$_POST["id"]."-".$_POST["cor"].".png";?> class="img-thumbnail img-responsive hidden-xs" />
							<dl>
								<dt>Produto</dt>
								<dd>
									<?php
										print $_POST['nome'];
									?>
								</dd>
								
								<dt>Preço</dt>
								<dd id="preco">
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
							
							<div class="form-group">
								<label for="qt">Quantidade</label>
								<input id="qt" class="form-control" type="number" min="0" max="99" value="1" />
							</div>
							<div class="form-group">
								<label for="total">Total</label>
								<output for="qt valor" id="total" class="form-control">
									<?php
										print $_POST['preco'];
									?>
								</output>
							</div>
						</div>
					</div>
					<!--Fim da div panel -->
				</div>
				<div class="col-sm-8 col-lg-9">
					<!-- Início do formulário usuário -->
					<div class="form-group">
						<form role="form">
							<div class="row">
								<div class="col-md-6">
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
								</div>
								
								<div class="col-md-6">
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
								</div>
							</div>
							
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
					<!-- Fim do formulário usuário -->
				</div>
			</div>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/converteMoeda.js"></script>
		<script src="js/testaConversao.js"></script>
		<script src="js/total.js"></script>
	</body>
</html>