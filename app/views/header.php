<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">

	<!-- Declaração Bootstrap para compatibilidade com celular -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Título da página -->
	<title>Projeto WebDesign</title>

	<!-- CSS -->
	<link rel="stylesheet" href="app/css/bootstrap.min.css">
	<link rel="stylesheet" href="app/css/style.css">

	<!-- Ícone da guia do site -->
	<link rel="shortcut icon" href="app/img/ico/logo.png" type="image/png"> 

</head>

<body >
	<!-- Aplica uma camada escura transparente por cima do background -->
	<div class="efeito">

		<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column" >

			<header class="masthead mb-auto">
				<nav class="navbar navbar-expand-xl navbar-dark">
					<!-- Logo da navbar -->
					<a href="?pag=home" class="navbar-brand">
						<img src="app/img/ico/logo.png" alt="home" width="100px" title="Home">
					</a>

					<!-- Botão que expande o menu em telas pequenas -->
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#menu" >
						<span class="navbar-toggler-icon navbar-dark"></span>
					</button>

					<!-- Menu navbar -->
					<div class="collapse navbar-collapse" id="menu">

						<ul class="navbar-nav ml-md-auto">

							<li class="nav-item active">
								<a href="?pag=home" class="col-md-2 ">
									<img src="app/img/ico/home.png" alt="" width="32" height="32" title="Home">
									Home
								</a>
							</li>
							<li class="nav-item">
								<a href="?pag=quem_somos" class="col-md-2 ">
									<img src="app/img/ico/about_us.png" alt="" width="32" height="32" title="Quem Somos">
								Quem Somos</a>
							</li>
							<li class="nav-item">
								<a href="?pag=servicos" class="col-md-2 ">
									<img src="app/img/ico/services.png" alt="" width="32" height="32" title="Serviços">
								Serviços</a>
							</li>
							<li class="nav-item">
								<a href="?pag=fale_conosco" class="col-md-2 ">
									<img src="app/img/ico/tell_us.png" alt="" width="32" height="32" title="Fale Conosco">
								Fale Conosco</a>
							</li>

						</ul>

					</div>
				</nav>

			</header>