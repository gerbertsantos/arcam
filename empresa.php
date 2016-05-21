<?php 
	//Texto e imagem Banner
	$texto1 = "Você escreve";
	$texto2 = "Nossa";
	$texto3 = "história";
	$descricao1 = "Com muita dedicação chegamos até aqui,";
	$descricao2 = "faça parte da nossa história.";
	$tituloBtn1 = "Conheça nossos serviços";
	$urlBtn1 = "servicos.php";
	$tituloBtn2 = "Faça já seu pedido!";
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
					<span class="section__subtitle">Você está na</span>
					<h3 class="section__title">Arcam <span class="theme-color">Brasil</h3>
				</div>
			</div>
			<div class="row about">
				
				<div class="about-item col-sm-6">
					<p class="about-item__text">
						<h4>Missão</h4><br/>
						Prestar serviços de comercialização, importação e exportação de materiais de diversos segmentos, destinados a atender às necessidades de seus clientes, no Brasil e no exterior, com segurança, qualidade, confiabilidade e custos adequados a seus negócios.
					</p>
					<p class="about-item__text">
						<h4>Visão</h4><br/>
						Ser uma empresa de referência em procurement e na comercialização de materiais para os mais diversos setores da indústria e do comércio, reconhecidamente confiável e moderna, que se destaca pelo uso eficiente de tecnologia avançada e pela sua equipe capacitada e comprometida com a satisfação dos clientes e com a qualidade total.
					</p>
				</div>
				<div class="about-item col-sm-6">
					<p class="about-item__text">
						<h4>Valores</h4><br/><br/>
						
						•	Satisfação do cliente e inovação <br>
						•	Parceria de respeito com clientes e colaboradores<br>
						•	Ética e confiabilidade<br>
						•	Sustentabilidade e Qualidade<br>
					</p>
				</div>
			</div>
		</div>
	</section>
<!-- end about 1 section -->
 
<?php include('footer.php'); ?>