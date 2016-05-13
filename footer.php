	<!-- start footer 2 section -->
		<footer class="footer" id="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-4 pb-50">
							<div class="footer__title">Arcam</div>
							<div class="footer__about">A ARCAM DO BRASIL mantém equipe comercial e uma grande estrutura de distribuição prontas para atender, de forma rápida e eficiente, seus clientes por todo o país.</div>
						</div>
						<div class="col-xs-12 col-sm-4 pb-50">
							<div class="footer__title">Contato</div>
							<ul class="footer-contacts">
								<li><h5>Brasil</h5></li>
								<li class="footer-contacts__item">Rodovia Ernani do Amaral Peixoto, 28354, Sala 16</li>
								<li class="footer-contacts__item">24.912-710, Maricá, RJ, Brasil</li>
								<li class="footer-contacts__item">Telefone: <a class="footer-contacts__link" href="tel:+1234567890">+55 21-3731-0762</a></li>
								<li class="footer-contacts__item">Email: <a class="footer-contacts__link" href="mailto:yourmail@domain.com">contato@arcambrasil.com</a></li>
								<li></li>
								<li><h5>Canadá</h5></li>
								<li class="footer-contacts__item">Ottawa - Canadá</li>
								<li class="footer-contacts__item">Email: <a class="footer-contacts__link" href="mailto:yourmail@domain.com">sales@arcambrasil.com</a></li>
							</ul>
							<div class="footer-social">
								<a href="#"><i class="ico-7 footer-social__item"></i></a>
								<a href="#"><i class="ico-6 footer-social__item"></i></a>
								<a href="#"><i class="ico-5 footer-social__item"></i></a>
								<a href="#"><i class="ico-3 footer-social__item"></i></a>
								<a href="#"><i class="ico-2 footer-social__item"></i></a>
								<a href="#"><i class="ico-1 footer-social__item"></i></a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 pb-50">
							<div class="footer__title">Depoimentos</div>
							<!--<ul class="footer-twitter-feed-vertical__list" id="footer-twitter-feed-vertical__list" data-twitter-id="651768229925404672"></ul>-->
							<ul class="footer-twitter-feed-vertical__list">
								<li class="footer-twitter-feed-vertical__item ico-117">
									<p class="tweet">Importação segura e de qualidade! <span style="font-style:italic">"Wagner Rodrigues" - cliente </i></p>
								</li>
								
								<li class="footer-twitter-feed-vertical__item ico-117">
									<p class="tweet">Processos claros e bem definidos! <span style="font-style:italic">"Chef Gutz Restaurante" - cliente </i></p>
								</li>
								
								<li class="footer-twitter-feed-vertical__item ico-117">
									<p class="tweet">Impressionantemente rápido! <span style="font-style:italic">"Gerbert Santos" - cliente </i></p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- footer bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<ul class="footer-copy col-xs-12 col-sm-7 col-md-8">
							<li>Criado com <i class="ico-16 footer-copy__heart"></i> e paixão, amamos o que fazemos!</li>
							<li>&copy; 2016 Desenvolvido por <a href="http://idmsistemas.com.br" title="IDM Sistemas" class="likeapro">IDM Sistemas</a></li>
						</ul>
						<ul class="footer-menu col-xs-12 col-sm-5 col-md-4">
							<li class="footer-menu__item"><a class="footer-menu__link" href="index.php">Home</a></li>
							<li class="footer-menu__item"><a class="footer-menu__link" href="blog-sidebar-right.html">Blog</a></li>
							<li class="footer-menu__item"><a class="footer-menu__link" href="contatp.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer 2 section -->
	</div>
	<!-- /.wrapper -->
	<!-- start modal window -->
		<div class="modal">
			<div class="ico-108 modal__close"></div>
			<div class="ico-157 modal__info"></div>
			<div class="modal__content"></div>
		</div>
		<div class="overlay"></div>
	<!-- end modal window -->

	<script>	
			
			function setBgImageFromData() {
				var el = document.querySelectorAll('[data-background-image]');
				for (var i = 0; i < el.length; i++) {
					if (getComputedStyle(el[i]).backgroundImage === 'none') el[i].style.backgroundImage = 'url(' + el[i].getAttribute('data-background-image') + ')';
				}
			}
			setBgImageFromData();			

			//async loading scripts with callback
			function loadjs(src, callback) {
				var script = document.createElement('script');
				script.src = src;
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(script, s);
				var loaded = false;

				function onload() {
					if (loaded) return;
					loaded = true;
					if (callback) callback();
				}
				script.onload = onload;
				script.onreadystatechange = function() {
					if (this.readyState === 'loaded' || this.readyState === 'complete') {
						setTimeout(onload, 0);
					}
				}
			}
			loadjs('assets/js/jquery.min.js', function() {
				loadjs('assets/js/libs.min.js', function() {
					loadjs('assets/js/common.js');
				});
			});

		</script>


	</body>

	</html>