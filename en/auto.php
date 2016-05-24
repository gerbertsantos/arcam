<?php 
//Texto e imagem Banner
$texto1 = "All information of";
$texto2 = "Our";
$texto3 = "products";
$descricao1 = "With dedication we got here,";
$descricao2 = "part of our history.";
$tituloBtn1 = "MEET OUR TEAM";
$urlBtn1 = "equipe.php";
$tituloBtn2 = "NOW MAKE YOUR REQUEST!";
$urlBtn2 = "#pedido";
$imagem = "auto.jpg";
$scroll = "scroll-to";

include('header.php');	
include('banner.php');
include("../ajax/conn.php");

$mySQL = new MySQL;
$rsEstados = $mySQL->executeQuery("SELECT * FROM estados;");
$rsEstados_totalRows = mysql_num_rows($rsEstados);
$rsMarcas = $mySQL->executeQuery("SELECT * FROM marca;");
$rsMarcas_totalRows = mysql_num_rows($rsMarcas);
$mySQL->disconnect;

include('produto_content.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.js"></script>
<script>
    angular.module('app', []);
    angular.module('app').controller('MyCtrl', function MyCtrl($http, $scope){

        $http.get('https://fipe-parallelum.rhcloud.com/api/v1/carros/marcas').success(function(data) {
            $scope.greeting = data;
        });

        $scope.carregarModelo = function (marca) {
            $http.get("https://fipe-parallelum.rhcloud.com/api/v1/carros/marcas/"+marca.codigo+"/modelos").success(function (data) {
               $scope.modelo = data;
            });
        };

    });
</script>

	<!-- start get it 2 section -->
	<div class="s-get-it-2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 align-middle">
					<div class="s-get-it-2__title">Do not waste time</div>
					<div class="s-get-it-2__title">Place your order, we deliver all over Brazil!</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end get it 2 section -->

	<!-- Incio formulario de pedido-->
	<section class="section-2 section-white s-contact" id="pedido">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<span class="section__subtitle">Products</span>
					<h3 class="section__title">Make your wish</h3>
				</div>
			</div>
			<div class="row contact">
				<div class="col-xs-12 col-sm-4">
					<div class="contact-info">
						<div class="contact-info__title">Information</div>
						<div class="contact-info__item ico-145">
							Fill in the application form,
							respecting the required fields.
							If you do not find the brand and vehicle
							desired in the options, complete with
							option 'other' and describe the maximum
							information in the message area. <br>
							We will contact you then.
						</div>
						
					</div>
				</div>
				<div class="col-xs-12 col-sm-8">
					<div class="row">
						<form action="../ajax/pedido.php" class="contact-form" id="pedido">
							<div class="col-xs-12 col-sm-12">
								<input name="formNome" type="text" placeholder="Name" class="contact-form__input" required>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input name="formTelefone" type="text" placeholder="Phone" class="contact-form__input" required>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input name="formEmail" type="email" placeholder="E-mail" class="contact-form__input" required>
							</div>
							<div class="col-xs-12 col-sm-12">
								<input name="formEndereco" type="text" placeholder="Address" class="contact-form__input" required>
							</div>							
							<div class="col-xs-12 col-sm-6">
								<select class="contact-form__select" id="estado" name="estado" onchange="buscar_cidades()">
								  <option value="">Select a state</option>
								  <?php
								  		while ($row_rsEstados = mysql_fetch_array($rsEstados))
										{
										echo "<option value='".$row_rsEstados["cod_estados"]."'>".utf8_encode($row_rsEstados["nome"])."</option>";
										}
								  ?>
								</select>
							</div>
							<div class="col-xs-12 col-sm-6" id="load_cidades">
								<span id="carregando_cidade">...wait, loading</span>
						      	<select class="contact-form__select" name="cidade" id="cidade">
						          <option value="">Select a city</option>
						        </select>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input name="formCnpj" type="text" placeholder="ID/CNPJ/CPF" class="contact-form__input" required>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input name="formInscricao" type="text" placeholder="Inscription" class="contact-form__input" >
							</div>

							<div class="col-xs-12 col-sm-6">
								<select id="marca" class="customSel contact-form__select" ng-options="x as x.nome for x in greeting" ng-model="marca" ng-change="carregarModelo(marca)">
						            <option value="" selected>Select the brand</option>
						        </select>
							</div>
							<div class="col-xs-12 col-sm-6" id="modelos">
								<select id="modelo" class="customSel contact-form__select">
						            <option value="0" selected>Select the model</option>
						            <option ng-repeat="x in modelo.modelos" value="{{ x.nome }}">{{ x.nome }}</option>
						        </select>
							</div>
							<div class="col-xs-12 col-sm-6">
								<select class="contact-form__select" name="yearpicker" id="yearpicker" required>
									<option value="0" selected>Select the year</option>
								</select>
							</div>
							<div class="col-xs-12 col-sm-6">
								<input name="formChassis" type="text" placeholder="Chassis number" class="contact-form__input" required>
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
	    
	    $(document).ready(function(){
          for (i = new Date().getFullYear(); i > 1969; i--)
          {
              $('#yearpicker').append($('<option />').val(i).html(i));
          }
        });
	</script>

<?php include('footer.php'); ?>