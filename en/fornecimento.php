<?php 
	
	//Texto e imagem Banner
	$texto1 = "Ready to meet with";
	$texto2 = "quickly and";
	$texto3 = "efficiency";
	$descricao1 = "With dedication we got here,";
	$descricao2 = "part of our history.";
	$tituloBtn1 = "MEET OUR AUTOMOTIVE";
	$urlBtn1 = "auto.php";
	$tituloBtn2 = "Contact us!";
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
					<span class="section__subtitle">We come to you</span>
					<h3 class="section__title">Responsible Supply</h3>
				</div>
			</div>

		</div>
		<div class="row offer-2">
			<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
				<div class="offer-2-item fx" data-animation-name="fadeInRight" data-animation-duration="1s">
					<div class="offer-2-item__bg" data-background-image="../assets/img/img.jpg"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
				<div class="offer-2-item fx" data-animation-name="fadeInRight" data-animation-duration="1s" data-animation-delay="0.2s">
					<div class="offer-2-item__inner">
						<h5 class="offer-2__title">Quality and safety</h5>
						<p class="offer-2__description">
							ARCAM operates in the International Trade field, selling and distributing national and international products for the most diverse and differentiated segments. We have a specialized technical team for each area, which have the purpose to meet the needs of your customers with maximum efficiency.<br><br>
							Our company maintains a business structure and a distribution network capable of serving customers quicky and in an efficient way, anywhere in Brazil or the world, always within the concept of "Just in Time" (on-demand sales system).
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 no-padding">
				<div class="offer-2-item fx" data-animation-name="fadeInRight" data-animation-duration="1s" data-animation-delay="0.4s">
					<div class="offer-2-item__inner">
						<div class="offer-2-subitem fx animated" data-animation-name="fadeInRight" data-animation-duration="0.4s" data-animation-delay="1.2s">
							<i class="offer-2-subitem__ico ico-49">Marine / Oil</i>
							<p class="offer-2-subitem__description">We operate in the field of shipbuilding and oil industry parts and offering high quality equipment.</p>
						</div>
						<div class="offer-2-subitem fx animated" data-animation-name="fadeInRight" data-animation-duration="0.4s" data-animation-delay="1.4s">
							<i class="offer-2-subitem__ico ico-46">Hospitals</i>
							<p class="offer-2-subitem__description">We represent major brands of equipment and aftermarket products for health.</p>
						</div>
						<div class="offer-2-subitem fx animated" data-animation-name="fadeInRight" data-animation-duration="0.4s" data-animation-delay="1.6s">
							<i class="offer-2-subitem__ico ico-153">Construction</i>
							<p class="offer-2-subitem__description">You need material for construction? We offer you the most diverse.</p>
						</div>
						<div class="offer-2-subitem fx animated" data-animation-name="fadeInRight" data-animation-duration="0.4s" data-animation-delay="1.8s">
							<i class="offer-2-subitem__ico ico-89">Telecommunications</i>
							<p class="offer-2-subitem__description">Electrical and electronic components for the telecommunications area.</p>
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