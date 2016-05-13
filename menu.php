<div class="container">
	<div class="row">
		<div class="header-logo col-xs-9 col-sm-3">
			<a class="header-logo__link" href="/">
				<span class="theme-color"><img src="assets/img/logo_invert.png" id="logoArcamMenu"></img></span>
			</a>
		</div>
		<nav class="menu-nav col-xs-3 col-sm-9">
			<div class="menu-toggle">
				<div class="menu-toggle__inner"></div>
			</div>
			<ul class="menu">
				<li class="menu__item menu-mobile-logo"><a class="header-logo__link" href="/">Arcam<span class="theme-color">Brasil</span></a></li>
				<li class="menu__item"><a href="index.php" class="menu__link <?php echo ( $url == 'home' ? $active : null );?>">Home</a></li>
				<li class="menu__item"><a href="empresa.php" class="menu__link <?php echo ( $url == 'empresa' ? $active : null );?>">Empresa</a></li>
				<li class="menu__item"><a href="servicos.php" class="menu__link <?php echo ( $url == 'servicos' ? $active : null );?>">Serviços</a></li>
				<li class="menu__item"><a href="atuacao.php" class="menu__link <?php echo ( $url == 'atuacao' ? $active : null );?>">Atuação</a></li>
				<li class="menu__item"><a href="fornecimento.php" class="menu__link <?php echo ( $url == 'fornecimento' ? $active : null );?>">Fornecimento</a></li>
				<li class="menu__item"><a href="equipe.php" class="menu__link <?php echo ( $url == 'equipe' ? $active : null );?>">Equipe</a></li>
				<li class="menu__item"><a href="auto.php" class="menu__link <?php echo ( $url == 'auto' ? $active : null );?>">Auto peças</a></li>
				<li class="menu__item"><a href="contato.php" class="menu__link <?php echo ( $url == 'contato' ? $active : null );?>">Contato</a></li>
			</ul>

		</nav>
	</div>
</div>