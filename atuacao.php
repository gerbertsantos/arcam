<?php 
	
	//Texto e imagem Banner
	$texto1 = "Atuamos para";
	$texto2 = "Satisfazer";
	$texto3 = "você";
	$descricao1 = "Com muita dedicação chegamos até aqui,";
	$descricao2 = "faca parte da nossa história.";
	$tituloBtn1 = "Conheca nossos serviços";
	$urlBtn1 = "";
	$tituloBtn2 = "Fale conosco!";
	$urlBtn2 = "";
	$imagem = "atuacao.jpg";

	include('header.php');	
	include('banner.php'); 
?>

<!-- start skills linear section -->
	<section class="section-2 section-white s-skills bg-arcam-invert" id="skills">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<span class="section__subtitle">Conheça nossa</span>
					<h3 class="section__title">Área de atuação</h3>
				</div>
			</div>
			<div class="row skills">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<p class="skills__text">
						A ARCAM DO BRASIL comercializa produtos de alta qualidade e tecnologia, de diversas áreas, nacionais e estrangeiros.<br><br>

						É possível destacar os seguintes principais segmentos de atuação da empresa:<br>
						• Indústrias Naval e de Óleo e Gás;<br>
						• Plantas de Geração de Energia Elétrica;<br>
						• Indústria de Mineração e de Siderurgia;<br>
						• Telecomunicações;<br>
						• Indústria Médico-Hospitalar;<br>
						• Indústria Automotiva;<br><br>
						
						Se o cliente necessita de material de algum segmento da economia não listado acima, ainda assim a ARCAM DO BRASIL poderá atendê-lo. <br>
						
						Nossa equipe no Brasil e nossa rede de colaboradores internacionais estarão sempre à disposição para localizar qualquer material, eventualmente 
						requisitado, e entregá-lo onde quer que o cliente determine. <br><br>
						
						Esta é a ARCAM, uma empresa que trabalha para trazer o mundo até você.
						
						
					</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="row">
						<div class="skills__title col-xs-4 col-sm-3">Indústria</div>
						<div class="skills-graph-linear col-xs-8 col-sm-9">
							<div class="skills-graph-linear__bg">
								<div class="skills-graph-linear__bar fx">
									<span class="skills-graph-linear__count" data-skills-graph-perc="95">0</span>
								</div>
							</div>
						</div>
						<div class="skills__title col-xs-4 col-sm-3">Hospitais</div>
						<div class="skills-graph-linear col-xs-8 col-sm-9">
							<div class="skills-graph-linear__bg">
								<div class="skills-graph-linear__bar fx">
									<span class="skills-graph-linear__count" data-skills-graph-perc="91">0</span>
								</div>
							</div>
						</div>
						<div class="skills__title col-xs-4 col-sm-3">Construção</div>
						<div class="skills-graph-linear col-xs-8 col-sm-9">
							<div class="skills-graph-linear__bg">
								<div class="skills-graph-linear__bar fx">
									<span class="skills-graph-linear__count" data-skills-graph-perc="80">0</span>
								</div>
							</div>
						</div>
						<div class="skills__title col-xs-4 col-sm-3">TeleComunicações</div>
						<div class="skills-graph-linear col-xs-8 col-sm-9">
							<div class="skills-graph-linear__bg">
								<div class="skills-graph-linear__bar fx">
									<span class="skills-graph-linear__count" data-skills-graph-perc="76">0</span>
								</div>
							</div>
						</div>
						<div class="skills__title col-xs-4 col-sm-3">Auto Peças</div>
						<div class="skills-graph-linear col-xs-8 col-sm-9">
							<div class="skills-graph-linear__bg">
								<div class="skills-graph-linear__bar fx">
									<span class="skills-graph-linear__count" data-skills-graph-perc="88">0</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end skills linear section -->

<?php	

	include('footer.php'); 
	
?>