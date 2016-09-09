		<?php
			$cabecalho_title = "Sobre a Mirror Fashion";
			include("cabecalho.php");
		?>
		<div class="container">
			<!-- In�cio do texto -->
			<article>
				<!-- In�cio da se��o principal -->
				<section>
					<h1 id="titulo">A Mirror Fashion</h1>

					<p>
						A <strong>Mirror Fashion</strong> � a maior empresa com�rcio eletr�nico no segmento de moda em todo o mundo. 
						Fundada h� <?php print (date("Y") - 1932); ?> anos, possui filiais em 124 pa�ses, sendo l�der de mercado com mais de 90% de 
						participa��o em 118 deles.
					</p>

					<p>
						Nosso centro de distribui��o fica em <a href="https://maps.google.com.br/?q=Jacarezinho">Jacarezinho, no Paran�</a>. De l�, saem 48 avi�es que 
						distribuem nossos produtos �s casas do mundo todo. Nosso centro de distribui��o:
					</p>
					
					<figure id="centro-distribuicao">
						<img src="img/centro-distribuicao.png" alt="Centro de distribui��o da Mirror Fashion"/>
						<figcaption>Centro de distribui��o da Mirror Fashion</figcaption>
					</figure>
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.30736608731!2d-35.49070578522149!3d-6.853712868956251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7adb41cd947b0e7%3A0x3999de50077072ef!2sTRT+Tribunal+Regional+do+Trabalho+13%C2%AA+Regi%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1473432972735" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					<p>
						Compre suas roupas e acess�rios na <strong>Mirror Fashion</strong>. Acesse <a href="index.php">nossa loja</a> ou entre em contato 
						se tiver d�vidas. Conhe�a tamb�m nossa <a href="#historia">hist�ria</a> e nossos <a href="#diferenciais">diferenciais</a>.
					</p>
				</section>
				<!-- Fim da se��o principal -->
				<!-- In�cio da se��o hist�ria -->
				<section>
					<h2 id="historia">Hist�ria</h2>
					
					<figure id="familia-pelho">
						<img src="img/familia-pelho.jpg" alt="Fam�lia Pelho"/>
						<figcaption>Fam�lia Pelho</figcaption>
					</figure>

					<p>
						A funda��o em 1932 ocorreu no momento da descoberta econ�nica do interior do Paran�. A 
						fam�lia <em>Pelho</em>, tradicional da regi�o, investiu todas as suas economias nessa nova iniciativa, 
						revolucion�ria para a �poca. O fundador <em>Eduardo Sim�es Pelho</em>, dotado de particular vis�o 
						administrativa, guiou os neg�cios da empresa durante mais de 50 anos, muitos deles ao lado 
						de seu filho <em>E. S. Pelho Filho</em>, atual <strong>CEO</strong>. O nome da empresa � inspirado no nome da fam�lia.
					</p>

					<p>
						O crescimento da empresa foi praticamente instant�neo. Nos primeiros 5 anos, j� atendia 18 pa�ses. 
						Bateu a marca de 100 pa�ses em apenas 15 anos de exist�ncia. At� hoje, j� atendeu 740 milh�es 
						de usu�rios diferentes, em bilh�es de diferentes pedidos.
					</p>

					<p>
						O crescimento em n�mero de funcion�rios � tamb�m assombroso. Hoje, � a maior empregadora do 
						Brasil, mas mesmo ap�s apenas 5 anos de sua exist�ncia, j� possu�a 30 mil funcion�rios. Fora do 
						Brasil, h� <strong>240 mil funcion�rios</strong>, al�m dos 890 mil brasileiros nas instala��es de Jacarezinho e 
						nos escrit�rios em todo pa�s.
					</p>
					
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Tb06abHE4hY" frameborder="0" allowfullscreen></iframe>

					<p>
						Dada a import�ncia econ�mica da empresa para o Brasil, a fam�lia Pelho j� recebeu diversos pr�mios, 
						homenagens e condecora��es. Todos os presidentes do Brasil j� visitaram as instala��es da Mirror 
						Fashion, al�m de <strong>presidentes da Uni�o Europ�ia, �sia e o secret�rio-geral da ONU</strong>.
					</p>
				</section>
				<!-- Fim da se��o hist�ria -->
				<!-- In�cio da se��o diferenciais -->
				<section>
					<h2 id="diferenciais">Diferenciais</h2>
					
					<!-- In�cio da lista de diferenciais -->
					<ul>
						<li>Menor pre�o do varejo, garantido</li>
						<li>Se voc� achar uma loja mais barata, leva o produto de gra�a</li>
						<li>Pague em reais, d�lares, euros ou bitcoins</li>
						<li>Todas as compras com frete gr�tis para o mundo todo</li>
						<li>Maior com�rcio eletr�nico de moda do mundo</li>
						<li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
						<li>Presente em 124 pa�ses</li>
						<li>Mais de um milh�o de funcion�rios em todo o mundo</li>
					</ul>
					<!-- Fim da lista de diferenciais -->
				</section>
				<!-- Fim da se��o diferenciais -->
			</article>
			<!-- Fim do texto -->
			<div id="rodape">
				<img src="img/logo.png" />
				&copy; Copyright Mirror Fashion
			</div>
		</div>
		<!-- In�cio do rodap� -->
		<?php
			include("rodape.php");
		?>