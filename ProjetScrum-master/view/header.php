<!DOCTYPE html> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Trip Advisor</title>
		<!--<link rel="stylesheet" type="text/css" href="./css/style.css" /><-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="view/site/assets/css/main.css" />
	</head>

	<body id="top">
		<main>
			<section id="banner" data-video="view/site/images/banner">
				<div class="inner">
					<header>
						<h1><a href='.'>TripAdvisor</a></h1>
					</header>
				</div>
			</section>
		<nav id="navigation">
			<ul>
				<?php if((!isset($_SESSION['id_hotelier']) || $_SESSION['id_hotelier'] == '') && (!isset($_SESSION['id_abonne']) || $_SESSION['id_abonne'] == '')){?>
					<li><a href="?r=hotelier/register">S'inscrire en tant qu'hotelier</a></li>
					<li><a href="?r=site/login">Se connecter</a></li>
				<?php } else if(isset($_SESSION['id_hotelier']) && $_SESSION['id_hotelier'] != '') { ?>
					<li><a href="?r=photo/addPhoto">Ajouter une photo</a></li>
					<li><a href="?r=hotel/add">Créer un hotel</a></li>
					<!--<li><a href="?r=hotel/set">Modifier un hotel</a></li>-->
				<?php } if(!(!isset($_SESSION['id_hotelier']) || $_SESSION['id_hotelier'] == '') || !(!isset($_SESSION['id_abonne']) || $_SESSION['id_abonne'] == '')){?>
				<li><a href="?r=site/logout">Deconnexion</a></li>
				<?php } ?>
			</ul>
		</nav>
