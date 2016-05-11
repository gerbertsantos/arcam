<?php
if ($url != "home") {
echo "
<!-- start main 2 section -->
	<section class='s-main' id='banner'>
		<div class='main-1'>
			<div class='main-1-item'>
				<div class='main-1-item__bg parallax' data-background-image='assets/img/banner/".$imagem."' data-parallax-min-fading='50' data-parallax-speed='0.9'></div>
				<div class='container'>
					<div class='main-1-item__inner'>
						<h2 class='main-1-item__title'><span class='main-1-item__title_part_1 fx' data-animation-name='fadeInDownBig' data-animation-duration='1s'>". $texto1 ."</span> <span class='theme-color main-1-item__title_part_2 fx' data-animation-name='fadeInLeftBig' data-animation-duration='1s'>". $texto2 ."</span> <span class='main-1-item__title_thin theme-color main-1-item__title_part_3 fx' data-animation-name='fadeInRightBig' data-animation-duration='1s'>". $texto3 ."</span></h2>
						<p class='main-1-item__subtitle fx' data-animation-name='fadeInUpBig' data-animation-duration='1s' data-animation-delay='0.2s'>". $descricao1 ."</p>
						<p class='main-1-item__subtitle fx' data-animation-name='fadeInUp' data-animation-duration='1s' data-animation-delay='1s'>". $descricao2 ."</p>
						<a href='' class='btn-a btn-a_color_theme btn-a_hover_2 btn-a_size_large fx' data-animation-name='fadeIn' data-animation-duration='1s' data-animation-delay='1.5s'>". $tituloBtn1 ."</a>
						<a href='' class='btn-a btn-a_size_large scroll-to fx' data-animation-name='fadeIn' data-animation-duration='1s' data-animation-delay='1.5s'>". $tituloBtn2 ."</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- end main 2 section -->
";
}else{
echo "
<!-- start main 7 (self-hosted video) section -->
	<section class='s-main' id='banner'>
		<div class='main-5-slider'>
			<div class='main-5-slider__item parallax' data-background-image='assets/img/banner/home1.jpg' data-parallax-min-fading='50' data-parallax-speed='0.9'></div>
			<div class='main-5-slider__item parallax' data-background-image='assets/img/banner/home2.jpg' data-parallax-min-fading='50' data-parallax-speed='0.9'></div>
			<div class='main-5-slider__item parallax' data-background-image='assets/img/banner/home3.jpg' data-parallax-min-fading='50' data-parallax-speed='0.9'></div>
		</div>
		<div class='container'>
			<div class='main-5-slider-content'>
				<div class='main-5-slider-text'>
					<div class='main-5-slider-text__pretitle fx'><?php echo $url ?></div>
					<div class='main-5-slider-text__title_before fx'></div>
					<h2 class='main-5-slider-text__title fx' style='text-transform: none !important;'>
					Arcam<span class='theme-color'>Brasil</span>
					<!-- <img src='assets/img/logo.png'> -->
					</h2>
					<div class='main-5-slider-text__title_after fx'></div>
					<div class='main-5-slider-text__subtitle'>Comércio Atacadista</div>
				</div>
				<div class='main-5-slider-text'>
					<div class='main-5-slider-text__subtitle hidden'>Máquinas e Equipamentos</div>
				</div>
				<div class='main-5-slider-text'>
					<div class='main-5-slider-text__subtitle hidden'>Bem vindo!</div>
				</div>
			</div>
		</div>
		<a href=#". $url ." class='section-arrow ico-110 scroll-to'></a>
	</section>
<!-- end main 7 (self-hosted video) section -->
";
}

?>