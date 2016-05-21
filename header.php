<?php
	//header( 'Cache-Control: no-cache' );
	//header( 'Content-type: application/xml; charset="utf-8"', true );
	//ini_set('display_errors', 1);
		//Verificação de Segurança
		$url = $_SERVER["PHP_SELF"];
		if(eregi("class.Upload.php", "$url"))
		{
			header("Location: ../index.php");
		}
		
		$script_name = $_SERVER ['SCRIPT_NAME'];

		$result = substr(strrchr($script_name, "/"), 1);

		if( $result !== FALSE && ! is_null( $result ) ) {
			$url;
			$active = "menu__link_active";
			
		    switch ($result) {
		    	case 'index.php':
		    		$url="home";
		    		
		    		break;
		    	case 'empresa.php':
		    		$url="empresa";
		    		
		    		break;
		    	case 'servicos.php':
		    		$url="servicos";
		    		
		    		break;
		    	case 'atuacao.php':
		    		$url="atuacao";
		    		
		    		break;
				case 'fornecimento.php':
		    		$url="fornecimento";
		    		
		    		break;
		    	case 'equipe.php':
		    		$url="equipe";
		    		
		    		break;
		    	case 'auto.php':
		    		$url="auto";
		    		
		    		break;	
		    	case 'contato.php':
		    		$url="contato";
		    		
		    		break;			    			
		    	default:
		    		$url = "index.php";
		    		break;
		    }
		}

	?>

		<!DOCTYPE html>
		<html lang="en" ng-app="app" >

		<head>
			<meta charset="UTF-8"></meta>
			<title>Arcam Brasil</title>
			<!-- favicons -->
			<link rel="shortcut icon" href="assets/img/inc/favicon.ico" type="image/x-icon"/>
			<link rel="apple-touch-icon" href="assets/img/inc/apple-touch-icon.png"/>
			<link rel="apple-touch-icon" sizes="57x57" href="assets/img/inc/apple-touch-icon-57x57.png"/>
			<link rel="apple-touch-icon" sizes="72x72" href="assets/img/inc/apple-touch-icon-72x72.png"/>
			<link rel="apple-touch-icon" sizes="76x76" href="assets/img/inc/apple-touch-icon-76x76.png"/>
			<link rel="apple-touch-icon" sizes="114x114" href="assets/img/inc/apple-touch-icon-114x114.png"/>
			<link rel="apple-touch-icon" sizes="120x120" href="assets/img/inc/apple-touch-icon-120x120.png"/>
			<link rel="apple-touch-icon" sizes="144x144" href="assets/img/inc/apple-touch-icon-144x144.png"/>
			<link rel="apple-touch-icon" sizes="152x152" href="assets/img/inc/apple-touch-icon-152x152.png"/>
			<link rel="apple-touch-icon" sizes="180x180" href="assets/img/inc/apple-touch-icon-180x180.png"/>

			<!-- viewport -->
			<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
			<!-- page description -->
			<meta name="description" content="description"></meta>
			<!-- styles -->
			<link rel="stylesheet" href="assets/css/styles.css"/>
			<!-- icons -->
			<link rel="stylesheet" href="assets/icons/styles.css"/>
			<!-- arcam -->
			<link rel="stylesheet" href="assets/css/arcam.css"/>
			
			<!-- <link rel="stylesheet" href="assets/css/theme-colors/theme-8b63b1.css"> -->
		</head>

		<body class="p-onepage menu-mobile-right" ng-controller="MyCtrl">
			
			<?php include("preloader.php");?>
			<!-- global wrapper -->
			<div class="wrapper">
				<!-- start header(menu) onepage section -->
				<header class="header ">
					<?php include("menu.php");?>
				</header>
				<!-- end header(menu) onepage section -->

				<div class="wrapper-content">

			