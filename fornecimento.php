<?php 
	
	//Texto e imagem Banner
	$texto1 = "Prontos para atender com";
	$texto2 = "Rapidez e";
	$texto3 = "eficiência";
	$descricao1 = "Com muita dedicação chegamos até aqui,";
	$descricao2 = "faça parte da nossa história.";
	$tituloBtn1 = "CONHEÇA NOSSO SETOR AUTOMOTIVO";
	$urlBtn1 = "auto.php";
	$tituloBtn2 = "Faça contato!";
	$urlBtn2 = "contato.php";
	$imagem= "fornecimento.jpg";

	include('header.php');	
	include('banner.php');
?>

<!-- start offer dark section -->
	<section class="section-2 section-white pb-0 s-offer-2 fx" id="offer">
		<div class="container">

			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<span class="section__subtitle">Nós vamos até você</span>
					<h3 class="section__title">Fornecimento responsável</h3>
				</div>
			</div>

		</div>
		<div class="row offer-2">
			<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
				<div class="offer-2-item fx" data-animation-name="fadeInRight" data-animation-duration="1s">
					<div class="offer-2-item__bg" data-background-image="assets/img/img.jpg"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
				<div class="offer-2-item fx" data-animation-name="fadeInRight" data-animation-duration="1s" data-animation-delay="0.2s">
					<div class="offer-2-item__inner">
						<h5 class="offer-2__title">Qualidade e segurança</h5>
						<p class="offer-2__description">São ferramentas, sempre aliadas ao bom desempenho da ARCAM DO BRASIL, a tecnologia da informação, a segurança e a transparência dos negócios..</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 no-padding">
				<div class="offer-2-item fx" data-animation-name="fadeInRight" data-animation-duration="1s" data-animation-delay="0.4s">
					<div class="offer-2-item__inner">
						<div class="offer-2-subitem fx animated" data-animation-name="fadeInRight" data-animation-duration="0.4s" data-animation-delay="1.2s">
							<i class="offer-2-subitem__ico ico-49">Indústria Naval / Petrolífera</i>
							<p class="offer-2-subitem__description">Atuamos na área da indústria naval e petrolifera oferecendo peças e equipamentos de alta qualidade.</p>
						</div>
						<div class="offer-2-subitem fx animated" data-animation-name="fadeInRight" data-animation-duration="0.4s" data-animation-delay="1.4s">
							<i class="offer-2-subitem__ico ico-46">Hospitais</i>
							<p class="offer-2-subitem__description">Representamos grandes marcas de equpamentos e produtos de reposição para a área da saúde.</p>
						</div>
						<div class="offer-2-subitem fx animated" data-animation-name="fadeInRight" data-animation-duration="0.4s" data-animation-delay="1.6s">
							<i class="offer-2-subitem__ico ico-153">Construção Civil</i>
							<p class="offer-2-subitem__description">Precisa de material para construção? Ofereçemos os mais diversos.</p>
						</div>
						<div class="offer-2-subitem fx animated" data-animation-name="fadeInRight" data-animation-duration="0.4s" data-animation-delay="1.8s">
							<i class="offer-2-subitem__ico ico-89">Telecomunicações</i>
							<p class="offer-2-subitem__description">Peças eletro-eletônicas para a área de telecomunicações.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end offer dark section -->

<?php
	include('footer.php'); 	
?>