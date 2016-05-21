	<!-- start footer 2 section -->
		<footer class="footer" id="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-4 pb-50">
							<div class="footer__title">Arcam</div>
							<div class="footer__about">The Arcam Brasil maintains sales team and distribution structure ready to meet quickly and efficiently, customers across the country.</div>
						</div>
						<div class="col-xs-12 col-sm-4 pb-50">
							<div class="footer__title">Contact</div>
							<ul class="footer-contacts">
								<li><h5>Brasil</h5></li>
								<li class="footer-contacts__item">Rodovia Ernani do Amaral Peixoto, 28354, Sala 16</li>
								<li class="footer-contacts__item">24.912-710, Maricá, RJ, Brazil</li>
								<li class="footer-contacts__item">Phone: <a class="footer-contacts__link" href="tel:+1234567890">+55 21-3731-0762</a></li>
								<li class="footer-contacts__item">Email: <a class="footer-contacts__link" href="mailto:contato@arcambrasil.com">contato@arcambrasil.com</a></li>
								<li></li>
								<li><h5>Canadá</h5></li>
								<li class="footer-contacts__item">Ottawa - Canadá</li>
								<li class="footer-contacts__item">Email: <a class="footer-contacts__link" href="mailto:sales@arcamcanada.com">sales@arcambrasil.com</a></li>
							</ul>
							
						</div>
						<div class="col-xs-12 col-sm-4 pb-50">
							<div class="footer__title">Testimonials</div>
							<ul class="footer-twitter-feed-vertical__list">
								<li class="footer-twitter-feed-vertical__item ico-117">
									<p class="tweet">Safe import and quality! <span style="font-style:italic">"Wagner Rodrigues" - cliente </i></p>
								</li>
								
								<li class="footer-twitter-feed-vertical__item ico-117">
									<p class="tweet">Clear processes and well defined! <span style="font-style:italic">"Chef Gutz Restaurante" - client </i></p>
								</li>
								
								<li class="footer-twitter-feed-vertical__item ico-117">
									<p class="tweet">Impressively fast! <span style="font-style:italic">"Gerbert Santos" - client </i></p>
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
							<li>Created with <i class="ico-16 footer-copy__heart"></i> and passion, we love everything we do!!</li>
							<li>&copy; 2016 Developed by <a href="http://idmsistemas.com.br" title="IDM Sistemas" class="likeapro">IDM Sistemas</a></li>
						</ul>
						<ul class="footer-menu col-xs-12 col-sm-5 col-md-4">
							<li class="footer-menu__item"><a class="footer-menu__link" href="index.php">Home</a></li>
							<li class="footer-menu__item"><a class="footer-menu__link" href="contato.php">Contact</a></li>
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
			loadjs('../assets/js/jquery.min.js', function() {
				loadjs('../assets/js/libs.min.js', function() {
					loadjs('../assets/js/common_en.js');
				});
			});

		</script>


	</body>

	</html>