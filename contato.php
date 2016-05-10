<?php 
	
	//Texto e imagem Banner
	$texto1 = "Queremos te conhecer";
	$texto2 = "Fale";
	$texto3 = "conosco";
	$descricao1 = "Com muita dedicação chegamos até aqui,";
	$descricao2 = "faça parte da nossa história.";
	$tituloBtn1 = "Conheça nossos produtos";
	$urlBtn1 = "";
	$tituloBtn2 = "Faça já seu pedido!";
	$urlBtn2 = "";
	$img;

	include('header.php'); 
	include('banner.php');
?>

	<!-- start Contact us section -->
				<section class="section-2 section-white s-contact">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12"><span class="section__subtitle">Feel</span>
								<h3 class="section__title">Free to Contact</h3></div>
						</div>
						<div class="row contact">
							<div class="col-xs-12 col-sm-4">
								<div class="contact-info">
									<div class="contact-info__title">Information</div>
									<div class="contact-info__item ico-60">
										NowaDays Ltd.
										<br>442 5th Avenue,
										<br>Manhattan, NY,
										<br>10018
									</div>
									<div class="contact-info__item ico-87">
										<a class="contact-info__link" href="tel:+1234567890">+1-234-567-890</a>
									</div>
									<div class="contact-info__item ico-61">
										<a class="contact-info__link" href="mailto:yourmail@yahoo.com">yourmail@yahoo.com</a></div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-8">
								<div class="row">
									<form action="ajax/feedback.php" class="contact-form">
										<div class="col-xs-12 col-sm-12">
											<input name="formNome" type="text" placeholder="Nome" class="contact-form__input" required>
										</div>
										<div class="col-xs-12 col-sm-6">
											<input name="formTelefone" type="text" placeholder="Telefone" class="contact-form__input" required>
										</div>
										<div class="col-xs-12 col-sm-6">
											<input name="formEmail" type="email" placeholder="Email address" class="contact-form__input" required>
										</div>
										<div class="col-xs-12 col-sm-12 align-left">
											<textarea name="formMessage" placeholder="Message" cols="30" rows="10" class="contact-form__textarea" required></textarea>
											<button class="contact-form__submit btn-a btn-a_fill_theme" type="submit" value="Send">Send</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- end Contact us section -->



		<?php

		include('footer.php'); 
		
	?>