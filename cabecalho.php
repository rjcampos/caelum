<!DOCTYPE html>
<html>
	<head>
		<title><?php print $cabecalho_title; ?></title>
		
		<meta name="viewport" content="width=device-width" />
		
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet/less" href="less/estilos.less" />
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script"  />
		<?php 
			print @$cabecalho_css;
		?>
		<meta charset="ansi">
	</head>
	<!-- Início do body -->
	<body>
		<!-- Início do cabeçalho -->
		<header class="container">
			<!-- Script para fazer o HTML5 funcionar no IE8 -->
			<!--[if lt IE 9]>
				<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			<h1>
				<a href="index.php"><img src="img/logo.png" alt="Mirror Fashion" /></a>
			</h1>
			
			<p class="sacola">Nenhum item na sacola de compras</p>
			<!-- Início do menu -->
			<nav class="menu-opcoes">
				<ul>
					<li>
						<a href="#">Sua Conta</a>
					</li>
					<li>
						<a href="#">Lista de Desejos</a>
					</li>
					<li>
						<a href="#">Cartão Fidelidade</a>
					</li>
					<li>
						<a href="sobre.php">Sobre</a>
					</li>
					<li>
						<a href="#">Ajuda</a>
					</li>
				</ul>
			</nav>
			<!-- Fim do menu -->
		</header>
		<!-- Fim do cabeçalho -->