<?php 
	
	//Texto e imagem Banner
	$texto1 = "Conheça todos os";
	$texto2 = "Nossos";
	$texto3 = "serviços";
	$descricao1 = "Com muita dedicação chegamos até aqui,";
	$descricao2 = "faca parte da nossa história.";
	$tituloBtn1 = "ÁREAS DE ATUAÇÃO";
	$urlBtn1 = "atuacao.php";
	$tituloBtn2 = "Faça contato!";
	$urlBtn2 = "contato.php";
	$imagem = "servicos.jpg";

	include('header.php');
	include('banner.php');
?>

<!-- start features 3 section -->
	<section class="section-2 section-white s-features features-3 bg-arcam" id="features">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<span class="section__subtitle">Por que escolher</span>
					<h3 class="section__title">Nossos serviços?</h3>
				</div>
			</div>
			<div class="row about">
				<div class="about-item col-sm-12">
					Também oferecemos os serviços de Importação Por Conta e Ordem de Terceiros, Importação por Encomenda e Exportação Indireta de acordo com o Regulamento Aduaneiro. Nos destacamos no mercado porque oferecemos o gerenciamento completo das operações, totalmente personalizadas, tornando o processo eficiente e minimizando os custos operacionais, buscando sempre atender às necessidades específicas do cliente.
					<br><br>
					A ARCAM DO BRASIL oferece os seguintes serviços:
				</div>
			</div>
			<!-- Inicio atuacao-->
			<div class="row features">
				<div class="features-item col-sm-6 col-md-4 fx" data-animation-name="fadeInUp" data-animation-duration="0.6s" data-animation-delay="0.2s">
					<div class="row">
						<div class="col-xs-4 col-sm-4">
							<i class="features-item__icon ico-29"></i>
						</div>
						<div class="col-xs-8 col-sm-8">
							<h5 class="features-item__title">Importação Por Conta e Ordem de Terceiros</h5>
						</div>
					</div>
				</div>
				<div class="features-item col-sm-6 col-md-4 fx" data-animation-name="fadeInUp" data-animation-duration="0.6s" data-animation-delay="0.4s">
					<div class="row">
						<div class="col-xs-4 col-sm-4">
							<i class="features-item__icon ico-8"></i>
						</div>
						<div class="col-xs-8 col-sm-8">
							<h5 class="features-item__title">Importação por Encomenda Predeterminada</h5>
						</div>
					</div>
				</div>
				<div class="features-item col-sm-6 col-md-4 fx" data-animation-name="fadeInUp" data-animation-duration="0.6s" data-animation-delay="0.6s">
					<div class="row">
						<div class="col-xs-4 col-sm-4">
							<i class="features-item__icon ico-52"></i>
						</div>
						<div class="col-xs-8 col-sm-8">
							<h5 class="features-item__title">Exportação Indireta</h5>
						</div>
					</div>
				</div>
				
				<div class="row about">
					<div class="about-item col-sm-12">
						A ARCAM DO BRASIL se destaca porque oferece o gerenciamento completo e personalizado das operações, buscando sempre atender às necessidades específicas de cada cliente. 
						
						<br/>
						<br/>
						
						<h6>Todos os serviços prestados contam com:</h6><br/>
						•	Estudo de custos na importação e exportação.<br/>
						•	Tabelas diferenciadas de fretes e armazenagens.<br/>
						•	Atuação em toda cadeia logística: seguro internacional, transporte internacional, armazenagem e transporte rodoviário.<br/>
						•	Acompanhamento operacional de cargas e processos de importação e exportação;<br/>
						•	Controle: planilhas detalhadas de custos e relatórios atualizados de todo processo, desde o embarque até a entrega da mercadoria ao cliente final.
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features 3 section -->

<?php
	include('footer.php'); 
	
?>