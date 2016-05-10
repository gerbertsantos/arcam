<?php 
//Texto e imagem Banner
$texto1 = "Todas as informações dos";
$texto2 = "Nossos";
$texto3 = "produtos";
$descricao1 = "Com muita dedicação chegamos até aqui,";
$descricao2 = "faça parte da nossa história.";
$tituloBtn1 = "Saiba mais!";
$urlBtn1 = "";
$tituloBtn2 = "Dúvidas?";
$urlBtn2 = "";
$img;

include('header.php');	
include('banner.php');
include("ajax/conn.php");

$mySQL = new MySQL;
$rsEstados = $mySQL->executeQuery("SELECT * FROM estados;");
$rsEstados_totalRows = mysql_num_rows($rsEstados);
$mySQL->disconnect;

include('produto_content.php');
?>

	<!-- start get it 2 section -->
	<div class="s-get-it-2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 align-middle">
					<div class="s-get-it-2__title">Não perca mais tempo</div>
					<div class="s-get-it-2__title">Faça seu pedido, entregamos em todo Brasil!</div>
				</div>
				<!-- <div class="col-xs-12 col-sm-12 col-md-4 align-middle">
					<a class="btn-a btn-a_size_large btn-a_weight_bold" href="http://likeaprothemes.com">Get theme now!</a>
				</div> -->
			</div>
		</div>
	</div>
	<!-- end get it 2 section -->

	<!-- Incio formulario de pedido-->
	<section class="section-2 section-white s-contact">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12"><span class="section__subtitle">Produtos</span>
					<h3 class="section__title">Faça seu pedido</h3></div>
			</div>
			<div class="row contact">
				<div class="col-xs-12 col-sm-4">
					<div class="contact-info">
						<div class="contact-info__title">Informações</div>
						<div class="contact-info__item ico-60">
							A partir das informações 
							<br> fornecidas acima, faça
							<br> seu pedido.
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
						<form action="ajax/pedido.php" class="contact-form">
							<div class="col-xs-12 col-sm-12">
								<input name="formNome" type="text" placeholder="Nome" class="contact-form__input" required>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input name="formTelefone" type="text" placeholder="Telefone" class="contact-form__input" required>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input name="formEmail" type="email" placeholder="E-mail" class="contact-form__input" required>
							</div>
							<div class="col-xs-12 col-sm-12">
								<input name="formEndereco" type="text" placeholder="Endereço" class="contact-form__input" required>
							</div>							
							<div class="col-xs-12 col-sm-6">
								<select class="contact-form__select" id="estado" name="estado" onchange="buscar_cidades()">
								  <option value="">Selecione um estado</option>
								  <?php
								  		while ($row_rsEstados = mysql_fetch_array($rsEstados))
										{
										echo "<option value='".$row_rsEstados["cod_estados"]."'>".utf8_encode($row_rsEstados["nome"])."</option>";
										}
								  ?>
								</select>
							</div>
							<div class="col-xs-12 col-sm-6" id="load_cidades">
						      	<select class="contact-form__select" name="cidade" id="cidade">
						          <option value="">Selecione uma cidade</option>
						        </select>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input name="formCnpj" type="text" placeholder="CNPJ/CPF" class="contact-form__input" required>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input name="formInscricao" type="text" placeholder="Inscrição" class="contact-form__input" >
							</div>

							<div class="col-xs-12 col-sm-6">
								<select class="contact-form__select" id="marca" name="formMarca" required>
								  <option>Selecione a marca</option>
								  <option>BMW</option>
								  <option>Fiat</option>
								  <option>Chevrolet</option>
								</select>
							</div>
							<div class="col-xs-12 col-sm-6">
								<select class="contact-form__select" id="veiculo" name="formVeiculo" required>
								  <option>Selecione o veículo</option>
								  <option>BMW Serie 3</option>
								  <option>BMW X1</option>
								  <option>BMW Serie 1</option>
								  <option>BMW X6</option>
								  <option>BMW Z4</option>
								  <option>BMW X3zz</option>
								</select>
							</div>
							<div class="col-xs-12 col-sm-6">
								<select class="contact-form__select" id="ano" name="formAno" required>
								  <option>Selecione o ano</option>
								  <option>2016</option>
								  <option>2015</option>
								  <option>2014</option>
								  <option>2013</option>
								</select>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input name="formChassis" type="text" placeholder="Chassis" class="contact-form__input" required>
							</div>
							<div class="col-xs-12 col-sm-12 align-left">
								<textarea name="formMessage" placeholder="Mensagem" cols="30" rows="10" class="contact-form__textarea" required></textarea>
								<button class="contact-form__submit btn-a btn-a_fill_theme" type="submit" value="Enviar">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		function buscar_cidades(){
	      var estado = $('#estado').val();  
	      if(estado){
	        var url = 'ajax/ajax.php?estado='+estado;  
	        $.get(url, function(dataReturn) {
	          $('#load_cidades').html(dataReturn);  
	        });
	      }
	    }
	</script>

<?php include('footer.php'); ?>