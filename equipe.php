<?php 
	//Texto e imagem Banner
	$texto1 = "Equipe multidisciplinar";
	$texto2 = "Qualificada e";
	$texto3 = "treinada";
	$descricao1 = "Com muita dedicação chegamos até aqui,";
	$descricao2 = "faça parte da nossa história.";
	$tituloBtn1 = "Conheça nossos produtos";
	$urlBtn1 = "";
	$tituloBtn2 = "Faça já seu pedido!";
	$urlBtn2 = "";
	$imagem = "equipe.jpg";

	include('header.php');
	include('banner.php');
?>


<!-- start team 1 section -->
			<section class="section section-white s-team bg-arcam-invert" id="team">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12">
							<span class="section__subtitle">Conheça</span>
							<h3 class="section__title">Nossa Equipe</h3>
						</div>
					</div>
					<div class="row team">
						<div class="team-item col-xs-12 col-sm-4 fx" data-animation-name="fadeInLeft" data-animation-duration="1s" data-animation-delay="0.5s">
							<div class="team-item__wrap">
								<img src="assets/img/team1.jpg" alt="" class="team-item__img">
								<div class="team-item-social">
									<a class="team-item-social__link" href="#"><i class="ico-101 team-item-social__icon"></i></a>
									<a class="team-item-social__link" href="#"><i class="ico-102 team-item-social__icon"></i></a>
									<a class="team-item-social__link" href="#"><i class="ico-103 team-item-social__icon"></i></a>
									<a class="team-item-social__link" href="#"><i class="ico-104 team-item-social__icon"></i></a>
								</div>
							</div>
							<div class="team-item-details">
								<div class="team-item-details__name">Adam Lee</div>
								<div class="team-item-details__position">Full-Stack Developer</div>
							</div>
						</div>
						<div class="team-item col-xs-12 col-sm-4 fx" data-animation-name="fadeInUp" data-animation-duration="1s" data-animation-delay="0.5s">
							<div class="team-item__wrap">
								<img src="assets/img/team2.jpg" alt="" class="team-item__img">
								<div class="team-item-social">
									<a class="team-item-social__link" href="#"><i class="ico-101 team-item-social__icon"></i></a>
									<a class="team-item-social__link" href="#"><i class="ico-102 team-item-social__icon"></i></a>
									<a class="team-item-social__link" href="#"><i class="ico-103 team-item-social__icon"></i></a>
									<a class="team-item-social__link" href="#"><i class="ico-104 team-item-social__icon"></i></a>
								</div>
							</div>
							<div class="team-item-details">
								<div class="team-item-details__name">Brad Lee</div>
								<div class="team-item-details__position">Front-End Developer</div>
							</div>
						</div>
						<div class="team-item col-xs-12 col-sm-4 fx" data-animation-name="fadeInRight" data-animation-duration="1s" data-animation-delay="0.5s">
							<div class="team-item__wrap">
								<img src="assets/img/team3.jpg" alt="" class="team-item__img">
								<div class="team-item-social">
									<a class="team-item-social__link" href="#"><i class="ico-101 team-item-social__icon"></i></a>
									<a class="team-item-social__link" href="#"><i class="ico-102 team-item-social__icon"></i></a>
									<a class="team-item-social__link" href="#"><i class="ico-103 team-item-social__icon"></i></a>
									<a class="team-item-social__link" href="#"><i class="ico-104 team-item-social__icon"></i></a>
								</div>
							</div>
							<div class="team-item-details">
								<div class="team-item-details__name">Diana Lee</div>
								<div class="team-item-details__position">Web Designer</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- end team 1 section -->



<?php include('footer.php'); ?>