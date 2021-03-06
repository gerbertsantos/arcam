<?php 
	
	//Texto e imagem Banner
	$texto1 = "Queremos te conhecer";
	$texto2 = "Fale";
	$texto3 = "conosco";
	$descricao1 = "Com muita dedicação chegamos até aqui,";
	$descricao2 = "faça parte da nossa história.";
	$tituloBtn1 = "SETOR AUTOMOTIVO";
	$urlBtn1 = "auto.php#pedido";
	$tituloBtn2 = "Faça já seu pedido!";
	$scroll = "scroll-to";
	$urlBtn2 = "#formulario";
	$imagem = "contato.jpg";

	include('header.php'); 
	include('banner.php');
?>

	<!-- start Contact us section -->
				<section class="section-2 section-white s-contact" id="formulario">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12"><span class="section__subtitle">Você por aqui?</span>
								<h3 class="section__title">Faça contato</h3></div>
						</div>
						<div class="row contact">
							<div class="col-xs-12 col-sm-4">
								<div class="contact-info">
									<div class="contact-info__title">Endereços</div>
									<div class="contact-info__item ico-60">
										Arcam Brasil
										<br>Rodovia Ernani do Amaral Peixoto,
										<br>Nº 28354, Sala 16,
										<br>Maricá, RJ, Brasil
										<br>24.912-710
									</div>
									<div class="contact-info__item ico-87">
										<a class="contact-info__link" href="tel:+55 21-3731-0762">+55 21-3731-0762</a>
									</div>
									<div class="contact-info__item ico-61">
										<a class="contact-info__link" href="mailto:contato@arcambrasil.com">contato@arcambrasil.com</a>
									</div>
									
									<div class="contact-info__item ico-60">
										Arcam Brasil - Canadá
										<br>Ottawa - Canadá
									</div>
									<div class="contact-info__item ico-61">
										<a class="contact-info__link" href="mailto:sales@arcamcanada.com">sales@arcambrasil.com</a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-8">
								<div class="row">
									<form action="ajax/feedback.php" class="contact-form" id="contato">
										<div class="col-xs-12 col-sm-12">
											<input name="formNome" type="text" placeholder="Nome" class="contact-form__input" message="Campo obrigatório" required>
										</div>
										<div class="col-xs-12 col-sm-6">
											<input name="formPhone" type="text" placeholder="Telefone" class="contact-form__input" required>
										</div>
										<div class="col-xs-12 col-sm-6">
											<input name="formEmail" type="email" placeholder="E-mail" class="contact-form__input" required>
										</div>
										<div class="col-xs-12 col-sm-12 align-left">
											<textarea name="formMessage" placeholder="Menssagem" cols="30" rows="10" class="contact-form__textarea" required></textarea>
											<button class="contact-form__submit btn-a btn-a_fill_theme" type="submit" value="Send">Enviar</button>
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