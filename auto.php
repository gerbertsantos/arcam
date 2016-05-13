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
$imagem = "auto.jpg";

include('header.php');	
include('banner.php');
include("ajax/conn.php");

$mySQL = new MySQL;
$rsEstados = $mySQL->executeQuery("SELECT * FROM estados;");
$rsEstados_totalRows = mysql_num_rows($rsEstados);
$rsMarcas = $mySQL->executeQuery("SELECT * FROM marca;");
$rsMarcas_totalRows = mysql_num_rows($rsMarcas);
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
						<div class="contact-info__title">Orientações</div>
						<div class="contact-info__item ico-145">
							Preencha o formulário de pedido,
							respeitando os campos obrigatórios.
							Caso não encontre a marca e veiculo
							desejado nas opções, preencha com a
							opção 'outros' e descreva o máximo de
							informações na área de mensagem.<br>
							Entraremos em contato com você logo 
							em seguida.
						</div>
						
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
								<span id="carregando_cidade">...aguarde, carregando</span>
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
								<select class="contact-form__select" id="marca" name="marca"  onchange="buscar_veiculos()" required>
								  <option>Selecione a marca</option>
								  <?php
								  		while ($row_rsMarcas = mysql_fetch_array($rsMarcas))
										{
										echo "<option value='".$row_rsMarcas["id_marca"]."'>".utf8_encode($row_rsMarcas["nome"])."</option>";
										}
								  ?>
								</select>
							</div>
							<div class="col-xs-12 col-sm-6" id="load_veiculos">
								<span id="carregando_veiculo">...aguarde, carregando</span>
								<select class="contact-form__select" id="veiculo" name="veiculo" required>
								  <option>Selecione o veículo</option>
								</select>
							</div>
							<div class="col-xs-12 col-sm-6">
								<select class="contact-form__select" name="yearpicker" id="yearpicker" required></select>
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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript">
	
		function hideshow(div1, div2){
	    	$(div1).hide();
	    	$(div2).show();
	    };
	
		function buscar_cidades(){
	      var estado = $('#estado').val();  
	      if(estado){
	        var url = 'ajax/ajax_cidades.php?estado='+estado; 
	        hideshow('#cidade','#carregando_cidade');
	        $.get(url, function(dataReturn) {
	          $('#load_cidades').html(dataReturn); 
	          hideshow('#carregando_cidade','#cidade');
	        });
	      }
	    }
	    
	    function buscar_veiculos(){
	      var marca = $('#marca').val();  
	      if(marca){
	        var url = 'ajax/ajax_veiculos.php?marca='+marca; 
	        hideshow('#veiculo','#carregando_veiculo');
	        $.get(url, function(dataReturn) {
	          $('#load_veiculos').html(dataReturn);
	          hideshow('#carregando_veiculo','#veiculo');
	        });
	      }
	    }
	    
	    $(document).ready(function(){
          for (i = new Date().getFullYear(); i > 1969; i--)
          {
              $('#yearpicker').append($('<option />').val(i).html(i));
          }
        });
	</script>

<?php include('footer.php'); ?>