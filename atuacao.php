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
	$img;

	include('header.php');	
	include('banner.php'); 
?>

<!-- start skills linear section -->
	<section class="section-2 section-white s-skills bg-arcam-invert" id="skills">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<span class="section__subtitle">What</span>
					<h3 class="section__title">We do best</h3>
				</div>
			</div>
			<div class="row skills">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<h4 class="skills__subtitle">Our Skills</h4>
					<p class="skills__text">Inventore hic veritatis rerum velit perferendis quos voluptatem nulla odio necessitatibus cumque blanditiis labore atque tempore voluptatum amet consectetur, adipisci, mollitia ex eos numquam sed error accusantium, voluptatibus. Maiores rerum voluptates,
						deleniti asperiores veritatis. Et molestias, labore ipsa. Distinctio animi autem similique consequuntur excepturi unde a, pariatur cum iure mollitia saepe illum dignissimos ab laborum id odio possimus accusantium, earum nisi officia deserunt nostrum
						iusto. Impedit voluptate veniam numquam suscipit minus nihil reprehenderit expedita eum quam quas. Fugiat perspiciatis nulla eum velit consequatur harum consequuntur aliquid sequi nobis ea, voluptas nihil optio ullam, corporis omnis beatae ipsa
						amet!</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="row">
						<div class="skills__title col-xs-4 col-sm-2">HTML</div>
						<div class="skills-graph-linear col-xs-8 col-sm-10">
							<div class="skills-graph-linear__bg">
								<div class="skills-graph-linear__bar fx">
									<span class="skills-graph-linear__count" data-skills-graph-perc="95">0</span>
								</div>
							</div>
						</div>
						<div class="skills__title col-xs-4 col-sm-2">CSS</div>
						<div class="skills-graph-linear col-xs-8 col-sm-10">
							<div class="skills-graph-linear__bg">
								<div class="skills-graph-linear__bar fx">
									<span class="skills-graph-linear__count" data-skills-graph-perc="91">0</span>
								</div>
							</div>
						</div>
						<div class="skills__title col-xs-4 col-sm-2">JavaScript</div>
						<div class="skills-graph-linear col-xs-8 col-sm-10">
							<div class="skills-graph-linear__bg">
								<div class="skills-graph-linear__bar fx">
									<span class="skills-graph-linear__count" data-skills-graph-perc="70">0</span>
								</div>
							</div>
						</div>
						<div class="skills__title col-xs-4 col-sm-2">PHP</div>
						<div class="skills-graph-linear col-xs-8 col-sm-10">
							<div class="skills-graph-linear__bg">
								<div class="skills-graph-linear__bar fx">
									<span class="skills-graph-linear__count" data-skills-graph-perc="66">0</span>
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