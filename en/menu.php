<div class="container">
	<div class="row">
		<div class="header-logo col-xs-9 col-sm-3">
			<a class="header-logo__link" href="/">
				<span class="theme-color"><img src="../assets/img/logo.png" id="logoArcamMenu"></img></span>
			</a>
		</div>
		<nav class="menu-nav col-xs-3 col-sm-9">
			<div class="menu-toggle">
				<div class="menu-toggle__inner"></div>
			</div>
			<ul class="menu">
				<li class="menu__item menu-mobile-logo"><a class="header-logo__link" href="/">Arcam<span class="theme-color">Brasil</span></a></li>
				<li class="menu__item"><a href="index.php" class="menu__link <?php echo ( $url == 'home' ? $active : null );?>">Home</a></li>
				<li class="menu__item"><a href="empresa.php" class="menu__link <?php echo ( $url == 'empresa' ? $active : null );?>">Our Company</a></li>
				<li class="menu__item"><a href="servicos.php" class="menu__link <?php echo ( $url == 'servicos' ? $active : null );?>">Our Services</a></li>
				<li class="menu__item"><a href="atuacao.php" class="menu__link <?php echo ( $url == 'atuacao' ? $active : null );?>">Our Field Operations</a></li>
				<li class="menu__item"><a href="fornecimento.php" class="menu__link <?php echo ( $url == 'fornecimento' ? $active : null );?>">Our Supply</a></li>
				<li class="menu__item"><a href="auto.php" class="menu__link <?php echo ( $url == 'auto' ? $active : null );?>">Auto Parts</a></li>
				<li class="menu__item"><a href="equipe.php" class="menu__link <?php echo ( $url == 'equipe' ? $active : null );?>">Our Team</a></li>
				<li class="menu__item"><a href="contato.php" class="menu__link <?php echo ( $url == 'contato' ? $active : null );?>">Contact Us</a></li>
				<li class="menu__item">
					<a href="/" class="menu__link"><span><img src="../assets/img/br.png" /></span></a>
				</li>
				<li class="menu__item">
					<a href="/en" class="menu__link"><span><img src="../assets/img/us.png" /></span></a>
				</li>
			</ul>

		</nav>
	</div>
</div>