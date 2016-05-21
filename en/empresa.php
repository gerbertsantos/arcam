<?php 
	//Texto e imagem Banner
	$texto1 = "You write";
	$texto2 = "Our";
	$texto3 = "history";
	$descricao1 = "With dedication we got here,";
	$descricao2 = "part of our history.";
	$tituloBtn1 = "Learn about our services";
	$urlBtn1 = "servicos.php";
	$tituloBtn2 = "Make your order now!";
	$urlBtn2 = "contato.php";
	$imagem = "empresa.jpg";

	include('header.php');	
	include('banner.php');	
 ?>
	
	<!-- start about 1 section -->
	<section class="section-2 section-white s-about bg-arcam" id="empresa" >
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<span class="section__subtitle">You are at</span>
					<h3 class="section__title">Arcam <span class="theme-color">Brasil</h3>
				</div>
			</div>
			<div class="row about">
				
				<div class="about-item col-sm-6">
					<p class="about-item__text">
						<h4>Mission</h4><br/>
						Provide marketing services, import and export of materials of various segments, designed to meet the needs of its customers in Brazil and abroad, with safety, quality, reliability and tailored to your business costs.
					</p>
					<p class="about-item__text">
						<h4>Vision</h4><br/>
						To be a reference company in procurement and marketing materials for different sectors of industry and commerce, known reliable and modern, which stands for the efficient use of advanced technology and its skilled and committed team with customer satisfaction and with total quality.
					</p>
				</div>
				<div class="about-item col-sm-6">
					<p class="about-item__text">
						<h4>Values</h4><br/><br/>
						
						• Customer satisfaction and innovation <br>
						• About partnership with customers and employees <br>
						• Ethics and reliability <br>
						• Sustainability and Quality <br>
					</p>
				</div>
			</div>
		</div>
	</section>
<!-- end about 1 section -->
 
<?php include('footer.php'); ?>